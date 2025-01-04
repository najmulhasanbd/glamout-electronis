<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\BannerVideoController;
use App\Http\Controllers\Backend\BrouchureController as BackendBrouchureController;
use App\Http\Controllers\Backend\CareerController as BackendCareerController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\SocialActivityController as BackendSocialActivityController;
use App\Http\Controllers\Frontend\BrouchureController;
use App\Http\Controllers\Frontend\CareerController;
use App\Http\Controllers\Frontend\ContactUsController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\SocialActivityController;
use App\Http\Controllers\Frontend\SupplierController;

//frontend Routes
Route::get('/', [FrontendController::class, 'home'])->name('frontend.home');

Route::get('media', [FrontendController::class, 'mediaPage'])->name('media.page');
Route::get('supplier', [SupplierController::class, 'supplierPage'])->name('supplier.page');

Route::get('social-activity', [SocialActivityController::class, 'socialActivity'])->name('social.activity.page');

Route::get('brochure', [BrouchureController::class, 'brochurePage'])->name('brochure.page');

Route::get('career', [CareerController::class, 'careerPage'])->name('career.page');
Route::post('career/store', [CareerController::class, 'store'])->name('career.page.store');

//contact page
Route::get('contact', [ContactUsController::class, 'contactPage'])->name('contact.page');
Route::post('contact/store', [ContactUsController::class, 'store'])->name('contact.store');




//backend Routes
// Route::get('/admin/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/admin/dashboard', [AdminController::class, 'index'])->middleware(['auth', 'verified'])->name('admin.dashboard');

//backend routes
Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {

    //admin controller
    Route::name('admin.')->controller(AdminController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
    });

    //banner video
    Route::get('/banner-video', [BannerVideoController::class, 'index'])->name('admin.banner');
    Route::put('/banner-video/{id}', [BannerVideoController::class, 'update'])->name('admin.banner.update');

    //career
    Route::get('career', [BackendCareerController::class, 'index'])->name('admin.career');
    Route::get('career/destroy/{id}', [BackendCareerController::class, 'destroyCareere'])->name('admin.career.destroy');

    Route::get('career-path', [BackendCareerController::class, 'path'])->name('admin.career.path');
    Route::post('career-path/store', [BackendCareerController::class, 'store'])->name('admin.career.path.store');
    Route::get('career-path-destroy/{id}', [BackendCareerController::class, 'destroy'])->name('admin.career.path.destroy');

    //social activity
    Route::get('social-activity',[BackendSocialActivityController::class,'index'])->name('admin.social-activity');
    Route::put('social-activity/{id}', [BackendSocialActivityController::class, 'update'])->name('admin.social-activity.update');


    //brouochure
    Route::get('/brouchure', [BackendBrouchureController::class, 'index'])->name('admin.brouchure');
    Route::post('/brouchure/store', [BackendBrouchureController::class, 'store'])->name('admin.brouchure.store');
    Route::get('/brouchure/edit/{brouchure}', [BackendBrouchureController::class, 'edit'])->name('admin.brouchure.edit');
    Route::put('/brouchure/update/{brouchure}', [BackendBrouchureController::class, 'update'])->name('admin.brouchure.update');

    Route::delete('/brouchure/destroy/{brouchure}', [BackendBrouchureController::class, 'destroy'])->name('admin.brouchure.destroy');

    //contact
    Route::get('contact-message', [ContactController::class, 'contactMessage'])->name('contact.message');
    Route::delete('/contact/destroy/{contact}', [ContactController::class, 'contactDestroy'])->name('contact.destroy');


    //setting controller
    Route::name('admin.')->controller(SettingController::class)->group(function () {
        Route::get('/settings', 'index')->name('setting');
        Route::post('/settings/update/{id}', 'update')->name('setting.update');
    });
});








Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
