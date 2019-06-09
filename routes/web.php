<?php

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

    Route::get("/",[
        "as"   => "web.index",
        "uses" => "WebController@index"
    ]);

    Route::get("/productos",[
        "as"   => "web.productos",
        "uses" => "WebController@productos"
    ]);

    Route::get("/contacto",[
        "as"   => "web.contacto",
        "uses" => "WebController@contacto"
    ]);

    Route::get("/galeria",[
        "as"   => "web.galeria",
        "uses" => "WebController@galeria"
    ]);

    Route::get("/registro",[
        "as"   => "web.register",
        "uses" => "WebController@register"
    ]);

    Route::get("/login",[
        "as"   => "web.login",
        "uses" => "WebController@login"
    ]);

    Route::group(["prefix" => "/panel"],function ()
    {

        Route::get('/', 'PanelController@admin')
            ->middleware('isAdmin')
            ->name('panel');



        Route::resource("/productos","ProductosController")->middleware('isAdmin');
    });



Auth::routes();


