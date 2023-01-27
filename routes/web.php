<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CoupenController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\ProductController;

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

Route::get('/login',[AdminController::class,'index']);
Route::post('/admin/auth',[AdminController::class,'auth'])->name('admin_auth');

Route::group(['middleware'=>'admin_auth'],function(){
Route::get('/admin/dashbord',[AdminController::class,'dashbord'])->name('admin_dash');
Route::get('/admin/category',[CategoryController::class,'index'])->name('cat_dash');
Route::get('admin/category/manage_category',[CategoryController::class,'manage_category'])->name('manage_cate');
Route::post('admin/insert',[CategoryController::class,'store'])->name('cat_insert');
Route::get('admin/delete/{id}',[CategoryController::class,'destroy'])->name('del_cat');
Route::get('admin/coupen',[CoupenController::class,'index'])->name('cpn_dash');
Route::get('admin/coupen/mange_coupen',[CoupenController::class,'manage_coupen'])->name('mang_cpn');
Route::post('admin/coupen/store',[CoupenController::class,'store'])->name('cpn_str');
Route::get('admin/delete/{id}',[CoupenController::class,'destroy'])->name('del_cpn');
Route::get('admin/coupen/status/{type}/{id}',[CoupenController::class,'status'])->name('del_cpn');
Route::get('admin/size',[SizeController::class,'index'])->name('size_dash');
Route::get('admin/manage_size',[SizeController::class,'manage_size'])->name('manage_size');
Route::post('admin/size/store',[SizeController::class,'store'])->name('size_str');
Route::get('admin/size/{id}',[SizeController::class,'destroy'])->name('size_del');
Route::get('admin/product',[ProductController::class,'index'])->name('prod_dash');
Route::get('admin/manage_product',[ProductController::class,'manage_product'])->name('manage_product');
Route::post('admin/product/store',[ProductController::class,'store'])->name('pro_str');
Route::get('admin/product/{id}',[ProductController::class,'destroy'])->name('del_pro');
Route::get('admin/product/status/{type}/{id}',[ProductController::class,'status'])->name('pro_status');
Route::get('admin/logout',function(){
	session()->forget('Admin_login');
	session()->get('Admin_id');
	session()->flash('error','logout Successfully');
 return redirect('login');
});
});

