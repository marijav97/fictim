<?php


use App\Http\Controllers\AdminPostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AdminUserController;

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
Route::put('/posts/{post}', [PostController::class, 'update'])->name('pages.posts.update');
Route::get('/posts/create', [PostController::class, 'create'])->name('pages.posts.create');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('pages.posts.edit');

Route::post('/posts',[PostController::class,'store'])->name('pages.posts.store');
Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('post');



Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('pages.posts.destroy');




Route::get('/login-form', [FrontendController::class, 'loginForm'])->name('login-form');
Route::post('/login', [FrontendController::class, 'login'])->name('login');
Route::get('/register-form', [FrontendController::class, 'registerForm'])->name('register-form');
Route::post('/register', [FrontendController::class, 'register'])->name('register');
Route::get('/logout', [FrontendController::class, 'logout'])->name('logout');

Route::get("/comments/{post}/show", [CommentController::class,'show'])->name("showComment");
Route::post('/comment/{id}', [CommentController::class, 'insert'])->name('postComment');

Route::get('/admin', function () {
    return view('pages.admin.index');
});
Route::prefix('admin')->group(function () {
    Route::resource("/users", AdminUserController::class);
    Route::resource("/posts", AdminPostController::class);
    Route::get('/comments',[Controllers\AdminCommentController::class, 'index'])->name('comments.index');
    Route::delete('/comments/{id}',[Controllers\AdminCommentController::class, 'destroy'])->name('comments.destroy');

    Route::view('users-page', "admin.users.index");
});

Route::get("/error",  function () {
    return view("pages.main.error");
})->name("error");
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact',[ContactController::class,'sendEmail'])->name('send.email');
Route::get('/author',[FrontendController::class, 'author'])->name('author');
/*Route::middleware(['loggedIn'])->group(function () {
    Route::post('/login', [FrontendController::class, 'login'])->name('login');
}); rute koje zelimo da budu zasticene
*/
