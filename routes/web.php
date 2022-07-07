<?php

use Illuminate\Support\Facades\Route;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

//USUARIO
Route::get('/', function () {
    return view('usuario.indexusuario');
    });

Route::get('sobrenosotros', function () {
    return view('usuario.sobrenosotros');
    });


Route::get('/vergaleria', 'GaleriaController@mostrar');





Route::get('/verartista', 'ArtistaController@mostrar');

Route::get('/vermasartista/{slug}', 'ArtistaController@mostrarartista');

//ADMIN
Route::get('/admin', 'AdminController@index')->middleware('admin');
//artista


//galeria

Route::get('/galeriadmin', 'GaleriaController@index')->name('home');

Route::resource('/admin/files', 'FileController')->names('admin.files');
Route::resource('/admin/usuarios', 'UsuarioController')->names('admin.usuarios');


//calendario
Route::get('calendarioadmin','ControllerEvent@vistadmin');
Route::get('calendarioadmin/form','ControllerEvent@form');
Route::post('calendarioadmin/create','ControllerEvent@create');
Route::get('calendario/details/{id}','ControllerEvent@details');
Route::get('calendarioadmin/details/{id}','ControllerEvent@detailsad');
Route::delete('calendarioadmin/delete/{id}','ControllerEvent@delete');
Route::get('calendario','ControllerEvent@index');
Route::get('calendario/{month}','ControllerEvent@index_month');
Route::get('calendarioadmin/{month}','ControllerEvent@vistadmin_month');




Auth::routes();
Route::get('/artista', 'ArtistaController@index');
Route::get('/artista/create', 'ArtistaController@create');
Route::post('/artista/guardado', 'ArtistaController@store');
Route::get('/artista/{slug}', 'ArtistaController@show');
Route::get('/artista/{slug}/ver', 'ArtistaController@ver');
Route::put('/artista/{slug}/edit', 'ArtistaController@edit');
Route::get('/editartista/{slug}', 'ArtistaController@formu');
Route::put('/editartista/{slug}/editusu', 'ArtistaController@editusu');



Route::get('/contactanos', 'ContactanosController@index')->name('contactanos.index');
Route::post('/contactanos/enviar', 'ContactanosController@store');

Route::post('/newsletter', 'NewsletterController@store')->name('newsletter.store');



// Route::get('/usuarios', 'UsuarioController@index');
// Route::get('/usuarios/create', 'UsuarioController@create');

// Route::post('/usuarios/guardado', 'UsuarioController@store');
// Route::get('/usuarios/create', 'UsuarioController@create');