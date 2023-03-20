<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\TypeController;
use App\Http\Controllers\API\SopStepController;
use App\Http\Controllers\API\SOPController;
use App\Http\Controllers\API\SopsController;
use App\Http\Controllers\API\TypesController;
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\SopsStepsController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);

Route::middleware('auth:api')->group(
function ()
    {
        Route::resource('products', ProductController::class);

        // types
        // Types APIs Done!!
        Route::get('type',  [TypesController::class,'index']);
        Route::post('type', [TypesController::class,'add']);

        // categories
        // categories APIs Done!!
        Route::get('categories', [TypesController::class,'categories']);
        Route::post('category',  [TypesController::class,'add_category']);

        //SOP
        // Route::resource('SOPs', SopsController::class);
        Route::get('getSOPs',[SopsController::class,'index']);
        Route::post('SOPs',  [SopsController::class,'add']);
        Route::delete('SOPs/{id}',  [SopsController::class,'destroy']);

        //sop_steps
        Route::get('steps',  [SopsStepsController::class,'view']);
        Route::post('steps', [SopsStepsController::class,'add']);

    }
);
