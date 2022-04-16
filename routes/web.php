<?php

use App\Http\Controllers\ClassesController;
use App\Http\Controllers\DayController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ShiftController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TimeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::prefix('admin')->group(function(){
    Route::view('/','admins.academics.index')->name('academics'); 

    Route::resource('/classes' , ClassesController::class);
    Route::resource('/grades'  , GradeController::class);
    Route::resource('/levels'  , LevelController::class);
    Route::resource('/days'    , DayController::class);
    Route::resource('/times'   , TimeController::class);
    Route::resource('/shifts'  , ShiftController::class);
    Route::resource('/subjects', SubjectController::class );
    Route::resource('/sessions', SessionController::class );
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
