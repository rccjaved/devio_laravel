<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomePageController;
use App\Http\Controllers\Admin\AboutPageController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\AchievementController;
use App\Http\Controllers\Admin\FeedBackController;
use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContactController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Home Page Route
Route::get('/home-page', [HomePageController::class, 'SelectHome']);
Route::get('/home-page/title', [HomePageController::class, 'SelectHomeTitle']);
Route::get('/home-page/social', [HomePageController::class, 'SelectHomeSocialIcons']);

// About Page Route
Route::get('/about-page', [AboutPageController::class, 'SelectAbout']);

// Service Page Route
Route::get('/service-name', [ServiceController::class, 'SelectServiceName']);
Route::get('/service-detail/{serviceId}', [ServiceController::class, 'onSelectDetails']);

// Project Page Route
Route::get('/project-page', [ProjectController::class, 'SelectProjectData']);

// Achieve Page Route
Route::get('/achievements-projects', [AchievementController::class, 'SelectAchievements']);

// Feedback Page Route
Route::get('/feedback-images', [FeedBackController::class, 'SelectFeedBack']);

// Feedback Page Route
Route::get('/footer/data', [FooterController::class, 'onAllSelect']);
Route::post('/postcontact', [ContactController::class, 'PostContactDetails']);


// Blog Page Route
Route::get('/blog/data', [BlogController::class, 'SelectBlog']);
Route::get('/blog-details/{blogId}', [BlogController::class, 'BlogDetails']);


