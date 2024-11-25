<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuerybuilController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\Teacher\AttendenceController;
use App\Http\Controllers\Teacher\QuizController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Psr7\Query;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

//Query builder

Route::get('/query', [QuerybuilController::class, 'dbone']);

Route::get('/testlink/morepath/somemorepath/{var1}/{var2}/{var3}', [TestController::class, 'testthreeparam'])->name('test.threepath')->middleware('throttle:100,1');

Route::prefix('userinfo')->group(function () {
    Route::get('/su/{uid}', [UserController::class, 'showuser'])->where('uid', '[0-9]+');
    Route::get('/helpertest', [TestController::class, 'helpertest']);
});

Route::fallback(function () {
    return view("notfound");
});

Route::namespace('Teacher')->group(function () {
    Route::get('/attendence/show', [AttendenceController::class, 'viewattendence'])->name('showatt')->middleware('signed');
    Route::get('/quiz', [QuizController::class, 'index']);
});





Route::get('/profiletest/{id}', [UserController::class, 'profiletest']);

Route::middleware('admin')->group(function () {
    Route::get('/crud', [CrudController::class, 'index'])->name('crud.index');
    Route::post('/crud/add', [CrudController::class, 'store'])->name('crud.store');
    Route::get('/crud/add', [CrudController::class, 'create'])->name('crud.create');
    Route::get('/crud/edit', [CrudController::class, 'edit'])->name('crud.edit');
    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::resource('categories', CategoryController::class);
    Route::resource('subcategories', SubCategoryController::class);
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
//store
// model::create(request()->only(['name', 'email', 'password']));
