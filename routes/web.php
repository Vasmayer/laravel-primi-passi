<?php

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

Route::get('/clubs', function () {

    $clubs = ['clubs'=>['Milan','Iter','Napoli','Sassuolo','Fiorentina','Roma','Juventus','Atalanta']];

    return view('clubs',$clubs);
})->name('clubs');

Route::get('/', function () {
    
    return view('home');
})->name('home');

Route::get('/matches', function () {
    
    $matches = ['matches' =>[
        ['first' => 'Milan','second'=>'Napoli' ],
        ['first' => 'Fiorentina','second'=>'Inter' ],
        ['first' => 'Juventus','second'=>'Roma' ],
        ['first' => 'Fiorentina','second'=>'Atalanta' ],
    ]];
    return view('match',$matches);
})->name('match');