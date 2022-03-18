<?php



// Authentication routes
Auth::routes();


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Include Wave Routes
Wave::routes();

//website routes
Route::get('/home', 'homecontroller@grid')->name('movie.home');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/subscription', function () {
    return view('subscription');
});

Route::get('/support', function () {
    return view('support');
});

Route::get('/movie', function () {
    return view('emovie');
});

Route::get('/movie/{name}',"moviecontroller@movie");
