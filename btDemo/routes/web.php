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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', function() {
    return "admin";
})->middleware('checkAdmin','auth');

Route::resource('/sanPham', 'sanPhamController')->middleware('checkNguoiBan');


Route::get('admin/pheDuyet',['as'=>'adminPheDuyet','uses'=>'adminController@getSanPham'])->middleware('checkAdmin');
Route::get('admin/pheDuyet/{idSanPham}',['as'=>'adminPheDuyetSanPham','uses'=>'adminController@pheDuyetSanPham'])->middleware('checkAdmin');
Route::get('admin/xoaPheDuyet/{idSanPham}',['as'=>'adminXoaPheDuyetSanPham','uses'=>'adminController@xoaPheDuyet'])->middleware('checkAdmin');


Route::get('muaHang/{id}',['as'=>'muaHangg','uses'=>'datHangController@muaHang'])->middleware('checkUser');


Route::get('nguoiBan/pheDuyet',['as'=>'nguoiBanPheDuyet','uses'=>'nguoiBanController@getSanPham'])->middleware('checkNguoiBan');
Route::get('nguoiBan/pheDuyet/{idSanPham}',['as'=>'nguoiBanPheDuyetSanPham','uses'=>'nguoiBanController@pheDuyetSanPham'])->middleware('checkNguoiBan');

Route::get('nguoiBan/xoaPheDuyet/{idSanPham}',['as'=>'nguoiBanXoaPheDuyetSanPham','uses'=>'nguoiBanController@xoaPheDuyet'])->middleware('checkNguoiBan');

//chi tiet san pham
Route::get('chiTiet/{id}',['as'=>'chiTietSanPham','uses'=>'sanPhamController@show']);

Route::group(['prefix' => 'admin','middleware' => 'checkAdmin'], function() {
//quan ly user
    Route::get('quanLyUser',['as'=>'quanLyUser','uses'=>'adminController@getUser']);
    Route::delete('quanLyUserDestroy/{id}',['as'=>'quanLyUserDestroy','uses'=>'adminController@destroy']);
//quan ly san pham
    Route::get('quanLySanPham',['as'=>'quanLySanPham','uses'=>'adminController@getSanPhamad']);
    Route::delete('quanLySanPhamDestroy/{id}',['as'=>'quanLySanPhamDestroy','uses'=>'adminController@destroySanPham']);
});

// seach
Route::post('search', ['as'=>'search','uses'=>'searchController@getSearch']);
//edit user
Route::get('suaUser/{id}',['as'=>'suaUser','uses'=>'userController@get'])->middleware('auth');
Route::PATCH('suaUser/{id}',['as'=>'updateUser','uses'=>'userController@update'])->middleware('auth');

