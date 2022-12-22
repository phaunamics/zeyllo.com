<?php

use App\Models\Waitlist;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WaitlistController;

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
    return view('index');
});

Route::controller(BlogController::class)->group(function () {
    Route::get('blog', 'index')->name('blog.index');
    Route::get('blog/{title}', 'show')->name('blog.show');
});

Route::post('join', WaitlistController::class)->name('join-waitlist');

Route::get('lists', function () {
    return Waitlist::get();
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('posts', PostController::class);
    Route::post('/uploads', UploadController::class)->name('upload');
});


require __DIR__ . '/auth.php';
