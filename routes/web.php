<?php

use App\Http\Controllers\ActivityController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
    return view('login.login'); 
});

Route::get('/home', function () {
    return view('home'); 
});

Route::get('/activity', function () {
    return view('activity.activity'); 
});

Route::get('/login', [LoginController::class, 'login']) -> middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'register']) -> middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/news', [PostController::class, 'index']);

Route::get('news/{post}', [PostController::class, 'show']);

Route::controller(ImageController::class)->group(function(){
    Route::get('image-upload', 'index');
    Route::post('image-upload', 'store')->name('image.store');
});


Route::prefix('dashboard')->name('dashboard.')->middleware('auth')->group(function () {
    Route::get('/', function() {
        return view('dashboard.dash');
    })->name('index');
    Route::resource('news', ActivityController::class);
});