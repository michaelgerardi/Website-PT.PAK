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

Route::get('/', function () {
    return view('Layouts.Login');
});

//Login
route::get('/login-Admin','Controller_Login@index_Login');
route::post('/postlogin','Controller_Login@post_login');
route::get('/Dashboard','Controller_Login@Dashboard');
route::get('/Logout','Controller_Login@Logout');
route::get('/Register','Controller_Login@view_regis');
route::post('/Register/Create','Controller_Login@Register');

//View_Webite
route::get('/PAK.co.id|Best Solusion For All','Controller_View@View_Website');
route::get('/Misi_Visi','Controller_View@view_misi_visi');
route::get('/sambutan','Controller_View@sambutan');
route::get('/product','Controller_View@product');
route::get('/sertifikat_ISO','Controller_View@ISO');
route::get('/sejarah','Controller_View@sejarah');
route::get('/struktur','Controller_View@struktur');
route::get('/Contac_person','Controller_View@cp');
route::get('/slider','Controller_view@view_kegiatan');
route::get('/sertifikat_Halal','Controller_View@halal');
route::get('/berita/{id}','Controller_view@tampil_berita');
route::get('/kegiatan/{id}','Controller_view@tampil_kegiatan');


Route::group(['middleware' => 'auth'], function () {

//CRUD
route::get('/View_berita','Controller_Berita@index')->name('Indexberita');
route::get('/Berita/hapus_permanen/{id}','Controller_Berita@hapus_permanen');
route::get('/History_Berita','Controller_Berita@history');
route::get('/Create_berita','Controller_Berita@view_insert');
route::post('/Berita/Create','Controller_Berita@create');
route::get('/DeleteBerita/{id}','Controller_Berita@Delete_berita');
route::get('/EditBerita/{id}','Controller_Berita@Find_edit')->name('EditBerita');
route::get('/ProsesEditBerita/{id}','Controller_Berita@edit_berita')->name('ProsesEditBerita');
route::get('/Kembalikan/{id}','Controller_Berita@kembalikan');
});