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
Route::get('/',  \App\Http\Livewire\Home::class);

Route::prefix('/events')->group( function() {

    Route::get('', \App\Http\Livewire\ListEvents::class);
    Route::get('create', \App\Http\Livewire\CreateEvents::class);
    Route::get('{id}', \App\Http\Livewire\ShowEvents::class);

});
