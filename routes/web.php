<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;

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

Route::middleware('loggedin')->group(function() {
    Route::get('login', [AuthController::class, 'loginView'])->name('login-view');
    Route::post('login', [AuthController::class, 'login'])->name('login');
    Route::get('register', [AuthController::class, 'registerView'])->name('register-view');
    Route::post('register', [AuthController::class, 'register'])->name('register');
});

Route::middleware('auth')->group(function() {
    Route::get('/', [PageController::class, 'loadPage'])->name('dashboard');
    Route::get('/summary-report', [PageController::class, 'loadSummaryReport']);
    Route::get('/ip-activities', [PageController::class, 'loadIpActivities']);
    Route::get('/anomalies-detection', [PageController::class, 'loadAnomaliesDetection']);
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('page/{layout}/{theme}/{pageName}', [PageController::class, 'loadPage'])->name('page');
    Route::post('page/time-summary', [PageController::class, 'createTimeSummary'])->name('time-summary.store');
    Route::post('page/time-ip-activities', [PageController::class, 'createTimeIpActivities'])->name('time-ip-activities.store');
    Route::get('/detection-threshold', [PageController::class, 'editDetectionThreshold'])->name('detection-threshold.edit');
    Route::post('/detection-threshold/{id}', [PageController::class, 'updateDetectionThreshold'])->name('detection-threshold.update');
    Route::get("/notifications/{id}" , "App\Http\Controllers\Api\ApiNotificationController@update") ;
});

