<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestTestController;
//use App\Http\Controllers\Blog\PostController;
use App\Http\Controllers\HomeController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Auth::routes();

Route::get('home', [HomeController::class, 'index'])->name('home');

//Route::resource('rest', RestTestController::class)->names('restTest');

Route::group(['namespace' => 'App\Http\Controllers\Blog', 'prefix' => 'blog'], function()
{
    Route::resource('posts', 'PostController')->names('blog.posts');
});

//Админка Блога
$groupData = [
    'namespace' => 'App\Http\Controllers\Blog\Admin',
    'prefix' => 'admin/blog',
] ;

Route::group($groupData, function()
{
    // BlogCategory
    $methods = ['index','edit', 'store','update', 'create'];
        Route::resource('categories', 'CategoryController')
            ->only($methods)
            ->names('blog.admin.categories');
});

