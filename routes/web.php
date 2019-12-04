<?php

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
use App\Work;
use App\About;

Route::get('/', function () {
	$works = Work::orderBy('created_at', 'desc')->paginate(20);
    return view('welcome', ['works' => $works]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about-me', function () {
	$abouts = About::all();
	return view('about-us', ['abouts' => $abouts]);
});

Route::resource('work', 'WorkController')->middleware('auth');

Route::resource('about', 'AboutController')->middleware('auth');