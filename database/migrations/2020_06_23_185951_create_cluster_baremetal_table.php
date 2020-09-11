<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClusterBaremetalTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( 'cluster_baremetal', function ( Blueprint $table ) {
            $table->increments( 'id' )->unique();
            $table->string( 'status', '11' )->nullable();
            $table->dateTimeTz( 'time' )->nullable();
            $table->string( 'server_id', '50' )->nullable();
            $table->string( 'rack', '50' )->nullable();
            $table->string( 'server_hostname', '255' )->nullable();
            $table->string( 'mac_ipmi', '50' )->nullable();
            $table->string( 'status_ipmi', '50' )->nullable();
            $table->string( 'mac_eth1', '50' )->nullable();
            $table->string( 'mac_eth2', '50' )->nullable();
            $table->string( 'status_eth1', '50' )->nullable();
            $table->string( 'status_eth2', '50' )->nullable();
            $table->string( 'node_type', '50' )->nullable();
            $table->string( 'ip_ipmi', '255' )->nullable();
            $table->string( 'ip_eth1', '255' )->nullable();
            $table->string( 'ip_eth2', '255' )->nullable();
            $table->string( 'ip_eth3', '255' )->nullable();
            $table->string( 'ip_eth4', '255' )->nullable();
            $table->integer( 'tun_status' )->nullable();
            $table->string( 'tun_ip', '255' )->nullable();
            $table->longText( 'system_info' )->nullable();
            $table->string( 'os', '50' )->nullable();
            $table->integer( 'ram' )->nullable();
            $table->string( 'extra_hdd', '50' )->nullable();
            $table->string( 'anydesk', '100' )->nullable();
            $table->string( 'teamviewer', '100' )->nullable();
            $table->text( 'notes1' )->nullable();
            $table->text( 'notes2' )->nullable();
            $table->text( 'notes3' )->nullable();
            $table->text( 'ssh_id_rsa_pri' )->nullable();
            $table->text( 'ssh_id_rsa_pub' )->nullable();
            $table->text( 'ssh_authorized_keys' )->nullable();
            $table->text( 'tun_ssh_id_rsa_pri' )->nullable();
            $table->text( 'tun_ssh_id_rsa_pub' )->nullable();
            $table->string( 'tun_hostname', '255' )->nullable();
            $table->integer( 'added_by' )->nullable();
            $table->string( 'added_ip' )->nullable();
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists( 'cluster_baremetal' );
    }
}
