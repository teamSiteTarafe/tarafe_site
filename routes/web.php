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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/* -------------------- il faut donner les noms en anglais--------------- */

/* cote utilisateur client */



Route::get('/blog', 'customer\BlogController@index')->name('blog');

Route::get('/boutiques', 'customer\ShopController@index')->name('shops');
Route::get('/boutique', 'customer\ShopController@show')->name('shop');
Route::get('/service', 'customer\ServiceController@index')->name('service');
Route::get('/compte', 'customer\CustomerController@index')->name('account');

Route::get('/produits', 'customer\ProductController@index')->name('products');
Route::get('/detail-produit', 'customer\ProductController@show')->name('product-detail');
Route::get('/galerie', 'customer\GalleryController@index')->name('gallery');



/* côté boutiques */

/* pour la connexion et inscription, tu peux recopier le dossier AUTH dans les vues SHOP et SuperAdmin si tu trouves
que çà te facilitera la minipulation */

// Route::get('/b/connexion', 'Shop\ShopController@index')->name('loginShop');
// Route::get('/b/inscription', 'Shop\ShopController@index')->name('registerShop');
Route::get('/b/tableau-de-bord', 'Shop\ShopController@index')->name('dashboardShop');




/* cote administrateur */


