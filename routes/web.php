<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\HomePageController;
use App\Http\Controllers\Admin\AboutPageController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\AchievementController;
use App\Http\Controllers\Admin\FeedBackController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\FooterController;

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
    return view('auth.login');
});


Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:sanctum'])->name('dashboard');

// Admin Controller 

Route::get('/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');

Route::get('/profile/view', [AdminController::class, 'AdminUserProfile'])->name('admin.user.profile');
Route::get('/profile/edit', [AdminController::class, 'AdminEditProfile'])->name('user.profile.edit');
Route::post('/user/profile/store',[AdminController::class, 'UserProfileStore'])->name('user.profile.store');
Route::get('/change/password', [AdminController::class, 'UserChangePassword'])->name('change.password');
Route::post('/change/password/store',[AdminController::class, 'UserStorePassword'])->name('change.password.update');


// Home Contoller
Route::prefix('home')->group(function(){

    Route::get('/view',[HomePageController::class, 'AllHomeContent'])->name('all.home.content');    
    Route::get('/edit/{id}',[HomePageController::class, 'EditHomeContent'])->name('edit.homecontent');
    Route::post('/update/{id}',[HomePageController::class, 'UpdateHomeContent'])->name('homecontent.update');
    Route::get('/delete/{id}',[HomePageController::class, 'DeleteHomeContent'])->name('delete.homecontent'); 
    
});

// About Contoller
Route::prefix('about')->group(function(){

    Route::get('/view',[AboutPageController::class, 'AllAboutContent'])->name('all.about.content');    
    Route::get('/edit/{id}',[AboutPageController::class, 'EditAboutContent'])->name('edit.about.content');
    Route::post('/update/{id}',[AboutPageController::class, 'UpdateAboutContent'])->name('about.content.update');
    Route::get('/delete/{id}',[AboutPageController::class, 'DeleteAboutContent'])->name('delete.about.content'); 
    
});

// Services Contoller
Route::prefix('service')->group(function(){

    Route::get('/view',[ServiceController::class, 'AllServiceContent'])->name('all.service.content');    
    Route::get('/add',[ServiceController::class, 'AddServiceContent'])->name('add.service.content');
    Route::post('/store',[ServiceController::class, 'StoreServiceContent'])->name('store.service.content');
    Route::get('/edit/{id}',[ServiceController::class, 'EditServiceContent'])->name('edit.service.content');
    Route::post('/update/{id}',[ServiceController::class, 'UpdateServiceContent'])->name('update.content.service');
    Route::get('/delete/{id}',[ServiceController::class, 'DeleteServiceContent'])->name('delete.service.content'); 
    
});

// Projects Contoller
Route::prefix('projects')->group(function(){

    Route::get('/view',[ProjectController::class, 'AllProjectContent'])->name('all.project.content');    
    Route::get('/edit/{id}',[ProjectController::class, 'EditProjectContent'])->name('edit.project.content');
    Route::post('/update/{id}',[ProjectController::class, 'UpdateProjectContent'])->name('update.project.service');
    Route::get('/delete/{id}',[ProjectController::class, 'DeleteProjectContent'])->name('delete.project.content'); 
});

// Achievements Contoller
Route::prefix('achieve')->group(function(){

    Route::get('/view',[AchievementController::class, 'AllAchievements'])->name('all.achieve.content');    
    Route::get('/add',[AchievementController::class, 'AddAchievements'])->name('add.achieve.content');
    Route::post('/store',[AchievementController::class, 'StoreAchievements'])->name('store.achieve.content');
    Route::get('/edit/{id}',[AchievementController::class, 'EditAchievements'])->name('edit.achieve.content');
    Route::post('/update/{id}',[AchievementController::class, 'UpdateAchievements'])->name('update.achieve.service');
    Route::get('/delete/{id}',[AchievementController::class, 'DeleteAchievements'])->name('delete.achieve.content'); 
    
});

// FeedBack Contoller
Route::prefix('feedback')->group(function(){

    Route::get('/view',[FeedBackController::class, 'AllFeedBack'])->name('all.feed.content');    
    Route::get('/add',[FeedBackController::class, 'AddFeedBack'])->name('add.feed.content');
    Route::post('/store',[FeedBackController::class, 'StoreFeedBack'])->name('store.feed.content');
    Route::get('/edit/{id}',[FeedBackController::class, 'EditFeedBack'])->name('edit.feed.content');
    Route::post('/update/{id}',[FeedBackController::class, 'UpdateFeedBack'])->name('update.content.feed');
    Route::get('/delete/{id}',[FeedBackController::class, 'DeleteFeedBack'])->name('delete.feed.content'); 
    
});

// Contact Contoller
Route::prefix('contact')->group(function(){

    Route::get('/view',[FooterController::class, 'AllContact'])->name('all.contact.content');    
    Route::get('/edit/{id}',[FooterController::class, 'EditContact'])->name('edit.contact.content');
    Route::post('/update/{id}',[FooterController::class, 'UpdateContact'])->name('update.content.contact');
    Route::get('/delete/{id}',[FooterController::class, 'DeleteContact'])->name('delete.contact.content'); 
    
});