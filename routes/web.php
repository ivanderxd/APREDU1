<?php

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


//ruta de pwa

Route::get('/offline', 'pwa/routes@offline')->name('offline');

Route::get('/contenidos', 'pwa/routes@contenidos')->name('contenidos');

Route::get('/nosotros', 'pwa/routes@nosotros')->name('nosotros');

Route::get('/contacto', 'pwa/routes@contacto')->name('contacto');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//materias

Route::get('/materias', 'MateriasController@listMaterias')->name('index.materias');

Route::get('/createMaterias','MateriasController@viewCreateMaterias')->name('create.materias');

Route::post('/createMaterias', 'MateriasController@postCreateMaterias')->name('store.materias');

Route::delete('delete/{id}', 'MateriasController@deleteMaterias')->name('delete.materias');

Route::get('edit/{id}', 'MateriasController@getEdit');

Route::put('edit/{id}', 'MateriasController@putEdit');

Route::get('/details/{id}', 'MateriasController@getDetails');



//materiales

Route::get('/materiales', 'MaterialesController@listMateriales')->name('index.materiales');

Route::get('/createMateriales','MaterialesController@viewCreateMateriales')->name('create.materiales');

Route::post('/createMateriales', 'MaterialesController@postCreateMateriales')->name('store.materiales');

Route::delete('deleteMateriales/{id}', 'MaterialesController@deleteMateriales')->name('delete.materiales');

Route::get('editMateriales/{id}', 'MaterialesController@getEdit');

Route::put('editMateriales/{id}', 'MaterialesController@putEdit');

Route::get('/detailsMateriales/{id}', 'MaterialesController@getDetails');


//grados
Route::get('/grados', 'GradosController@listGrados')->name('index.grados');

Route::get('/createGrados','GradosController@viewCreateGrados')->name('create.grados');

Route::post('/createGrados', 'GradosController@postCreateGrados')->name('store.grados');

Route::delete('deleteGrados/{id}', 'GradosController@deleteGrados')->name('delete.grados');

Route::get('editGrados/{id}', 'GradosController@getEdit');

Route::put('editGrados/{id}', 'GradosController@putEdit');

Route::get('/detailsGrados/{id}', 'GradosController@getDetails');

//tipo material
Route::get('/TipoMateriales', 'TipoMaterialesController@listTipoMateriales')->name('index.tipomateriales');

Route::get('/createTipoMateriales','TipoMaterialesController@viewCreateTipoMateriales')->name('create.tipomateriales');

Route::post('/createTipoMateriales', 'TipoMaterialesController@postCreateTipoMateriales')->name('store.tipomateriales');

Route::delete('deleteTipoMateriales/{id}', 'TipoMaterialesController@deleteTipoMateriales')->name('delete.tipomateriales');

Route::get('editTipoMateriales/{id}', 'TipoMaterialesController@getEdit');

Route::put('editTipoMateriales/{id}', 'TipoMaterialesController@putEdit');

Route::get('/detailsTipoMateriales/{id}', 'TipoMaterialesController@getDetails');


//usuarios

Route::get('admin/usuarios', 'UsuariosController@index')->name('usuarios.index');

Route::put('baja/{id}', 'UsuariosController@baja')->name('baja');
