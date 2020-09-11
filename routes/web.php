<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Auth::routes( [ 'verify' => true ] );

Auth::routes();

Route::get( '/', 'HomeController@index' )->name( '/' );
Route::get( 'logout', 'Auth\LoginController@logout' );
Route::post( 'user-register-lorawan', 'Auth\LorawanRegisterController@userRegisterLorawan' )
     ->name( 'user.register.lorawan' );

// Application pages method

Route::prefix( 'applications' )->group( function () {
    Route::get( '/', 'ApplicationController@index' )->name('applications');
    Route::post( 'create', 'ApplicationController@create' )->name( 'application.create' );
    Route::get( 'view/{id}', 'ApplicationController@view');
} );
// end application pages method

Route::get( 'gateways', 'GatewaysController@index' )->name( 'gateways' );
Route::prefix( 'organization' )->group( function () {
    Route::get( '/', 'OrganizationController@index' )->name( 'organization' );
    Route::post( 'create', 'OrganizationController@create' )->name( 'organization.create' );
} );
