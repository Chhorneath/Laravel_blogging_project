

<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WelcomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
//To homepage and blogging
Route::get('/', [WelcomeController::class, 'index'])->name('welcome.index');

//To create blog post
Route::get('/blogging/create', [BlogController::class, 'create'])->name('blog.create');

//To store blog post to db
Route::post('/blog', [BlogController::class, 'store'])->name('blog.store');

//To blog page
Route::get('/blogging/blog', [BlogController::class, 'index'])->name('blog.index');

//To about page
Route::get('/blogging/about', [AboutController::class, 'index'])->name('about.index');

//To contact page
Route::get('/blogging/contact', [ContactController::class, 'index'])->name('contact.index');

// To Send data to email.
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

//category resource controller
Route::resource('/categories', CategoryController::class);

//To a blog post page
Route::get('/blogging/{post:slug?}', [BlogController::class, 'show'])->name('single-blog.show');

// To edit a blog post page
Route::get('/blogging/{post?}/edit', [BlogController::class, 'edit'])->name('single-blog.edit');

// To update a blog post page
Route::put('/blogging/{post?}', [BlogController::class, 'update'])->name('single-blog.update');

// To delete a blog post page
Route::delete('/blogging/{post?}', [BlogController::class, 'destroy'])->name('single-blog.destroy');



// The resource controller above under the hood.

// Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
// Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
// Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
// Route::get('/categories/{category?}', [CategoryController::class, 'show'])->name('categories.show');
// Route::get('/categories/{category?}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
// Route::put('/categories/{category?}', [CategoryController::class, 'update'])->name('categories.update');
// Route::delete('/categories/{category?}', [CategoryController::class, 'destroy'])->name('categories.destroy');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// //To a blog post page
// Route::get('/blogging/{post:slug?}', [BlogController::class, 'show'])->name('single-blog.show');

// // To edit a blog post page
// Route::get('/blogging/{post?}/edit', [BlogController::class, 'edit'])->name('single-blog.edit');

// // To update a blog post page
// Route::put('/blogging/{post?}', [BlogController::class, 'update'])->name('single-blog.update');

// // To delete a blog post page
// Route::delete('/blogging/{post?}', [BlogController::class, 'destroy'])->name('single-blog.destroy');

