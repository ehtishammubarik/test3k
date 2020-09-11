<?php
/**
 * @return string
 *
 * Get current IP address.
 * See details about IP address at
 * http://whatismyipaddress.com/ip-address
 */
function myip() {
    if ( getenv( 'HTTP_CLIENT_IP' ) ) {
        $ip = getenv( 'HTTP_CLIENT_IP' );
    } elseif ( getenv( 'HTTP_X_FORWARDED_FOR' ) ) {
        $ip = getenv( 'HTTP_X_FORWARDED_FOR' );
    } elseif ( getenv( 'HTTP_X_FORWARDED' ) ) {
        $ip = getenv( 'HTTP_X_FORWARDED' );
    } elseif ( getenv( 'HTTP_FORWARDED_FOR' ) ) {
        $ip = getenv( 'HTTP_FORWARDED_FOR' );
    } elseif ( getenv( 'HTTP_FORWARDED' ) ) {
        $ip = getenv( 'HTTP_FORWARDED' );
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }

    return $ip;
}

/**
 * @param $price
 * return decimale number (.) after 2 number
 *
 * @return string
 */
function number_formate( $price ) {
    return number_format( (float) $price, 2, '.', '' );
}

/**
 * @return bool
 *
 * Check that current server is localhost or not.
 */
function is_localhost() {
    if ( ! isset( $_SERVER["HTTP_HOST"] ) ) {
        return false;
    }

    return ( $_SERVER["REMOTE_ADDR"] == "::1" || $_SERVER["REMOTE_ADDR"] == "127.0.0.1:3307" || $_SERVER["REMOTE_ADDR"] == "127.0.0.1" || $_SERVER["REMOTE_ADDR"] == "127.0.0.1:1017" || $_SERVER["HTTP_HOST"] == "localhost" || $_SERVER["HTTP_HOST"] == "127.0.0.1" || $_SERVER["HTTP_HOST"] == "127.0.0.1:1017" );
}

/**
 * @param $email
 *
 * @return mixed
 *
 * This function returns TRUE/FALSE about string if it is an email address or not.
 */
function is_email( $email ) {
    return filter_var( $email, FILTER_VALIDATE_EMAIL );
}


/**
 * @param      $ar
 * @param bool $return
 *
 * @return mixed
 *
 * Return array/object/boolean in human friendly form.
 */
function show_array( $ar, $return = false ) {
    if ( is_null( $ar ) ) {
        $ar = "NULL";
    }
    if ( is_bool( $ar ) && $ar ) {
        $ar = "true";
    } elseif ( is_bool( $ar ) && ! $ar ) {
        $ar = "false";
    }

    if ( $return ) {
        return print_r( $ar, true );
    } else {
        echo "<pre>\n";
        print_r( $ar );
        echo "</pre>\n";
    }
}

/**
 * @param $arg
 *
 * @return string
 *
 * Converts bytes into human read format.
 * e.g. 1024 > 1Kb
 */
function formatsize( $arg ) {
    if ( $arg > 0 ) {
        $j   = 0;
        $ext = [ "b", "K", "M", "G", "T" ];
        while ( $arg >= pow( 1024, $j ) ) {
            ++ $j;
        }

        return round( $arg / pow( 1024, $j - 1 ) * 100 ) / 100 . $ext[ $j - 1 ];
    } else {
        return "0b";
    }
}

/**
 * @param $dir
 *
 * Remove folder and all files/folders in it.
 */
function rrmdir( $dir ) {
    if ( is_dir( $dir ) ) {
        $objects = scandir( $dir );
        foreach ( $objects as $object ) {
            if ( $object != "." && $object != ".." ) {
                if ( is_dir( $dir . "/" . $object ) ) {
                    rrmdir( $dir . "/" . $object );
                } else if ( is_file( $dir . "/" . $object ) ) {
                    @unlink( $dir . "/" . $object );
                }
            }
        }
        reset( $objects );
        @rmdir( $dir );
    }
}

/**
 * @return string
 *
 * Get referrer URL.
 */
function referral_url() {
    return isset( $_SERVER['HTTP_REFERER'] ) ? $_SERVER['HTTP_REFERER'] : '';
}

/**
 * @param int    $length
 * @param string $possible
 *
 * @return string
 *
 * Generate a random password string.
 */
function make_password( $length = 8, $possible = "2346789bcdfghjkmnpqrtvwxyzBCDFGHJKLMNPQRTVWXYZ!@#$%^&*()-><{}[]=+?" ) {
    // start with a blank password
    $password = "";

    // define possible characters - any character in this string can be
    // picked for use in the password, so if you want to put vowels back in
    // or add special characters such as exclamation marks, this is where
    // you should do it

    // we refer to the length of $possible a few times, so let's grab it now
    $maxlength = strlen( $possible );

    // check for length overflow and truncate if necessary
    if ( $length > $maxlength ) {
        $length = $maxlength;
    }

    // set up a counter for how many characters are in the password so far
    $i = 0;

    // add random characters to $password until $length is reached
    while ( $i < $length ) {

        // pick a random character from the possible ones
        $char = substr( $possible, mt_rand( 0, $maxlength - 1 ), 1 );

        // have we already used this character in $password?
        if ( ! strstr( $password, $char ) ) {
            // no, so it's OK to add it onto the end of whatever we've already got...
            $password .= $char;
            // ... and increase the counter by one
            $i ++;
        }

    }

    // done!
    return $password;
}

/**
 * @param        $arr
 * @param string $sep
 * @param bool   $considerLineBreaks
 *
 * @return array|mixed
 *
 * Convert string or json data into an array
 */
