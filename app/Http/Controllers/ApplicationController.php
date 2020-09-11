<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class ApplicationController extends Controller {

    public function __construct() {
        $this->middleware( 'auth' );
    }

    public function index( Request $request ) {
        if ( $request->ajax() ) {
            $data       = DB::table( 'applications' )->get();
            $DataTables = new DataTables();

            return $DataTables::of( $data )->addColumn( 'action', function ( $data ) {
                $button = '<a class="pointer cbtn" href="' . url( "applications/view/" . $data->id ) . '" title="View(' . $data->id . ')"><i class="material-icons small">insert_link</i></a>';
                $button .= '&nbsp;';
                $button .= '<a class="pointer cbtn edit" data-id="' . $data->id . '" title="Edit(' . $data->id . ')"><i class="material-icons small">mode_edit</i></a>';
                $button .= '&nbsp;';
                $button .= '<a class="pointer cbtn delete" data-id="' . $data->id . '" title="Delete(' . $data->id . ')"><i class="material-icons small">delete_sweep</i></a>';

                return $button;
            } )->make( true );
        }

        return view( 'applications' );
    }

    /**
     * @param Request $request
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function create( Request $request ) {
        if ( $request->ajax() ) {
            $post           = $request->post();
            $application_id = str_title_rand( $post['application_id'], false );
            $body           = array(
                'application' => array(
                    'ids'         => array(
                        'application_id' => $application_id,
                    ),
                    'name'        => (string) $post['name'],
                    'description' => (string) $post['description'],
                ),
            );
            $client         = new Client();
            try {
                $response = $client->request( 'POST', 'https://lorawan.aceso.no/api/v3/users/admin/applications', [
                    'headers' => [
                        'Accept'        => 'application/json',
                        'Authorization' => 'Bearer MFRWG.RWWGHBUKZUXK3DVL65SFA2LONRIXWAJRNKEPU5I.HIZSCBCKZ635Q5VUMGPN7OBA5KPEX6GCW3HQOOTOWSEW6N4IHT4Q',
                    ],
                    'body'    => json_encode( $body ),
                ] );

                $responseCode = $response->getStatusCode();

                if ( $responseCode == 200 ) {
                    // insert record into db
                    DB::table( 'applications' )->insertGetId( [
                        'user_id'        => Auth::id(),
                        'application_id' => $application_id,
                        'name'           => $post['name'],
                        'description'    => $post['description'],
                        'added_ip'       => myip(),
                    ] );
                }

                return response()->json( [
                    'message' => $responseCode,
                ] );
            } catch ( RequestException $e ) {
                if ( $e->hasResponse() ) {
                    return response()->json( [
                        'message' => guzzleResponse( $e->getCode(), Psr7\str( $e->getResponse() ) ),
                    ] );
                }
            }
        }
        exit();
    }

    public function view( $id = '' ) {
        if ( empty( $id ) ) {
            abort( 404 );
        }

        $data = DB::table( 'applications' )->where( 'id', $id )->get()->toArray();
        if ( empty( $data ) ) {
            abort( 404 );
        }

        return view( 'app-overview', [ 'data' => $data ] );
    }
}
