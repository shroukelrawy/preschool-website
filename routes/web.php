<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontPage; 


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [FrontPage::class,'index'])->name('index');
Route::get('about', [FrontPage::class,'about'])->name('about');
Route::get('classes', [FrontPage::class,'classes'])->name('classes');
Route::get('appointment', [FrontPage::class,'appointment'])->name('appointment');
Route::get('calltoaction', [FrontPage::class,'calltoaction'])->name('calltoaction');

Route::get('team', [PreschoolController::class, 'team'])->name('team');
Route::get('error', [PreschoolController::class, 'error'])->name('error');
Route::get('contact', [PreschoolController::class, 'contact'])->name('contact');
Route::get('facility', [PreschoolController::class, 'facility'])->name('facility');

