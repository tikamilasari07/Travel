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
///////////////// email /////////////
/*Route::get('/sendmail','mailcontroller@mail');
Route::post('/send','mailcontroller@sendmail');*/


Route::get('/', 'PemesananController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contact', 'ManageInformationController@index')->name('contact');
Route::get('/blog', 'ManageInformationController@index')->name('blog');
Route::get('/caritiket', 'ManageInformationController@index')->name('caritiket');
Route::get('/kota','KotaController@index');
Route::get('kursi/kursi', 'KursiController@index');
//Route::get('/mobil', 'CarController@index')->name('mobil');
//Route::get('/jadwal', 'JadwalController@index')->name('jadwal');

//Modul Manajemen Jadwal

Route::get('/jadwal','JadwalController@index');
Route::get('/jadwal/tambah','JadwalController@create');
Route::post('/jadwal/store','JadwalController@store');
Route::get('/jadwal/edit/{id}','JadwalController@edit');
Route::put('/jadwal/update/{id}','JadwalController@update');
Route::delete('/jadwal/delete/{id}','JadwalController@destroy');


//Module Management Kota
Route::get('/kota', 'KotaController@index')->name('kota');
Route::get('/createkota', 'KotaController@create')->name('create.kota');
Route::post('/', 'KotaController@store')->name('store.kota');
Route::get('kota/{id}', 'KotaController@edit')->name('editkota');
Route::delete('kota/{id}', 'KotaController@destroy')->name('delete.kota');
Route::post('/{id}', 'KotaController@update')->name('update.kota');
Route::get('/kota/tambah','KotaController@create');
Route::post('/kota/store','KotaController@store');
Route::get('/kota/edit/{id}','KotaController@edit');
Route::put('/kota/update/{id}','KotaController@update');



//Module Management Mobil
Route::get('/car','CarController@index');
Route::get('/car/tambah','CarController@create');
Route::post('/car/store','CarController@store');
Route::get('/car/edit/{id}','CarController@edit');
Route::put('/car/update/{id}','CarController@update');
Route::delete('/car/delete/{id}','CarController@destroy');

//Module Management Wilayah

Route::get('/wilayah','WilayahController@index');
Route::get('/wilayah/tambah','WilayahController@create');
Route::post('/wilayah/store','WilayahController@store');
Route::get('/wilayah/edit/{id}','WilayahController@edit');
Route::put('/wilayah/update/{id}','WilayahController@update');
Route::delete('/wilayah/delete/{id}','WilayahController@destroy');

//Module Management supir
Route::get('/supir','SupirController@index');
Route::get('/supir/edit/{id}','SupirController@edit');
Route::put('/supir/update/{id}','SupirController@update');
Route::delete('/supir/delete/{id}','SupirController@destroy');
Route::get('/supir/tambah','SupirController@create');
Route::post('/supir/store','SupirController@store');


Route::get('/listjadwal','PemesananController@searchjadwal');
Route::get('/user/datadiri/{id}', 'PemesananController@datadiri');
Route::post('/user/transaksi', 'PemesananController@store');
Route::post('/user/bayar', 'PemesananController@bayar');


Route::get('/user','UserController@index');
Route::get('/sendemail','mailcontroller@mail');



// Route::get('/admin'),function(){
// 	return view('layouts.admin');
// }