<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( 'users', function ( Blueprint $table ) {
            $table->increments( 'id' )->unique();
            $table->string( 'name' );
            $table->string( 'email' )->unique();
            $table->string( 'user_id' )->default( '' );
            $table->string( 'app_password' )->default( '' );
            $table->string( 'bearer_token' , 255 )->default( '' );
            $table->timestamp( 'email_verified_at' )->nullable();
            $table->string( 'password' );
            $table->string( 'is_admin' )->default( 0 );
            $table->string( 'is_active' )->default( 1 );
            $table->string( 'phone', 50 )->nullable();
            $table->text( 'about' )->nullable();
            $table->string( 'added_ip' )->default( '' );
            $table->dateTimeTz( 'added_time' );
            $table->rememberToken();
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists( 'users' );
    }
}
