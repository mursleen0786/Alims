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

Route::get('/',function (){
    return view('/index');
})->name ('index');

Route::get('/LearnQuranForKids', function() {
    return view('Learn Quran For Kids');
})-> name ('learn quran for kids');

Route::get('/TajweedCourse', function() {
    return view('Tajweed Course');
})-> name ('tajweed course');

Route::get('/QuranTranslation', function() {
    return view('Quran Translation');
})-> name ('quran translation');

Route::get('/Feeandpricing',function() {
	return view('Fee and pricing');
})->name ('fee and pricing');

Route::get('/enrollment',function() {
	return view('enrollment');
})->name ('enrollment');

Route::get('/contact','contactController@contact')->name('contact');
Route::post('/store/contact','contactController@store')->name('store.contact');
Route::get('/enrollment','enrollmentController@enrollment')->name('enrollment');
Route::post('/store/enrollment','enrollmentController@store')->name('store.enrollment');




       //Pages Routes End
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

