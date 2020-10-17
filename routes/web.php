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
//Route::get('/', 'LoginController@loginView');
//Route::post('/giris','LoginController@login')->name('login');

Route::get('/', 'AdminController@index');
Route::get('/adm', 'AdminTemplateController@index');
Route::get('/profil', 'AdminTemplateController@profilView');
Route::get('/mail', 'AdminTemplateController@mailView');
Route::get('/tarif','AdminController@indexView');
Route::get('/kategori','AdminController@kategoriView');
Route::get('/tarif-detay/{id}', 'AdminTemplateController@tarifView');
Route::get('/yemekokulu','AdminController@yemekView');
Route::get('/yakinda','AdminController@yakindaView');
Route::get('tarif/{name}','AdminController@categoryView');
//Route::get('/', function () {return view('welcome');});

Route::post('/onay', 'AdminTemplateContoller@create');
Route::get('/kabul', 'AdminTemplateController@createView');
Route::get('/kayıt', 'HomeController@indexView');
Route::get('/sil/{id}', 'HomeController@delete')->where(array('id' => '[0-9]+'));
Route::get('/indir','ExcelDownloadController@userDownload')->name('user.download');

Route::get('/user-import','ExcelUploadController@menuImportView')->name('upload');
Route::post('/user-import-post','ExcelUploadController@menuImport')->name('menu.import');

Route::get('/urun-ekle','ProductController@productCreateView');
Route::post('urun-kaydet','ProductController@productCreate')->name('product.create');

Route::post('/guncelle/{id}', 'HomeController@update')->where(array('id' => '[0-9]+'));
Route::get('/guncelle/{id}','HomeController@updateView')->where(array('id' => '[0-9]+'));




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
