<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GeneralWebsiteController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;

use App\Http\Controllers\Surveys\SurveyController;
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

Route::get('/', [GeneralWebsiteController::class, 'index'])->name('index');
Route::get('/about', [GeneralWebsiteController::class, 'about'])->name('about');
Route::get('/dashboard', [GeneralWebsiteController::class, 'dashboard'])->name('dashboard');

Route::get('/landing', function(){
    return view('landing');
});

Route::get('/dashboard/surveys/appendices/surveyAppendixO', function(){
    return view('/dashboard/surveys/appendices/surveyAppendixO');
})->name('surveyAppendixO');

Route::get('/surveyS', function(){
    return view('surveyAppendixS');
});
Route::get('/dashboard/surveys/appendices/surveyAppendixQ', function(){
    return view('/dashboard/surveys/appendices/surveyAppendixQ');
})->name('surveyAppendixQ');
Route::get('/dashboard/surveys/appendices/surveyAppendixT', function(){
    return view('/dashboard/surveys/appendices/surveyAppendixT');
})->name('surveyAppendixT');

Route::get('/dashboard/sampleSurvey', [SurveyController::class, 'index'])->name('SampleSurveyindex');
Route::post('/dashboard/sampleSurvey', [SurveyController::class, 'store'])->name('SampleSurveystore');

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);
