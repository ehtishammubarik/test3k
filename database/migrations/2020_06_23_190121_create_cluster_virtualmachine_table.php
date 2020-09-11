<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClusterVirtualmachineTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( 'cluster_virtualmachine', function ( Blueprint $table ) {
            $table->increments( 'id' )->unique();
            $table->string( 'status', '11' )->nullable();
            $table->dateTime( 'time' )->nullable();
            $table->string( 'server_hostname', '255' )->nullable();
            $table->string( 'mac_eth1', '50' )->nullable();
            $table->string( 'status_eth1', '50' )->nullable();
            $table->string( 'node_type', '50' )->nullable();
            $table->string( 'ip_eth1', '255' )->nullable();
            $table->integer( 'tun_status' )->nullable();
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
        Schema::dropIfExists( 'cluster_virtualmachine' );
    }
}
