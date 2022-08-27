<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\PagesController@index')->name('index');

Auth::routes(['verify'=>true]);

Route::get('/redirects', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('admin', 'App\Http\Controllers\AdminDashboardController');
Route::resource('crime', 'App\Http\Controllers\CrimeController');
Route::resource('jobs', 'App\Http\Controllers\PoliceJobController');
Route::resource('complain','App\Http\Controllers\ComplaintController');
Route::resource('loginpurpose', 'App\Http\Controllers\LoginPurposeController');
Route::resource('policelogin', 'App\Http\Controllers\PoliceLoginController');
Route::resource('showcomplain', 'App\Http\Controllers\ShowComplaintController');
Route::resource('profile', 'App\Http\Controllers\ProfileController');
Route::resource('contact', 'App\Http\Controllers\ContactController');
Route::resource('civillist', 'App\Http\Controllers\CivillianListController');
Route::resource('policelist', 'App\Http\Controllers\PoliceListController');
Route::resource('messages', 'App\Http\Controllers\MessagesController');
Route::resource('inbox', 'App\Http\Controllers\InboxController');
Route::resource('sent', 'App\Http\Controllers\SentMessageController');
Route::resource('showmessage', 'App\Http\Controllers\ShowMessageController');

Route::resource('afterreg', 'App\Http\Controllers\AfterRegController');