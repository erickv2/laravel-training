<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// renderizando uma view

// Route::get('/empresa', function(){
//     return view('site/empresa');
// });

// forma mais simples de renderizar uma view
Route::view('/empresa', 'site/empresa');

// aceita qualquer tipo de requisiçáo
Route::any('/any', function() {
    return "Permite todo tipo de acesso http (put, delete, get, post)";
});

// Route::match('/match', function(){
//     return "Permite apenas acessos definidos";
// });

Route::get('/produto/{id}/{cat?}', function($id, $cat = ''){
    return "O id do produto é: " . $id . "<br>" . "A categoria é: " . $cat;
});

// formas de redirecionar

// Route::get('/sobre', function(){
//     return redirect('/empresa');
// });

Route::redirect('/sobre', '/empresa');



