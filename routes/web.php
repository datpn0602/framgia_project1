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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'],function () {
	Route::group(['prefix' => 'admin'], function () {
        Route::get('/', 'StoreController@index')->name('index');
        Route::group(['prefix' => 'store'], function () {
            Route::get('create', 'StoreController@getAdd')->name('store.getAdd');
            Route::post('create', 'StoreController@postAdd')->name('store.postAdd');
            Route::get('edit/{id?}', 'StoreController@getEdit')->name('store.getEdit');
            Route::post('edit/{id?}', 'StoreController@postEdit')->name('store.postEdit');
        });
        Route::get('profile', 'UserController@getEdit')->name('profile.getEdit');
        Route::post('profile', 'UserController@postEdit')->name('profile.postEdit');
    });
});

Route::get('/{name?}', function ($name) {
    return view('workspace.index', compact('name'));
})->name('workspace.index');
Route::get('food/show', 'FoodController@show')->name('food.show');
Route::get('food/create', 'FoodController@getAdd')->name('food.getAdd');
Route::post('food/create', 'FoodController@postAdd')->name('food.postAdd');
Route::get('category/show', 'CategoryController@show')->name('category.show');
Route::get('category/create', 'CategoryController@getAdd')->name('category.getAdd');
Route::post('category/create', 'CategoryController@postAdd')->name('category.postAdd');




