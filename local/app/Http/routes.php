<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//client
Route::get('/', 'ClienthomeController@index');

Route::get('laamaa',function() {
	return view('login');
});


Route::get('sejarah','ClienthomeController@sejarah');
Route::get('visi_misi','ClienthomeController@visi_misi');
Route::get('struktur_desa','ClienthomeController@struktur');
Route::get('geografis','ClienthomeController@geografis');
Route::get('ekonomi','ClienthomeController@ekonomi');
Route::get('prasarana','ClienthomeController@prasarana');
Route::get('pemerintahan','ClienthomeController@pemerintahan');
Route::get('artikel/kategori/pendidikan','ClienthomeController@pendidikan');
Route::get('artikel/kategori/kesehatan','ClienthomeController@kesehatan');
Route::get('galeri','ClienthomeController@galeri');
Route::get('acara','ClienthomeController@acara');//suara search
Route::post('search', 'ClienthomeController@search');








//admin
Route::get('admin', 'ArtikelController@admin')->middleware('auth');


//artikel
Route::get('admin/artikel', 'ArtikelController@index')->middleware('auth');
//artikel search
Route::post('admin/artikel/search', 'ArtikelController@search')->middleware('auth');
//create_artikel
Route::get('admin/artikel/tambah_baru', 'ArtikelController@create')->middleware('auth');
//simpan data artikel
Route::post('admin/artikel', 'ArtikelController@store')->middleware('auth');
//edit kategori
Route::get('admin/artikel/{kategori}/edit', 'ArtikelController@edit')->middleware('auth');
Route::patch('admin/artikel/{kategori}', 'ArtikelController@update')->middleware('auth');
//hapus
Route::post('/admin/artikel/delete/{id}', 'ArtikelController@destroy')->middleware('auth');
//show
Route::get('artikel/{kategori}', 'ArtikelController@show');
//show komen on artikel
Route::get('artikel/komentar/{artikel}/{kategori}', 'ArtikelController@show_komentar_artikel');


//kategori
Route::get('admin/artikel/kategori', 'KategoriController@index')->middleware('auth');
//kategori search
Route::post('admin/artikel/search_kategori', 'KategoriController@search')->middleware('auth');
//kategori baru
Route::get('admin/artikel/tambah_kategori_baru', 'KategoriController@create')->middleware('auth');
//simpan data baru
Route::post('admin/artikel/kategori', 'KategoriController@store')->middleware('auth');
//edit kategori
Route::get('admin/artikel/kategori/{kategori}/edit', 'KategoriController@edit')->middleware('auth');
Route::patch('admin/artikel/kategori/{kategori}', 'KategoriController@update')->middleware('auth');
//hapus kategori
Route::post('admin/artikel/kategori/delete/{id}', 'KategoriController@destroy')->middleware('auth');
//show filter
Route::get('artikel/Kategori/{id_kategori}', 'KategoriController@show');
// Route::get('admin/artikel/tambah_kategori_baru', function() {
// 	return view('admin.artikel.create_category');
// });



//komentar
Route::get('admin/artikel/komentar', 'KomentarController@index')->middleware('auth');
//komentar search
Route::post('admin/artikel/search_komentar', 'KomentarController@search')->middleware('auth');
//create_artikel
// Route::get('admin/artikel/komentar/tambah_komentar_baru', 'KomentarController@create');
//simpan data artikel
Route::post('artikel/komentar/new', 'KomentarController@store');
//edit kategori
// Route::get('admin/artikel/komentar/{kategori}/edit', 'KomentarController@edit');
// Route::patch('admin/artikel/komentar/{kategori}', 'KomentarController@update');
//hapus
Route::post('/admin/artikel/komentar/delete/{id}', 'KomentarController@destroy')->middleware('auth');



//event
Route::get('admin/event', 'EventController@index')->middleware('auth');
//event search
Route::post('admin/search_event', 'EventController@search')->middleware('auth');
//event baru
Route::get('admin/tambah_event_baru', 'EventController@create')->middleware('auth');
//simpan data event
Route::post('admin/event', 'EventController@store')->middleware('auth');
//edit event
Route::get('admin/event/{kategori}/edit', 'EventController@edit')->middleware('auth');
Route::patch('admin/event/{kategori}', 'EventController@update')->middleware('auth');
//hapus event
Route::post('admin/event/delete/{id}', 'EventController@destroy')->middleware('auth');



