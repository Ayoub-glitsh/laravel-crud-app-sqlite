<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ninjas', function () {

    $ninjas = [
       ["name" => "Yoshi","skill" =>  75 , "id" => 1],
       ["name" => "Hattori","skill" =>  85 , "id" => 2],
       ["name" => "Hanzo","skill" =>  95 , "id" => 3],
    ];
    return view('ninjas.index',["greeting" => "Welcome to the Ninja Network", "ninjas" => $ninjas]);
});


Route::get('/ninjas/create',function (){
    return view('ninjas.create');
});

Route::get('/ninjas/{id}', function ($id) {

    return view('ninjas.show',["id" => $id]);
});



