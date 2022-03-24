<?php

use Illuminate\Support\Facades\Auth;

Route::get('/test',function(){
    Auth::loginUsingId(1);
    dd(Auth::user());
});

Route::get('/', 'DefaultController@index');

Route::auth();

Route::get('/home', 'HomeController@index');
