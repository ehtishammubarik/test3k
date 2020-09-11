<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BaremetalModel extends Model {

    var $Table = 'cluster_baremetal';

    public function save( $params = '' ) {
        $default = [
            "id"        => "0",
            "server_id" => "",
        ];
        $params  = set_args( $params, $default );

        if ( empty( $params['server_id'] ) ) {
            return 'Server id field is required.';
        }
        if ( empty( $params['rack'] ) ) {
            return 'Rack field is required.';
        }
        if ( empty( $params['server_hostname'] ) ) {
            return 'Server hostname field is required.';
        }
        if ( empty( $params['mac_ipmi'] ) ) {
            return 'Mac ipmi field is required.';
        }
        if ( empty( $params['os'] ) ) {
            return 'OS field is required.';
        }
        if ( ! empty( $params['time'] ) ) {
            $params['time'] = mysql_datetime( $params['time'] );
        }

        $params['added_ip'] = myip();
        $params['added_by'] = Auth::id();
        unset( $params['_token'] );

        if ( empty( $params['id'] ) ) {
            unset( $params['id'] );
            $id = DB::table( $this->Table )->insertGetId( $params );
        } else {
            $id = $params['id'];
            DB::table( $this->Table )->where( 'id', $id )->update( $params );
        }

        return 'OK,' . $id;
    }

    public function get( $params = '' ) {
        $default = [
            "id"       => "0",
            'orderby'  => 'id',
            'order'    => 'DESC',
            'search'   => '',
            'page'     => '1',
            'pagesize' => '10',
        ];
        $where   = [];
        $params  = set_args( $params, $default );


        if ( ! empty( $params['id'] ) ) {
            $where = [
                'id' => $params['id'],
            ];
        }

        $skip = ( ( $params['page'] - 1 ) * $params['pagesize'] );
        $rows = DB::table( $this->Table )
                  ->where( $where )
                  ->skip( $skip )
                  ->take( $params['pagesize'] )
                  ->orderBy( $params['orderby'], $params['order'] )
                  ->paginate( $params['pagesize'] );

        return $rows;
    }

}
