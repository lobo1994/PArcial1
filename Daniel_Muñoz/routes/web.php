<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\informacion ;
use App\Http\Controllers\catalogos;

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

Route::get('/', [informacion::class,'index']);
Route::get('Contactos', [informacion::class,'contactos']);

Route::get('caninos', [catalogos::class,'canino']);
Route::get('felinos', [catalogos::class,'felino']);