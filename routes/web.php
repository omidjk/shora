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
/*
Route::get('/', function () {
    return view('welcome');
});*/
Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::resource('ghorfehgroup', 'ghorfehcodegroupController');
Route::resource('organs', 'OrgansController');
//Route::get('get-city-list','OfficeController@getcityeList');
//Route::get('/office/ajax/{id}', 'OfficeController@myformajax');
Route::get('/city/{id}', 'OrgansController@getcity');
Route::resource('ghorfeha', 'ghorfehaController');
Route::resource('office', 'OfficeController');
Route::resource('cordinator', 'CordinatorController');
Route::resource('maps', 'MapController');
Route::resource('property', 'PropertyController');
Route::resource('item', 'ItemController');
Route::resource('rite', 'RiteController');
Route::resource('arrangement', 'ArrangementController');
Route::post('/editorupload', 'RiteController@editorupload');
Route::resource('organtorite', 'AssignorgantoriteController');
//Route::get('menu','MenuController@index')->name('menu.get');
Route::group(['middleware' => ['auth']], function() {

    Route::resource('roles','RoleController');

    Route::resource('users','UserController');

    Route::resource('products','ProductController');

});

Route::group(['prefix' => config('menu.prefix')], function () {
    MenuBuilder::routes();
});
