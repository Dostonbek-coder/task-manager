<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
    
    Route::get('/login',[SiteController::class, 'login'])->name('login');
    Route::get('/registar',[SiteController::class, 'registar'])->name('registar');
    Route::get('/task-create',[SiteController::class, 'task-create'])->name('task-create');
    Route::get('/task-edit',[SiteController::class, 'task-edit'])->name('task-edit');
    Route::get('/task',[SiteController::class, 'task'])->name('task');
    
    
    
    
    

});








