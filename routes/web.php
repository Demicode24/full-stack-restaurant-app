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

//static pages
Route::get('/', 'StaticPagesController@home');

Route::get('/menu', 'StaticPagesController@menu');

Route::get('/menu/{slug}', 'StaticPagesController@singleMenu');

Route::get('/about', 'StaticPagesController@about');

Route::get('/reservations', 'StaticPagesController@reservations');

Route::get('/contact', 'StaticPagesController@contact');

Route::get('/offers', 'StaticPagesController@offers');

//admin dashboard
Route::get('/admin', 'admin\AdminController@dashboard');

//admin food categories
Route::get('/admin/food-catergories', 'admin\FoodCategoriesController@index');

Route::get('/admin/food-catergories/create', 'admin\FoodCategoriesController@create');

Route::get('/admin/food-catergories/{}/edit', 'admin\FoodCategoriesController@edit');

//admin users
Route::get('/admin/users', 'admin\UsersController@index');

Route::get('/admin/users/create', 'admin\UsersController@create');

Route::get('/admin/users/{}/edit', 'admin\UsersController@edit');

//admin Customers
Route::get('/admin/offers-members', 'admin\CustomersController@allOffersMembers');

Route::get('/admin/reservations', 'admin\CustomersController@allReservations');

Route::get('/admin/food-catergories/{}/edit', 'admin\FoodCategoriesController@edit');

//admin food items
Route::get('/admin/food-items', 'admin\FoodItemsController@index');

Route::get('/admin/food-items/create', 'admin\FoodItemsController@create');

Route::get('/admin/food-items/{}/edit', 'admin\FoodItemsController@edit');

//admin authentication
Route::get('/admin/register', function () {
    return view('admin/register');
});

Route::get('/admin/login', function () {
    return view('admin/login');
});
