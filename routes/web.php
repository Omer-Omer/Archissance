<?php

use App\Http\Controllers\Backend\CompanyController;
use App\Http\Controllers\Backend\ProductController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', function () {
    return view('frontend.home');
});

Route::get('/listing', function () {
    return view('frontend.listing');
});

Route::get('/company', function () {
    return view('frontend.company');
});

Route::get('/offices', function () {
    return view('frontend.offices');
});

Route::get('/details', function () {
    return view('frontend.details');
});

Route::get('/categories', function () {
    return view('frontend.categories');
});

Route::get('/contact-buyer', function () {
    return view('frontend.contact-buyer');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/contactus', function () {
    return view('frontend.contactus');
});

Route::get('/services', function () {
    return view('frontend.services');
});

Route::get('/qc-services', function () {
    return view('frontend.qc-services');
});

Route::get('/supplier-credentials', function () {
    return view('frontend.supplier-credentials');
});

Route::get('/about-companies', function () {
    return view('frontend.about-companies');
});


Auth::routes();

Route::prefix('admin')->middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        return view('backend.dashboard');
    })->name('dashboard');

    Route::delete('/company/image/{id}', [CompanyController::class, 'deleteImage'])->name('company.deleteImage');
    Route::delete('/product/image/{id}', [CompanyController::class, 'deleteImage'])->name('product.deleteImage');
    Route::resource('company', CompanyController::class);
    Route::resource('product', ProductController::class);
});
