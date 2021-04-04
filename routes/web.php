<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes([
    'register' => false,
]);

Route::group(['middleware'=>'auth:web'], function() {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('users', 'UserController');
    Route::resource('/siswa', 'SiswaController');
    Route::resource('/siswamuhi', 'SiswamuhiController');
    Route::resource('/murid', 'MuridController');
    // Route::get('/siswa/{id}/show', 'SiswaController');
    Route::resource('/petugas', 'PetugasController');
    Route::resource('/spp', 'SppController');
    Route::get('/sppmuhi', 'SppmuhiController@index');
    // Route::get('/spp/export_excel', 'SppController@export_excel');
    // Route::resource('/master', 'SppController');
    // Route::resource('/kelas', 'KelasController');

    // Route::get('search', 'SearchController@index')->name('search');
    // Route::get('autocomplete', 'SearchController@autocomplete')->name('autocomplete');
});