function make_array( $arr, $sep = ",", $considerLineBreaks = false ) {
    if ( is_string( $arr ) && trim( $arr ) == "" ) {
        return [];
    }
    if ( is_array( $arr ) ) {
        return $arr;
    }
    if ( is_json( $arr ) ) {
        $arr = json_decode( $arr, true );

        return $arr;
    }
    if ( $considerLineBreaks ) {
        $arr = str_replace( "\n", $sep, $arr );
    }
    //$arr = str_replace("'", "''", $arr);            // To avoid error MySQL insertion/update.
    $arr = explode( $sep, $arr );
    $arr = array_map( 'trim', $arr );
    $arr = array_filter( $arr );

    return $arr;
}


/**
 * @param $args
 * @param $default
 *
 * @return array|string
 *
 * Sets arguments. This function is mostly used in methods of classes in Bindia library.
 */
function set_args( $args, $default ) {
    if ( ! is_array( $args ) ) {
        $args = str_replace( " = ", "=", $args );
        $args = str_replace( " =", "=", $args );
        $args = str_replace( " =", "=", $args );
        $args = str_replace( " =", "=", $args );
        $args = stripslashes( $args );
        parse_str( $args, $args );
    }
    if ( ! is_array( $args ) ) {
        return [];
    }
    $default = make_array( $default );
    if ( ! is_array( $default ) ) {
        return $default;
    }
    foreach ( $default as $k => $v ) {
        if ( ! isset( $args[ $k ] ) ) {
            $args[ $k ] = $v;
        }
    }
    if ( @get_magic_quotes_gpc() ) {
        $args = array_map( "stripslashes", $args );
    }

    return $args;
}

/**
 * @param string $string
 *
 * @return bool
 *
 * Check if provided string is json or not.
 */
function is_json( $string ) {
    if ( is_numeric( $string ) ) {
        return false;
    }
    if ( is_bool( $string ) ) {
        return false;
    }
    if ( is_null( $string ) ) {
        return false;
    }
    if ( ! is_string( $string ) ) {
        return false;
    }
    if ( $string == "" || $string == " " ) {
        return false;
    }
    @json_decode( $string );

    return ( json_last_error() == JSON_ERROR_NONE );
}

/**
 * @param int    $length
 * @param string $characters
 *
 * @return string
 *
 * This function will generate random password string.
 */
function randNumber( $length = 8 ) {
    //return rand(pow(10, $length-1), pow(10, $length)-1);

    $characters   = '0123456789asbcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ' . md5( time() );
    $randomString = '';
    for ( $i = 0; $i < $length; $i ++ ) {
        $randomString .= $characters[ rand( 0, strlen( $characters ) - 1 ) ];
    }

    return $randomString;
}


/**
 * @return string
 *
 * Insert Javascript file script in admin and staff panel.
 */
function insert_js_file() {
    $jsfile = current_page();
    if ( empty( $jsfile ) ) {
        $jsfile = 'index';
    }
    $path = public_path() . '/js/scripts/';
    if ( ! is_dir( $path ) ) {
        mkdir( $path );
    }
    $path = $path . $jsfile . '.js';
    $url  = Request::root() . '/public/js/scripts/' . $jsfile . '.js';
    if ( $path <> "" && ! is_file( $path ) ) {
        file_put_contents( $path, "// This file is generated by Nasir Scripts\n\n" );
    }
    if ( is_file( $path ) ) {
        echo "
<script type='application/javascript' src='" . $url . "?" . md5_file( $path ) . "'></script>\n";
    }
}


/**
 * @return string
 *
 * Insert Javascript file script in admin and staff panel.
 */
function insert_css_file() {
    $cssfile = current_page();
    if ( empty( $cssfile ) ) {
        $cssfile = 'index';
    }
    $path = public_path() . '/css/style/';
    if ( ! is_dir( $path ) ) {
        mkdir( $path );
    }
    $root_path = $path . $cssfile . '.css';
    $root_url  = Request::root() . '/public/css/style/' . $cssfile . '.css';
    if ( $root_path <> "" && ! is_file( $root_path ) ) {
        file_put_contents( $root_path, "/* This file is generated by Nasir Scripts */ \n\n" );
    }
    if ( is_file( $root_path ) ) {
        echo "
<link rel='stylesheet' type='text/css' href='" . $root_url . "?" . md5_file( $root_path ) . "'>\n";
    }
}

/**
 * @return string
 *
 * Insert Javascript TMPL file in assets folder.
 */
function insert_tpl_file() {
    $tplfile = current_page();

    if ( empty( $tplfile ) ) {
        $tplfile = 'index';
    }
    $path = public_path() . '/js/templates/';
    if ( ! is_dir( $path ) ) {
        mkdir( $path );
    }
    $root_path = $path . $tplfile . '.tpl';
    if ( $root_path <> "" && ! is_file( $root_path ) ) {
        file_put_contents( $root_path, "" );
    }
    if ( is_file( $root_path ) ) {
        require_once $root_path;
    }
}

function removeDirectory( $path ) {
    $files = glob( $path . '/*' );
    foreach ( $files as $file ) {
        is_dir( $file ) ? removeDirectory( $file ) : unlink( $file );
    }
    rmdir( $path );

    return;
}

/**
 * @param $string
 *
 * @return string
 *
 * Advanced trim()
 */
function xtrim( $string ) {
    $string = trim( $string, " \t\n\r\0\x0Bÿ" );

    return $string;
}
