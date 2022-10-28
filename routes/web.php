<?php

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

Route::get('/', function () {
    return redirect('welcome');
});

Route::get('/welcome', [\App\Http\Controllers\PagesController::class, 'welcome'])->name('welcome');

//pages routes
Route::get('/explore', [\App\Http\Controllers\PagesController::class, 'explore'])->name('explore');
Route::get('/campaign-details/{id}', [\App\Http\Controllers\PagesController::class, 'campaignDetails'])->name('campaign-details');
Route::get('/about', [App\Http\Controllers\PagesController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\PagesController::class, 'contact'])->name('contact');
Route::get('/terms', [App\Http\Controllers\PagesController::class, 'terms'])->name('terms');
Route::get('/category/{name}', [\App\Http\Controllers\PagesController::class, 'showCategory'])->name('category');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//organization routes
Route::get('/organizations', [App\Http\Controllers\OrganizationController::class, 'index'])->name('organizations');
Route::get('/create-organization', [App\Http\Controllers\OrganizationController::class, 'create'])->name('create-organization');
Route::post('/create-organization', [App\Http\Controllers\OrganizationController::class, 'store'])->name('create-organization');
Route::get('/organization-profile', [App\Http\Controllers\OrganizationController::class, 'profile'])->name('organization-profile');
Route::post('/update-organization', [\App\Http\Controllers\OrganizationController::class, 'update'])->name('update-organization');
Route::get('/organization-details/{id}', [\App\Http\Controllers\OrganizationController::class, 'update'])->name('organization-details');
Route::get('/delete-organization/{id}', [\App\Http\Controllers\OrganizationController::class, 'destroy'])->name('delete-organization');

//campaign routes
Route::get('/campaigns', [App\Http\Controllers\CampaignController::class, 'index'])->name('campaigns');
Route::get('/my-campaigns', [App\Http\Controllers\CampaignController::class, 'myCampaigns'])->name('my-campaigns');
Route::get('/create-campaign', [App\Http\Controllers\CampaignController::class, 'create'])->name('create-campaign');
Route::post('/save-campaign', [App\Http\Controllers\CampaignController::class, 'store'])->name('save-campaign');
Route::get('/campaign/{id}', [App\Http\Controllers\CampaignController::class, 'show'])->name('campaign');
Route::get('/approve-campaign/{id}', [App\Http\Controllers\CampaignController::class, 'approve'])->name('approve-campaign');
Route::get('/decline-campaign/{id}', [App\Http\Controllers\CampaignController::class, 'decline'])->name('decline-campaign');
Route::get('/edit-campaign/{id}', [App\Http\Controllers\CampaignController::class, 'edit'])->name('edit-campaign');
Route::post('/update-campaign/{id}', [App\Http\Controllers\CampaignController::class, 'update'])->name('update-campaign');


//admin routes
Route::get('/admin-dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('admin-dashboard');
Route::get('/users', [\App\Http\Controllers\UserController::class, 'index'])->name('users');
Route::get('/make-admin/{id}', [\App\Http\Controllers\UserController::class, 'makeAdmin'])->name('make-admin');
Route::get('/remove-admin/{id}', [\App\Http\Controllers\UserController::class, 'removeAdmin'])->name('remove-admin');


// categories routes
Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'create'])->name('categories');
Route::post('/create-categories', [App\Http\Controllers\CategoryController::class, 'store'])->name('create-categories');
Route::get('/target-categories', [App\Http\Controllers\TargetCategoryController::class, 'create'])->name('target-categories');
Route::post('/create-target-categories', [App\Http\Controllers\TargetCategoryController::class, 'store'])->name('create-target-categories');

// state routes
Route::get('/states', [App\Http\Controllers\StateController::class, 'create'])->name('states');
Route::post('/create-state', [App\Http\Controllers\StateController::class, 'store'])->name('create-state');
Route::get('getLgas/{id}', [App\Http\Controllers\CampaignController::class, 'getLgas']);

//target routes
Route::get('/all-targets', [\App\Http\Controllers\TargetController::class, 'index'])->name('all-targets');
Route::get('/upload-targets', [\App\Http\Controllers\TargetController::class, 'targetUpload'])->name('upload-targets');
Route::post('/store-targets', [\App\Http\Controllers\TargetController::class, 'store'])->name('store-targets');
Route::post('/new-target', [\App\Http\Controllers\TargetController::class, 'create'])->name('new-target');
Route::get('getTargets/{id}', [App\Http\Controllers\CampaignController::class, 'getTargets']);
Route::get('my-targets', [App\Http\Controllers\TargetController::class, 'myTargets'])->name('my-targets');

//Participation and reviews
Route::post('/participate', [\App\Http\Controllers\ParticipationController::class, 'store'])->name('participate');
Route::post('/show-participate', [\App\Http\Controllers\ParticipationController::class, 'show'])->name('show-participate');
Route::get('/all-partcipants', [\App\Http\Controllers\ParticipationController::class, 'index'])->name('all-partcipants');
Route::get('/participants', [\App\Http\Controllers\ParticipationController::class, 'create'])->name('participants');
Route::post('/review', [\App\Http\Controllers\ReviewController::class, 'store'])->name('review');
Route::get('/all-reviews', [\App\Http\Controllers\ReviewController::class, 'index'])->name('all-reviews');
Route::get('/my-reviews', [\App\Http\Controllers\ReviewController::class, 'create'])->name('my-reviews');

