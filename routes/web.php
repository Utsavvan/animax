<?php



// Authentication routes
Auth::routes();


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

//insert routes

    Route::get('/addseries','\App\Http\Controllers\SeriesController@add')->middleware('admin.user');
    Route::post('/addseries','\App\Http\Controllers\SeriesController@store')->middleware('admin.user');


    Route::get('/addseason/{name}','\App\Http\Controllers\SeasonController@add')->middleware('admin.user');
    Route::post('/addseason/{name}','\App\Http\Controllers\SeasonController@store')->middleware('admin.user');

    Route::get('/addepisode/{sname}/{sename}','\App\Http\Controllers\EpisodeController@add')->middleware('admin.user');
    Route::post('/addepisode/{sname}/{sename}','\App\Http\Controllers\EpisodeController@store')->middleware('admin.user');

//update routes

    Route::get('/updateseries/{id}','\App\Http\Controllers\SeriesController@update')->middleware('admin.user');
    Route::post('/updateseries/{id}','\App\Http\Controllers\SeriesController@updates')->middleware('admin.user');

    Route::get('/updateseason/{id}','\App\Http\Controllers\SeasonController@update')->middleware('admin.user');
    Route::post('/updateseason/{id}','\App\Http\Controllers\SeasonController@updates')->middleware('admin.user');

    Route::get('/updateepisode/{id}','\App\Http\Controllers\EpisodeController@update')->middleware('admin.user');
    Route::post('/updateepisode/{id}','\App\Http\Controllers\EpisodeController@updates')->middleware('admin.user');

//view routes

    Route::get('/viewseries','\App\Http\Controllers\SeriesController@view')->name('view.series')->middleware('admin.user');
    Route::get('/viewseason/{name}','\App\Http\Controllers\SeasonController@view')->name('view.seasons')->middleware('admin.user');
    Route::get('/viewepisode/{sname}/season-{sename}','\App\Http\Controllers\EpisodeController@view')->name('view.episode')->middleware('admin.user');

//delete routes

//series delete

    Route::get('/delete/{sid}','\App\Http\Controllers\SeriesController@delete')->middleware('admin.user');

//season delete
    Route::get('season/delete/{seid}','\App\Http\Controllers\SeasonController@delete')->middleware('admin.user');

//episode delete
    Route::get('episode/delete/{epid}','\App\Http\Controllers\EpisodeController@delete')->middleware('admin.user');
});

// Include Wave Routes
Wave::routes();

//website routes
Route::get('/', 'homecontroller@grid')->name('wave.home');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/profile/{id}','\App\Http\Controllers\profileController@');

Route::get('profile','profileController@userid');
Route::post('profile','profileController@changePassword');

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

Route::get('/series/{name}',"seriescontroller@series");

