<?php

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\AdminModuleController;
use App\Http\Controllers\Admin\FormController as AdminDataController;
use App\Http\Controllers\Admin\FilesController as AdminFilesController;
use App\Http\Controllers\Writer\WriterModuleController;
use App\Http\Controllers\Writer\FormController as WriterDataController;
use App\Http\Controllers\Writer\FilesController as WriterFilesController;

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
    return view('site.home');
});

/*
|-----------------------------------------------------------------------  /
| Auth after login route for all user's level 
|----------------------------------------------------------------------- */
Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', [DashboardController::class, 'index']);
});

/*
|-----------------------------------------------------------------------  /
| Writers
|----------------------------------------------------------------------- */
Route::group(['prefix' => '/writer', 'middleware' => ['auth', 'role:writer']], function () {
    Route::get('/', [WriterModuleController::class, 'Builder']);
    Route::get('/{module?}', [WriterModuleController::class, 'Builder']);
    Route::get('/{module?}/{section?}', [WriterModuleController::class, 'Builder']);
    Route::get('/{module?}/{section?}/{panel?}{extension}', [WriterModuleController::class, 'Builder'])->where('extension', '(?:.html)?');
    Route::get('/files/{target?}/{type?}/{file?}', [WriterFilesController::class, 'privateFiles']);
    Route::post('/json/{module?}', [WriterDataController::class, 'jsonData']);
    Route::post('/json/{module?}/{section?}', [WriterDataController::class, 'jsonData']);
    Route::post('/json/{module?}/{section?}/{panel?}', [WriterDataController::class, 'jsonData']);
    Route::post('/form/{module?}', [WriterDataController::class, 'formData']);
    Route::post('/form/{module?}/{section?}', [WriterDataController::class, 'formData']);
    Route::post('/form/{module?}/{section?}/{panel?}', [WriterDataController::class, 'formData']);    
});

/*
|-----------------------------------------------------------------------  /
| Administration
|----------------------------------------------------------------------- */
$admin = env('ADMIN_PATH_PREFIX'); // this directory should have a more secured name from .env
Route::group(['prefix' => $admin, 'middleware' => ['auth', 'role:admin']], function () {
    Route::get('/', [AdminModuleController::class, 'Builder']);
    Route::get('/{module?}', [AdminModuleController::class, 'Builder']);
    Route::get('/{module?}/{section?}', [AdminModuleController::class, 'Builder']);
    Route::get('/{module?}/{section?}/{panel?}{extension}', [AdminModuleController::class, 'Builder'])->where('extension', '(?:.html)?');
    Route::get('/files/{target?}/{type?}/{file?}', [AdminFilesController::class, 'privateFiles']);
    Route::post('/json/{module?}', [AdminDataController::class, 'jsonData']);
    Route::post('/json/{module?}/{section?}', [AdminDataController::class, 'jsonData']);
    Route::post('/json/{module?}/{section?}/{panel?}', [AdminDataController::class, 'jsonData']);
    Route::post('/form/{module?}', [AdminDataController::class, 'formData']);
    Route::post('/form/{module?}/{section?}', [AdminDataController::class, 'formData']);
    Route::post('/form/{module?}/{section?}/{panel?}', [AdminDataController::class, 'formData']);    
});

require __DIR__.'/auth.php';
