<?php

Route::group(['middleware' => 'web', 'prefix' => \Helper::getSubdirectory(), 'namespace' => 'Modules\ExoGreetings\Http\Controllers'], function() {
    Route::get('/exogreetings', ['uses' => 'ExoGreetingsController@index', 'laroute' => true])->name('exogreetings.index');
});
