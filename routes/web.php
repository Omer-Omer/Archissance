<?php

use App\Http\Controllers\Backend\CompanyController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ProjectController;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/projects', [App\Http\Controllers\HomeController::class, 'projects'])->name('projects');
Route::get('/project-detail/{id}', [App\Http\Controllers\HomeController::class, 'projectDetail'])->name('projectDetail');


// Route::get('/', function () {
//     return view('frontend.home');
// });
Route::get('/about', function () {
    return view('frontend.aboutus');
});
Route::get('/team', function () {
    return view('frontend.team');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});
// Route::get('/projects', function () {
//     return view('frontend.projects');
// });

// Route::get('/listing', function () {
//     return view('frontend.listing');
// });

// Route::get('/company', function () {
//     return view('frontend.company');
// });

// Route::get('/offices', function () {
//     return view('frontend.offices');
// });

// Route::get('/details', function () {
//     return view('frontend.details');
// });

// Route::get('/categories', function () {
//     return view('frontend.categories');
// });

// Route::get('/contact-buyer', function () {
//     return view('frontend.contact-buyer');
// });

// Route::get('/contact', function () {
//     return view('frontend.contact');
// });

// Route::get('/contactus', function () {
//     return view('frontend.contactus');
// });

// Route::get('/services', function () {
//     return view('frontend.services');
// });

// Route::get('/qc-services', function () {
//     return view('frontend.qc-services');
// });

// Route::get('/supplier-credentials', function () {
//     return view('frontend.supplier-credentials');
// });

// Route::get('/about-companies', function () {
//     return view('frontend.about-companies');
// });


Auth::routes();

Route::prefix('admin')->middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        return view('backend.dashboard');
    })->name('dashboard');

    Route::get('/home/banner', [HomeController::class, 'homeBanner'])->name('home.banner.index');
    Route::get('/home/banner/create', [HomeController::class, 'homeBannerCreate'])->name('home.banner.create');
    Route::post('/home/banner/store', [HomeController::class, 'homeBannerStore'])->name('home.banner.store');
    Route::get('/home/banner/edit/{id}', [HomeController::class, 'homeBannerEdit'])->name('home.banner.edit');
    Route::put('/home/banner/{id}', [HomeController::class, 'homeBannerUpdate'])->name('home.banner.update');
    Route::delete('/home/banner/{id}', [HomeController::class, 'homeBannerDelete'])->name('home.banner.delete');

    Route::get('/home/content', [HomeController::class, 'homeContent'])->name('home.content.index');
    Route::post('/home/content/store', [HomeController::class, 'homeContentStore'])->name('home.content.store');

    Route::delete('/company/image/{id}', [CompanyController::class, 'deleteImage'])->name('company.deleteImage');
    Route::delete('/product/image/{id}', [CompanyController::class, 'deleteImage'])->name('product.deleteImage');
    Route::delete('/project/image/{id}', [ProjectController::class, 'deleteImage'])->name('project.deleteImage');
    Route::resource('company', CompanyController::class);
    Route::resource('product', ProductController::class);
    Route::resource('project', ProjectController::class);

});
