<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');

Route::get('quiz/create', 'App\Http\Controllers\QuizController@create');
Route::post('quiz', 'App\Http\Controllers\QuizController@store');
Route::get('quiz/{quiz?}', 'App\Http\Controllers\QuizController@show')->name('quiz/show');

Route::get('quiz/{quiz}/questions/create', 'App\Http\Controllers\QuestionController@create');
Route::post('quiz/{quiz}/questions', 'App\Http\Controllers\QuestionController@store');
Route::delete('quiz/{quiz}/questions/{question}', '\App\Http\Controllers\QuestionController@destroy');
Route::get('question/{question}', '\App\Http\Controllers\QuestionController@edit')->name('question/edit');
Route::patch('question/{question}', '\App\Http\Controllers\QuestionController@update')->name('question/update');

Route::get('startquiz/{quiz}-{slug}', 'App\Http\Controllers\StartQuizController@show');
Route::post('startquiz/{quiz}-{slug}', 'App\Http\Controllers\StartQuizController@store');
