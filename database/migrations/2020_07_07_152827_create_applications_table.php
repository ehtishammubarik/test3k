<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( 'applications', function ( Blueprint $table ) {
            $table->increments( 'id' )->unique();
            $table->string( 'user_id' );
            $table->string( 'application_id' );
            $table->string( 'name' )->nullable();
            $table->text( 'description' )->nullable();
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
        Schema::dropIfExists( 'applications' );
    }
}
