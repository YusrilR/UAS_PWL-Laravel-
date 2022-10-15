<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Query\Expression;
use Illuminate\Database\Migrations\Migration;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;

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
Route::get('/produk', function () {
    return view('produk');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/kontak', function () {
    return view('kontak');
});
//----------Produk---------------
Route::get('/restok','App\Http\Controllers\FormProdukController@viewdataprod');
Route::get('/deleteprod/{id}','App\Http\Controllers\FormProdukController@deletedataprod');
Route::get('/editproduk/{id_roti}', 'App\Http\Controllers\FormProdukController@TampilEditProduk');
Route::post('/editprod/{id_roti}', 'App\Http\Controllers\FormProdukController@updateproduk');
Route::get('/addprod', 'App\Http\Controllers\FormProdukController@viewprod');
Route::post('/formproduk/storeproduk', 'App\Http\Controllers\FormProdukController@storeproduk');

//----------Supplier---------------
Route::get('/supplier','App\Http\Controllers\RotiController@viewdata');
Route::get('/delete/{id}','App\Http\Controllers\RotiController@deletedata');
Route::get('/edit/{id_supplier}', 'App\Http\Controllers\RotiController@TampilEditSupplier');
Route::post('/editsup/{id_supplier}', 'App\Http\Controllers\RotiController@updatesupplier');
Route::get('/add', 'App\Http\Controllers\RotiController@viewsup');
Route::post('/formsupplier/storesupplier', 'App\Http\Controllers\RotiController@storesupplier');

//----------Customer---------------
Route::get('/customer','App\Http\Controllers\FormCustomerController@viewdatacus');
Route::get('/deletecus/{id}','App\Http\Controllers\FormCustomerController@deletedatacus');
Route::get('/editcustomer/{id_customer}', 'App\Http\Controllers\FormCustomerController@TampilEditCustomer');
Route::post('/editcus/{id_customer}', 'App\Http\Controllers\FormCustomerController@updatecustomer');
Route::get('/addcus', 'App\Http\Controllers\FormCustomerController@viewcus');
Route::post('/formcustomer/storecustomer', 'App\Http\Controllers\FormCustomerController@storecustomer');

//----------Transaksi Beli----------
Route::get('/daftartransaksibeli','App\Http\Controllers\FormBeliController@TampilBeli');
Route::get('/transaksibeli/{id_roti}','App\Http\Controllers\FormBeliController@formbelibahan');
Route::post('/insertpembelian','App\Http\Controllers\FormBeliController@storepembelian');

//----------Transaksi Jual----------
Route::get('/beli','App\Http\Controllers\FormJualController@viewdataproduk');
Route::get('/daftartransaksijual','App\Http\Controllers\FormJualController@TampilJual');
Route::get('/transaksijual/{id_roti}','App\Http\Controllers\FormJualController@formjualbahan');
Route::post('/insertpenjualan','App\Http\Controllers\FormJualController@storepenjualan');

// Route::get('/supplier', function () {
//     return view('supplier');
// });

// route blog
// Route::get('/blog', [BlogController::class, 'home']);
// Route::get('/blog/tentang', [BlogController::class, 'tentang']);
// Route::get('/blog/kontak', [BlogController::class, 'kontak']);
// Route::get('/user',[UserController::class, 'index']);
// Route::get('/user/tambah',[UserController::class, 'tambah']);
// Route::post('/user/store',[UserController::class, 'store']);
// Route::get('/user/edit/{id}',[UserController::class, 'edit']);
// Route::post('/user/update',[UserController::class, 'update']);
// Route::get('/user/hapus/{id}',[UserController::class, 'hapus']);