<?php
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ELibraryController;
use App\Http\Controllers\SummarizationController;
use App\Http\Controllers\CommentController;



Route::post('/posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store');

Route::get('/searchresult', [ProfileController::class, 'show'])->name('profile.views');
Route::get('/summarize', [SummarizationController::class, 'show'])->name('summarize');
Route::post('/summarize', [SummarizationController::class, 'summarize'])->name('summarize');
Route::get('/elibrary', [ELibraryController::class, 'index'])->name('elibrary.index');
Route::post('/elibrary', [ELibraryController::class, 'store'])->name('elibrary.store');


// Home Page Route
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Profile Route
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.view');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/profile', [ProfileController::class, 'show'])->name('profile.view');


// E-Library (Placeholder)
Route::get('/library', function () {
    return view('library'); // Create `resources/views/library.blade.php`
})->name('library');

// Post Something Page
Route::get('/posts', [PostController::class, 'create'])->name('posts.create');


Route::post('/profiles', [ProfileController::class, 'store'])->name('profiles.store');


Route::get('/', [IndexController::class, 'index'])->name('index'); // Home Page (Index)
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login'); // Login Page
Route::post('/login', [LoginController::class, 'login'])->name('login.submit'); // Handle Login Form Submission
Route::get('/register', function () {
    return view('register');
})->name('register.form');

Route::post('/register', [RegisterController::class, 'store'])->name('register');

Route::get('index', function () {
    return view('index');
});
Route::get('about', function () {
    return view('about');
});
Route::get('category', function () {
    return view('category');
});
Route::get('work', function () {
    return view('work');
});
Route::get('profiles', function () {
    return view('/profiles');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth', function () {
    return view('auth');
})->name('auth');




Route::post('/register', [App\Http\Controllers\AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');