//desa
//sejarah
Route::get('admin/sejarah', 'DesaController@sejarah')->middleware('auth');
//ubah sejarah
Route::get('admin/sejarah/{kategori}/edit', 'DesaController@edit_sejarah')->middleware('auth');
Route::patch('admin/sejarah/{kategori}', 'DesaController@update_sejarah')->middleware('auth');
//visi misi
Route::get('admin/visi&misi', 'DesaController@visi_misi')->middleware('auth');
//ubah visi misi
Route::get('admin/visi&misi/{kategori}/edit', 'DesaController@edit_visi_misi')->middleware('auth');
Route::patch('admin/visi&misi/{kategori}', 'DesaController@update_visi_misi')->middleware('auth');
//geografis
Route::get('admin/geografis', 'DesaController@geografis')->middleware('auth');
//ubah geografis
Route::get('admin/geografis/{kategori}/edit', 'DesaController@edit_geografis')->middleware('auth');
Route::patch('admin/geografis/{kategori}', 'DesaController@update_geografis')->middleware('auth');
//ekonomi
Route::get('admin/ekonomi', 'DesaController@ekonomi')->middleware('auth');
//ubah ekonomi
Route::get('admin/ekonomi/{kategori}/edit', 'DesaController@edit_ekonomi')->middleware('auth');
Route::patch('admin/ekonomi/{kategori}', 'DesaController@update_ekonomi')->middleware('auth');
//prasarana
Route::get('admin/prasarana', 'DesaController@prasarana')->middleware('auth');
//ubah prasarana
Route::get('admin/prasarana/{kategori}/edit', 'DesaController@edit_prasarana')->middleware('auth');
Route::patch('admin/prasarana/{kategori}', 'DesaController@update_prasarana')->middleware('auth');
//pemerintahan
Route::get('admin/pemerintahan', 'DesaController@pemerintahan')->middleware('auth');
//ubah pemerintahan
Route::get('admin/pemerintahan/{kategori}/edit', 'DesaController@edit_pemerintahan')->middleware('auth');
Route::patch('admin/pemerintahan/{kategori}', 'DesaController@update_pemerintahan')->middleware('auth');
//struktur
Route::get('admin/struktur', 'DesaController@struktur')->middleware('auth');
//ubah struktur
Route::get('admin/struktur_organisasi/{organisasi_list}/edit', 'DesaController@edit_struktur_organisasi')->middleware('auth');
Route::patch('admin/struktur_organisasi/{kategori}', 'DesaController@update_struktur_organisasi')->middleware('auth');
Route::patch('admin/foto/{desa_list}', 'DesaController@update_foto_organisasi')->middleware('auth');
//hapus struktur
Route::post('admin/struktur/delete/{id}', 'DesaController@destroy_organisasi')->middleware('auth');
//create dusun
Route::get('admin/dusun/tambah_baru', 'DesaController@create_dusun')->middleware('auth');
//store dusun
Route::post('admin/dusun', 'DesaController@store_dusun')->middleware('auth');
//ubah dusun
Route::get('admin/dusun/{kategori}/edit', 'DesaController@edit_dusun')->middleware('auth');
Route::patch('admin/dusun/{kategori}', 'DesaController@update_dusun')->middleware('auth');
//hapus dusun
Route::post('admin/dusun/delete/{id}', 'DesaController@destroy_dusun')->middleware('auth');
//create rw
Route::get('admin/rw/tambah_baru', 'DesaController@create_rw')->middleware('auth');
//store rw
Route::post('admin/rw', 'DesaController@store_rw')->middleware('auth');
//ubah rw
Route::get('admin/rw/{kategori}/edit', 'DesaController@edit_rw')->middleware('auth');
Route::patch('admin/rw/{kategori}', 'DesaController@update_rw')->middleware('auth');
//hapus rw
Route::post('admin/rw/delete/{id}', 'DesaController@destroy_rw')->middleware('auth');
//create rt
Route::get('admin/rt/tambah_baru', 'DesaController@create_rt')->middleware('auth');
//store rt
Route::post('admin/rt', 'DesaController@store_rt')->middleware('auth');
//ubah rt
Route::get('admin/rt/{kategori}/edit', 'DesaController@edit_rt')->middleware('auth');
Route::patch('admin/rt/{kategori}', 'DesaController@update_rt')->middleware('auth');
//hapus rt
Route::post('admin/rt/delete/{id}', 'DesaController@destroy_rt')->middleware('auth');


//kontak
//utama
Route::get('admin/kontak/', 'KontakController@kontak')->middleware('auth');
//ubah
Route::get('admin/kontak/{kontak_list}/edit', 'KontakController@edit')->middleware('auth');
Route::patch('admin/kontak/{kontak_list}', 'KontakController@update')->middleware('auth');
//show
Route::get('kontak', 'ClienthomeController@kontak');
//show from admin
Route::get('kontak/lihat', 'SuaraController@kontak_show');




//suara warga
Route::get('admin/suara_warga', 'SuaraController@index')->middleware('auth');
//suara search
Route::post('admin/suara_warga/search', 'SuaraController@search')->middleware('auth');
//hapus event
Route::post('admin/suara_warga/delete/{id}', 'SuaraController@destroy')->middleware('auth');
//new
Route::post('suara/new', 'SuaraController@store');



//pengaturan
Route::get('admin/pengaturan', 'DesaController@pengaturan')->middleware('auth');
//pengaturan edit
Route::get('admin/pengaturan/{kategori}/edit', 'DesaController@edit_pengaturan')->middleware('auth');
Route::patch('admin/pengaturan/{kategori}', 'DesaController@update_pengaturan')->middleware('auth');
//pengaturan_login edit
Route::get('admin/pengaturan_login/{kategorii}/edit', 'DesaController@edit_pengaturan_login')->middleware('auth');
Route::patch('admin/pengaturan_login/{kategorii}', 'DesaController@update_pengaturan_login')->middleware('auth');







//login
Route::auth();

// Route::get('/home', 'HomeController@index');
