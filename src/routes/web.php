<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GeneralWebsiteController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Surveys\AppendixOController;
use App\Http\Controllers\Surveys\AppendixQController;
use App\Http\Controllers\Surveys\AppendixRController;
use App\Http\Controllers\Surveys\AppendixSController;
use App\Http\Controllers\Surveys\AppendixTController;
use App\Http\Controllers\Surveys\SurveyController;
use App\Http\Controllers\Surveys\SocialWorkoutController;
use App\Http\Controllers\Surveys\SocialEatingController;
use App\Http\Controllers\Surveys\PatientHealthController;
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

Route::get('/home', [LoginController::class, 'index'])->name('home');
Route::get('/about', [GeneralWebsiteController::class, 'about'])->name('about');
Route::get('/dashboard', [GeneralWebsiteController::class, 'dashboard'])->name('dashboard');

Route::get('/landing', function(){
    return view('landing');
});

Route::get('/participant-portal/available-surveys/index.html', [SurveyController::class, 'index'])->name('RetrieveSurvey');
Route::get('/participant-portal/available-surveys.html', [SurveyController::class, 'availableSurveys'])->name('surveylisted');

Route::get('/dashboard/surveys/appendices/socialEatingSurvey', [SocialEatingController::class,'index'])->name('SocialEating');
Route::post('/dashboard/surveys/appendices/socialEatingSurvey', [SocialEatingController::class,'store']);

Route::get('/dashboard/surveys/appendices/patientHealthSurvey', [PatientHealthController::class,'index'])->name('PatientHealth');
Route::post('/dashboard/surveys/appendices/patientHealthSurvey', [PatientHealthController::class,'store']);

Route::get('/dashboard/surveys/appendices/surveyAppendixT', [AppendixTController::class,'index'])->name('AppendixT');
Route::post('/dashboard/surveys/appendices/surveyAppendixT', [AppendixTController::class,'store']);

Route::get('/dashboard/surveys/appendices/surveyAppendixS/{id}', [AppendixSController::class,'index']);
Route::post('/dashboard/surveys/appendices/surveyAppendixS', [AppendixSController::class,'store'])->name('AppendixS');

Route::get('/dashboard/surveys/appendices/surveyAppendixR', [AppendixRController::class,'index'])->name('AppendixR');
Route::post('/dashboard/surveys/appendices/surveyAppendixR', [AppendixRController::class,'store']);

Route::get('/dashboard/surveys/appendices/surveyAppendixQ/index.html', [AppendixQController::class,'index'])->name('AppendixQ');
Route::post('/dashboard/surveys/appendices/surveyAppendixQ', [AppendixQController::class,'store']);


Route::get('/dashboard/surveys/appendices/surveyAppendixO', [AppendixOController::class,'index'])->name('AppendixO');
Route::post('/dashboard/surveys/appendices/surveyAppendixO', [AppendixOController::class,'store']);

Route::get('/dashboard/surveys/appendices/SocialWorkoutSurvey', [SocialWorkoutController::class,'index'])->name('SocialWorkout');
Route::post('/dashboard/surveys/appendices/SocialWorkoutSurvey', [SocialWorkoutController::class,'store']);


Route::get('/dashboard/sampleSurvey', [SurveyController::class, 'index'])->name('SampleSurveyindex');
Route::post('/dashboard/sampleSurvey', [SurveyController::class, 'store'])->name('SampleSurveystore');

Route::get('/dashboard/researchSurvey', [SurveyController::class, 'researchSurvey'])->name('researchSurvey');
Route::get('/dashboard/distributeSurvey', [SurveyController::class, 'showDistributeSurvey'])->name('DistributeSurveyIndex');
Route::post('/dashboard/distributeSurvey', [SurveyController::class, 'DistributeSurveyStore'])->name('DistributeSurveyStore');

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');
Route::get('/logout', [LogoutController::class, 'index'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard/surveyNav', [SurveyNavController::class, 'index'])->name('SurveyNav');
Route::post('/dashboard/surveyNav', [SurveyNavController::class, 'store']);
Route::get('/loginresearcher', [LoginController::class, 'indexresearcher'])->name('loginresearcher');
Route::post('/loginresearcher', [LoginController::class, 'storeresearcher']);

Route::get('/registerresearcher', [RegisterController::class, 'indexresearcher'])->name('registerresearcher');
Route::post('/registerresearcher', [RegisterController::class, 'storeresearcher']);

Route::get('/userProfilePage/{id}', [LoginController::class, 'showProfileData']);
Route::post('/userProfilePage',[LoginController::class, 'updateProfile']);

Route::get('/', [LoginController::class, 'index'])->name('homeindex');
Route::get('/logoutSuccessPage', function(){
    return view('logoutSuccessPage');
});
