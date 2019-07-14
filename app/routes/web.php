<?php

use Illuminate\Support\Facades\View;
use App\Http\Controllers\PagesController;

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

Route::get('/', 'PagesController@inicio')->name('inicio');

Route::post('/', 'PagesController@crear')->name('crear');

Route::get('/detalle/{id}', 'PagesController@detalle')->name('detalles');


Route::get('fotos', 'PagesController@foto')->name('foto');

Route::get('blog', 'PagesController@blog')->name('blog');

Route::get('editar/editar/{id}', 'PagesController@editar')->name('editar');

Route::PUT('editar/editar/{id}', 'PagesController@update')->name('update');

Route::delete('delete/{id}', 'PagesController@delete')->name('eliminar');

