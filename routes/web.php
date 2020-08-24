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
    return view('frontend/home.index');
});

Auth::routes();
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/admin', function () {
    return redirect('/admin/user');
});


Route::get('/home', 'HomeController@index')->name('home');
// Frontend
Route::get('product', 'frontend\ProductController@index')->name('product');

Route::get('send_mail', 'frontend\ContactController@mail')->name('send_mail');
Route::get('contacto', 'frontend\ContactController@index')->name('contacto');
Route::get('/catalogo', 'frontend\CatalogController@index')->name('catalog');
// admin
Route::prefix('admin')->group(function () {
Route::middleware(['auth'])->group(function () {

Route::get('upload-image','ProductsController@image');
Route::post('upload-image',['as'=>'image.upload','uses'=>'admin\ProductsController@uploadImages']);

Route::resource('user', 'admin\UserController');

Route::get('indexImages/{product_id}', 'admin\ProductsController@indexImages')->name('indexImages');
Route::post('addImage', 'admin\ProductsController@addImage')->name('addImage');
Route::delete('deleteImage/{id}', 'admin\ProductsController@deleteImage')->name('deleteImage');

Route::resource('categories', 'admin\CategoriesController');
Route::post('category_visible', 'admin\CategoriesController@setCategoryVisible')->name('category_visible');
Route::post('subcategory_visible', 'admin\SubController@setSubcategoryVisible')->name('subcategory_visible');
Route::post('product_visible', 'admin\ProductsController@setProductVisible')->name('product_visible');
Route::post('setMainImage', 'admin\ProductsController@setMainImage')->name('setMainImage');

Route::resource('slider', 'admin\SliderController');

Route::delete('catalogoedit/{id}', 'admin\ProductsController@catalogo')->name('catalogoedit');
Route::resource('contact', 'admin\ContactController');
Route::delete('contactDelete/{id}', 'admin\ContactController@destroy')->name('contactDelete');
Route::get('destroyCatalog/{id}', 'admin\ProductsController@destroyCatalog')->name('destroyCatalog');

Route::resource('products', 'admin\ProductsController');
Route::resource('sub', 'admin\SubController');


//ajax

Route::get('getSub_CategoriesByCategory', 'admin\SubController@getSub_CategoriesByCategory')->name('getSub_CategoriesByCategory');

});
});