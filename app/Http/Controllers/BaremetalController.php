<?php

namespace App\Http\Controllers;

use App\BaremetalModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BaremetalController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware( 'auth' );
    }

    public function index() {
        return view( 'baremetal' );
    }

    public function save( Request $request ) {
        if ( $request->ajax() ) {
            $post = $request->post();
            if ( empty( $post ) ) {
                echo 'Please enter your email and password';
                exit();
            }

            $model  = new BaremetalModel();
            $return = $model->save( $post );
            header( 'Content-Type: application/json' );
            echo json_encode( $return );
        }
        exit();
    }

    public function load_data( Request $request ) {
        if ( $request->ajax() ) {
            $post   = $request->post();
            $model  = new BaremetalModel();
            $return = $model->get( $post );
            header( 'Content-Type: application/json' );
            echo json_encode( $return );
        } else {
            return abort( 404 );
        }
        exit();
    }

    public function edit( Request $request ) {
        if ( $request->ajax() ) {
            $post   = $request->post();
            $model  = new BaremetalModel();
            $return = $model->get( $post );
            echo json_encode( $return );
        } else {
            return abort( 404 );
        }
        exit();
    }

    public function delete( Request $request ) {
        if ( $request->ajax() ) {
            $post = $request->post();
            if ( empty( $post ) ) {
                echo 'Record not found.';
                exit();
            }
            echo DB::table( 'cluster_baremetal' )->where( 'id', $post['id'] )->delete();
        } else {
            return abort( 404 );
        }
        exit();
    }
}
