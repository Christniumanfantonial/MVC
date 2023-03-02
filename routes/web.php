<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PagesController;
use Symfony\Component\HttpFoundation\Request;


Route::get('/',[PagesController::class, 'index'])->name('products.index');
Route::get('/services',[PagesController::class, 'services'])->name('products.services');
Route::get('/portfolio',[PagesController::class, 'portfolio'])->name('products.portfolio');
Route::get('/about',[PagesController::class, 'about'])->name('products.about');
Route::get('/team',[PagesController::class, 'team'])->name('products.team');
Route::get('/contact',[PagesController::class, 'contact'])->name('products.contact');