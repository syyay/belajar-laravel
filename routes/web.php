<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller;    


Route::get(uri: '/', action: Controller\HomeController::class);
Route::get(uri: '/about', action: [Controller\AboutController::class, 'index']);
Route::get(uri: '/contact', action: [Controller\ContactController::class, 'index']);
Route::get(uri: '/gallery', action: [Controller\GalleryController::class, 'index']);

