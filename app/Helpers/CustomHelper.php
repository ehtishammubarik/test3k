<?php

use Illuminate\Support\Facades\DB;

function current_page() {
    $request  = '';
    $request1 = request()->segment( '1' );
    $request2 = request()->segment( '2' );
    $request3 = request()->segment( '3' );

    if ( ! empty( $request1 ) ) {
        $request = $request1;
    }
    if ( ! empty( $request2 ) && ! is_numeric( $request2 ) ) {
        $request = $request1 . '/' . $request2;
    }
    if ( ! empty( $request3 ) && ! is_numeric( $request3 ) ) {
        $request = $request1 . '/' . $request2 . '/' . $request3;
    }

    $ex = explode( '/', $request );
    if ( ! empty( $ex[0] ) ) {
        $request = $ex[0];
    }

    return $request;
}

function guzzleResponse( $code = '', $responce = '' ) {
    echo $code;
    show_array( $responce );
    die;
    if ( $code == 200 ) {
        return 'OK';
    } else if ( $code == 400 ) {
        if ( strstr( $responce, "need at least `{n}` characters" ) ) {
            return "Password Need at least `8` characters";
        } else if ( strstr( $responce, "need at least `1` uppercase letter(s)" ) ) {
            return "Password Need at least `1` uppercase letter(s)";
        } else if ( strstr( $responce, "need at least `1` digit(s))" ) ) {
            return "Password Need at least `1` digit(s))";
        }
    } else if ( $code == 409 ) {
        if ( strstr( $responce, 'entity already exists' ) ) {
            return "Entity already exists";
        }
    } else if ( $code == 401 ) {
        if ( strstr( $responce, 'access token not found' ) ) {
            return "('Bearer Key') Access token not found";
        }
    } else if ( $code == 404 ) {
        if ( strstr( $responce, '404' ) ) {
            return "('404') page not found";
        }
    }

    return "('{$code}') Bad Request try again.";
}

function str_slug( $str, $separator = '-', $lowercase = false ) {
    if ( $separator == 'dash' ) {
        $separator = '-';
    } else if ( $separator == 'underscore' ) {
        $separator = '_';
    }

    $q_separator = preg_quote( $separator );

    $trans = array(
        '&.+?;'                   => '',
        '[^a-z0-9 _-]'            => '',
        '\s+'                     => $separator,
        '(' . $q_separator . ')+' => $separator,
    );

    $str = strip_tags( $str );

    foreach ( $trans as $key => $val ) {
        $str = preg_replace( "#" . $key . "#i", $val, $str );
    }

    if ( $lowercase === true ) {
        $str = strtolower( $str );
    }

    return trim( $str, $separator );
}

function str_title_rand( $str = '', $rand = true, $len = 8 ) {
    if ( empty( $str ) ) {
        return false;
    }

    if ( ! empty( $rand ) ) {
        return (string) strtolower( str_slug( $str ) . '-' . randNumber( $len ) );
    }

    return (string) strtolower( str_slug( $str ) );
}

function DBLastQuery() {
    $Q = DB::getQueryLog();

    return end( $Q );
}
