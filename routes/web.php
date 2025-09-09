<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/empresa', function(){
    return view('site/empresa');
});

Route::any('/any', function() {
    return "Permite todo tipo de acesso http (put, delete, get, post)";
});

// Route::match('/match', function(){
//     return "Permite apenas acessos definidos";
// });

Route::get('/produto/{id}/{cat?}', function($id, $cat = ''){
    return "O id do produto é: " . $id . "<br>" . "A categoria é: " . $cat;
});
