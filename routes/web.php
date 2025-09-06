<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about-us', function () {
    return view('agro.about_us');
})->name('about');

Route::get('/products', [App\Http\Controllers\HomeController::class, 'products'])->name('product');

Route::get('/products/{id}', [App\Http\Controllers\HomeController::class, 'productsDetail'])->name('product');

Route::get('/spares', [App\Http\Controllers\HomeController::class, 'spares'])->name('spare');

Route::get('/gallery', [App\Http\Controllers\HomeController::class, 'gallery'])->name('gallery');

Route::get('/videos', [App\Http\Controllers\HomeController::class, 'video'])->name('video');

Route::get('/contact-us', function () {
    return view('agro.contact_us');
})->name('contact');

Route::post('/contact-detail', [App\Http\Controllers\HomeController::class,'ContactSave']);


Route::get('/sitemap.xml', [App\Http\Controllers\SiteMapController::class, 'sitemap']);
Route::get('/static-sitemap.xml', [App\Http\Controllers\SiteMapController::class, 'static_sitemap']);
Route::get('/product-sitemap.xml', [App\Http\Controllers\SiteMapController::class, 'product_sitemap']);