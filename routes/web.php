<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// ----------------------------------------------------

// renderizando uma view

// Route::get('/empresa', function(){
//     return view('site/empresa');
// });

// forma mais simples de renderizar uma view
Route::view('/empresa', 'site/empresa');

// ----------------------------------------------------

// aceita qualquer tipo de requisiçáo
Route::any('/any', function() {
    return "Permite todo tipo de acesso http (put, delete, get, post)";
});

//aceita apenas requisicoes menscionadas

// Route::match('/match', function(){
//     return "Permite apenas acessos definidos";
// });

// ----------------------------------------------------

// inserir parametros

Route::get('/produto/{id}/{cat?}', function($id, $cat = ''){
    return "O id do produto é: " . $id . "<br>" . "A categoria é: " . $cat;
});

// ----------------------------------------------------

// redirecionamentos

// Route::get('/sobre', function(){
//     return redirect('/empresa');
// });

// forma mais simples de redirecionar

Route::redirect('/sobre', '/empresa');

// ----------------------------------------------------

// nomeando rotas

Route::get('/news', function(){
    return view('news');
})->name('noticias');

Route::get('/novidades', function(){
    return redirect()->route('noticias');
});
