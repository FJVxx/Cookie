<?php

use App\Http\Livewire\Cookie\Create as CookieCreate;
use App\Http\Livewire\Cookie\Delete as CookieDelete;
use App\Http\Livewire\Cookie\Show as CookieShow;
use App\Http\Livewire\Cookie\Update as CookieUpdate;
use App\Http\Livewire\Cookie\View as CookieView;
use App\Http\Livewire\CooUser\Create;
use App\Http\Livewire\CooUser\Delete;
use App\Http\Livewire\CooUser\Index;
use App\Http\Livewire\CooUser\Show;
use App\Http\Livewire\CooUser\Update;
use App\Http\Livewire\CooUser\View;
use App\Http\Livewire\Login\Login;
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
/* Ruta del login (bien importante)*/
Route::get('/Cookie/Login', Login::class)->name('login');

/*Ruta principal de la pagina */
Route::get('/Cookie', Index::class)->name('coo-user.index');


/*Rutas de el usuario CRUD*/

/*Esta debe poder ser utilizable sin el login*/
Route::get('/Cookie/Users/Create', Create::class)->name('coo-user.create');


Route::get('/Cookie/Users/{us?}/Update', Update::class)->name('coo-user.update')->middleware('auth');
Route::get('/Cookie/Users/View', View::class)->name('coo-user.view')->middleware('auth');
Route::get('/Cookie/Users/{us?}/Delete', Delete::class)->name('coo-user.delete')->middleware('auth');
Route::get('/Cookie/Users/{us?}/show', Show::class)->name('coo-user.show')->middleware('auth');

Route::get('/Cookie/Create', CookieCreate::class)->name('cookie.create')->middleware('auth');;
Route::get('/Cookie/{co?}/Update', CookieUpdate::class)->name('cookie.update')->middleware('auth');
Route::get('/Cookie/View', CookieView::class)->name('cookie.view')->middleware('auth');
Route::get('/Cookie/{co?}/Delete', CookieDelete::class)->name('cookie.delete')->middleware('auth');
Route::get('/Cookie/{co?}/show', CookieShow::class)->name('cookie.show')->middleware('auth');



