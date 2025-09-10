<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

// ----------------------------------------------------

// RENDERIZANDO VIEW

// Route::get('/empresa', function(){
//     return view('site/empresa');
// });

// FORMA MAIS SIMPLES DE RENDERIZAR UMA VIEW

Route::view('/empresa', 'site/empresa');

// ----------------------------------------------------

// MATCH E ANY

// ACEITA QUALQUER TIPO DE REQUISICAO

Route::any('/any', function () {
    return "Permite todo tipo de acesso http (put, delete, get, post)";
});

// ACEITA APENAS REQUISICOES MENCIONADAS

// Route::match('/match', function(){
//     return "Permite apenas acessos definidos";
// });

// ----------------------------------------------------

// PARAMETROS

Route::get('/produto/{id}/{cat?}', function ($id, $cat = '') {
    return "O id do produto é: " . $id . "<br>" . "A categoria é: " . $cat;
});

// ----------------------------------------------------

// REDIRECIONAMENTOS

// Route::get('/sobre', function(){
//     return redirect('/empresa');
// });

// FORMA MAIS SIMPLES DE REDIRECIONAR

Route::redirect('/sobre', '/empresa');

// ----------------------------------------------------

// NO9MEANDO ROTAS

Route::get('/news', function () {
    return view('news');
})->name('noticias');

Route::get('/novidades', function () {
    return redirect()->route('noticias');
});


// ----------------------------------------------------

Route::get('/', function () {
    return redirect()->route('admin.clients');
});

// AGRUPANDO ROTAS

// Route::prefix('admin')->group(function () {
//     Route::get('dashboard', function () {
//         return "dashboard";
//     });
//     Route::get('users', function () {
//         return "users";
//     });
//     Route::get('clients', function () {
//         return "clients";
//     });
// });

// AGRUPANDO ROTAS NOMEADAS

// Route::name('admin.')->group(function () {
//     Route::get('admin/dashboard', function () {
//         return "dashboard";
//     })->name('dashboard');
//     Route::get('admin/users', function () {
//         return "users";
//     })->name('users');
//     Route::get('admin/clients', function () {
//         return "clients";
//     })->name('clients');
// });


// AGRUPANDO ROTAS POR PREFIXO E NOME AO MESMO TEMPO

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.'
], function(){
    Route::get('dashboard', function () {
        return "dashboard";
    })->name('dashboard');
    Route::get('users', function () {
        return "users";
    })->name('users');
    Route::get('clients', function () {
        return "clients";
    })->name('clients');
});

// ----------------------------------------------------


// CONTROLLERS

Route::get('/', [ProdutoController::class, 'index']);
