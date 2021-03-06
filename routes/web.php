<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestTestController;
// use App\Http\Controllers\Blog\PostController;
// use App\Http\Controllers\HomeController;

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

require __DIR__ . '/auth.php';

Auth::routes();

// Route::resource('rest', RestTestController::class)->names('restTest');

Route::group(['namespace' => 'App\Http\Controllers\Blog', 'prefix' => 'blog'], function () {
    Route::resource('posts', 'PostController')->names('blog.posts');
});

//Админка
Route::get('/admin', 'App\Http\Controllers\Admin\AdminController@dashboard');

//Админка Блога
$groupData = [
    'namespace' => 'App\Http\Controllers\Blog\Admin',
    'prefix' => 'admin/blog',
];

Route::group($groupData, function () {

    // BlogCategory
    $methods = ['index', 'edit', 'store', 'update', 'create', 'destroy'];
    Route::resource('categories', 'CategoryController')
        ->only($methods)
        ->names('blog.admin.categories');

    // BlogPost
    Route::resource('posts', 'PostController')
        ->except('show')
        ->names('blog.admin.posts');

});