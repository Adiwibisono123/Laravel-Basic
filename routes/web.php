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

route::get('/user', function () {
    return 'Hello world';
});
route::get('/siswa/{id}', function ($id) {
    return 'Hello world'. $id;
});
route::get('/karyawan/{id?}', function($id=null) {
    return 'hello dunia '.$id;
});
route::get('/Siswa', function() {
    return view("Siswa");
});
route::get('/Guru', function() {
    return view("Guru");
});
route::get('/admin', function() {
    return view("admin");
});
route::get('/admin/{id}', function($id) {
    return 'hello admin '. $id;
});