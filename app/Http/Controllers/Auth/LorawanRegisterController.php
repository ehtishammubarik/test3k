<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LorawanRegisterController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware( 'guest' );
    }

    /**
     * @param Request $request
     */
    public function userRegisterLorawan( Request $request ) {
        if ( $request->ajax() ) {
            $post = $request->post();
            // check if user already exits
            $is_user_exist = $this->is_user_exist( $post['email'] );
            if ( ! empty( $is_user_exist->email ) ) {
                echo 'User already exists.';
                exit();
            }
            $client = new Client();
            $post['user_id'] = str_title_rand( $post['name'] );
            $body            = array(
                'user'             => array(
                    'ids'                   => array(
                        'user_id' => $post['user_id'],
                    ),
                    'name'                  => (string) $post['name'],
                    'primary_email_address' => (string) $post['email'],
                    'password'              => (string) $post['password'],
                    'password_confirm'      => (string) $post['password_confirmation'],
                ),
                'invitation_token' => '',
            );
            try {
                $response = $client->request( 'POST', 'https://lorawan.aceso.no/api/v3/users', [
                    'headers' => [
                        'Accept' => 'application/json',
                    ],
                    'body'    => json_encode( $body ),
                ] );
                $code     = $response->getStatusCode();
                if ( isset( $code ) && $code == '200' ) {
                    Auth::login( $this->create_user_db( $post ), true );

                    return response()->json( [
                        'message' => $code,
                    ] );
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
        echo "You are not authorized.";
        exit();
    }

    public function is_user_exist( $email = '' ) {
        if ( empty( $email ) ) {
            return false;
        }

        return User::where( 'email', $email )->first();
    }

    public function create_user_db( array $data ) {
        return User::create( [
            'name'         => $data['name'],
            'email'        => $data['email'],
            'user_id'      => $data['user_id'],
            'app_password' => $data['password'],
            'added_ip'     => myip(),
            'added_time'   => mysql_datetime(),
            'password'     => Hash::make( $data['password'] ),
        ] );
    }

}
