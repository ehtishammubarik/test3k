<?php

namespace App\Http\Controllers;

class GatewaysController extends Controller {

    public function __construct() {
        $this->middleware( 'auth' );
    }

    public function index() {
        return view( 'gateways' );
    }
}
