<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'v1'], function () {
    Route::group([
        'prefix' => 'auth',
    ], function () {
        Route::post('login', 'App\Http\Controllers\v1\Seguridad\AuthController@login');
        Route::post('logout', 'App\Http\Controllers\v1\Seguridad\AuthController@logout')->middleware('auth:api');
    });
    Route::post('users', 'App\Http\Controllers\v1\Seguridad\UsuarioController@create');
    Route::put('user', 'App\Http\Controllers\v1\Seguridad\UsuarioController@updateAuth');
    Route::get('user', 'App\Http\Controllers\v1\Seguridad\UsuarioController@showAuth');
    Route::put('users/{id}', 'App\Http\Controllers\v1\Seguridad\UsuarioController@update');
    Route::get('users', 'App\Http\Controllers\v1\Seguridad\UsuarioController@index');
    Route::get('users/{id}', 'App\Http\Controllers\v1\Seguridad\UsuarioController@show');
    Route::delete('users/{id}', 'App\Http\Controllers\v1\Seguridad\UsuarioController@delete');

    Route::middleware('auth:api')->group(function () {
        Route::get('boxes', 'App\Http\Controllers\v1\Administracion\BoxesController@index');
        Route::delete('boxes/{id}', 'App\Http\Controllers\v1\Administracion\BoxesController@delete');
        Route::put('boxes/{id}', 'App\Http\Controllers\v1\Administracion\BoxesController@update');
        Route::post('boxes', 'App\Http\Controllers\v1\Administracion\BoxesController@create');

        Route::get('categories', 'App\Http\Controllers\v1\Administracion\CategoryController@index');
        Route::delete('categories/{id}', 'App\Http\Controllers\v1\Administracion\CategoryController@delete');
        Route::put('categories/{id}', 'App\Http\Controllers\v1\Administracion\CategoryController@update');
        Route::post('categories', 'App\Http\Controllers\v1\Administracion\CategoryController@create');
    
        Route::get('steptypes', 'App\Http\Controllers\v1\Administracion\StepTypeController@index');
        Route::delete('steptypes/{id}', 'App\Http\Controllers\v1\Administracion\StepTypeController@delete');
        Route::put('steptypes/{id}', 'App\Http\Controllers\v1\Administracion\StepTypeController@update');
        Route::post('steptypes', 'App\Http\Controllers\v1\Administracion\StepTypeController@create');
      
        Route::get('people', 'App\Http\Controllers\v1\Eventos\PeopleController@index');
        Route::delete('people/{id}', 'App\Http\Controllers\v1\Eventos\PeopleController@delete');
        Route::put('people/{id}', 'App\Http\Controllers\v1\Eventos\PeopleController@update');
        Route::post('people', 'App\Http\Controllers\v1\Eventos\PeopleController@create');

        Route::get('participants', 'App\Http\Controllers\v1\Eventos\ParticipantController@index');
        Route::delete('participants/{id}', 'App\Http\Controllers\v1\Eventos\ParticipantController@delete');
        Route::put('participants/{id}', 'App\Http\Controllers\v1\Eventos\ParticipantController@update');
        Route::post('participants', 'App\Http\Controllers\v1\Eventos\ParticipantController@create');

        Route::get('events', 'App\Http\Controllers\v1\Administracion\EventController@index');
        Route::delete('events/{id}', 'App\Http\Controllers\v1\Administracion\EventController@delete');
        Route::put('events/{id}', 'App\Http\Controllers\v1\Administracion\EventController@update');
        Route::post('events', 'App\Http\Controllers\v1\Administracion\EventController@create');
        
        Route::get('steps', 'App\Http\Controllers\v1\Administracion\StepController@index');
        Route::delete('steps/{id}', 'App\Http\Controllers\v1\Administracion\StepController@delete');
        Route::put('steps/{id}', 'App\Http\Controllers\v1\Administracion\StepController@update');
        Route::post('steps', 'App\Http\Controllers\v1\Administracion\StepController@create');
    });
});
