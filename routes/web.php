<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SOPController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/type', function () {
    return view('Types.add');
});
// Route::get('/view_type', function () {
//     return view('Types.view');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');


    //category

    Route::get('/category', [CategoryController::class, 'index']);
    Route::get('/new_categories', [CategoryController::class, 'newCat']);
    Route::post('/add_categories', [CategoryController::class, 'add']);
    Route::delete('/delete_category/{id}', [CategoryController::class, 'delete']);
    Route::get('edit_categories/{id}', [CategoryController::class, 'edit']);
    Route::put('update_category', [CategoryController::class, 'update']);

    //Types

    Route::get('/type', [TypeController::class, 'index']);
    Route::get('/add_type', [TypeController::class, 'add']);
    Route::post('/add_type', [TypeController::class, 'store']);
    Route::get('/edit_type/{id}', [TypeController::class, 'edit']);
    Route::delete('/delete_type/{id}', [TypeController::class, 'delete']);
    Route::put('/update_type', [TypeController::class, 'update']);

    //Users

    Route::get('/user', [UserController::class, 'index']);
    Route::get('/new_user', [UserController::class, 'newUser']);
    Route::post('/add_user', [UserController::class, 'add']);
    Route::delete('/delete_user/{id}', [UserController::class, 'delete']);
    Route::get('edit_user/{id}', [UserController::class, 'edit']);
    Route::put('/update_user', [UserController::class, 'update']);

    //SOPs

    Route::get('/sop', [SOPController::class, 'index']);
    Route::get('/add_sop', [SOPController::class, 'newSOP']);
    Route::post('/add_sop', [SOPController::class, 'store']);
    Route::delete('/delete_sop/{id}', [SOPController::class, 'delete']);
    Route::get('edit_sop/{id}', [SOPController::class, 'edit']);
    Route::put('/update_sop', [SOPController::class, 'update']);






});

require __DIR__.'/auth.php';
