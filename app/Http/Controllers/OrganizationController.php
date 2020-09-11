<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrganizationController extends Controller {

    public function __construct() {
        $this->middleware( 'auth' );
    }

    public function index() {
        return view( 'organization' );
    }

    /**
     * @param Request $request
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function create( Request $request ) {
        if ( $request->ajax() ) {
            $post         = $request->post();
            $body         = array(
                'organization' => array(
                    'ids'         => array(
                        'organization_id' => str_title_rand( $post['organization_id'], false ),
                    ),
                    'name'        => (string) $post['name'],
                    'description' => (string) $post['description'],
                ),
            );
            $user_id      = (string) Auth::user()->user_id;
            $bearer_token = (string) Auth::user()->bearer_token;
            if ( empty( $bearer_token ) ) {
                return response()->json( [ 'message' => 'Bearer Token Missing try Again.' ] );
            }
            $client = new Client();
            try {
                $response = $client->request( "POST", "https://lorawan.aceso.no/api/v3/users/{$user_id}/organizations", [
                    'headers' => [
                        'Authorization' => 'Bearer ' . $bearer_token,
                        'Accept'        => 'application/json',
                    ],
                    'body'    => json_encode( $body ),
                ] );

                $code = $response->getStatusCode();

                if ( $code == 200 ) {

                }

                return response()->json( [
                    'message' => $code,
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
}

//MFRWG.AJMTDAQOF3SZLNGJVM34ONHCZGNPSLYQYM7OYLY.G2F33BZ44JUVUWRARLYIKA7H336FVIL3RFE5YRRYDN4OPJFHVJ6Q
//https://lorawan.aceso.no/oauth/authorize?client_id=nasir&redirect_uri=<REDIRECT-URI>&state=<STATE>&response_type=code


//https://lorawan.aceso.no/oauth/login?n=%2Foauth%2Fauthorize%3Fclient_id%3Dconsole%26redirect_uri%3D%252Fconsole%252Foauth%252Fcallback%26response_type%3Dcode%26state%3DMs1HXte4ANDjkqwu


