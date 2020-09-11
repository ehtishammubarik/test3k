<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIotNodelabelsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( 'iot_nodelabels', function ( Blueprint $table ) {
            //            $table->id();
            //            $table->timestamps();
            $table->increments( 'id' )->unique();
            $table->string( 'nodeid', '255' );
            $table->string( 'aceso_node_serial', '255' );
            $table->string( 'nodetype', '255' );
            $table->string( 'company', '255' );
            $table->string( 'location1', '255' );
            $table->string( 'location2', '255' );
            $table->string( 'location3', '255' );
            $table->text( 'nodelabels' );
            $table->text( 'notes' );
            $table->string( 'status', '255' );
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists( 'iot_nodelabels' );
    }
}
