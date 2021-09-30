<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TollCollectorController;

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

Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/','App\Http\Controllers\HomeController@laneDetail');


//TollCollectors
Route::get('/tollcollectors','App\Http\Controllers\TollCollectorController@index');
Route::post('/tollcollectors2','App\Http\Controllers\TollCollectorController@store');

//IT
Route::post('/cash','App\Http\Controllers\TollCollectorController@cash');
Route::post('/CashUp','App\Http\Controllers\CashUpController@CashUp');
Route::get('/summary','App\Http\Controllers\CashUpSummaryController@index');
Route::get('/summarySearch','App\Http\Controllers\CashUpSummaryController@summarySearch');
Route::get('/income','App\Http\Controllers\IncomeController@index');
Route::get('laneDetail','App\Http\Controllers\HomeController@laneDetail');
Route::get('/singleview/{id}','App\Http\Controllers\HomeController@singleview');
Route::get('/cashup','App\Http\Controllers\HomeController@cashup');

//Search JobListing
Route::get('/Search','App\Http\Controllers\HomeController@Search');

//Search Income
Route::get('/SearchIncome','App\Http\Controllers\IncomeController@SearchIncome');

//Search Compressive
Route::get('/SearchCompressive','App\Http\Controllers\HomeController@SearchCompressive');

//Admin
Route::get('/add','App\Http\Controllers\AdminController@add');
Route::post('/add','App\Http\Controllers\AdminController@adddata');

Route::get('/create','App\Http\Controllers\AdminController@create');
Route::post('/store','App\Http\Controllers\AdminController@store');

Route::get('/edit_user','App\Http\Controllers\AdminController@edit_user');
Route::get('/manage/{id}','App\Http\Controllers\AdminController@manage_user');
Route::post('/managing/{id}','App\Http\Controllers\AdminController@manage');







