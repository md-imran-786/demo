<?php


Auth::routes();

Route::get('/','HomeController@index')->name('home');

Route::get('/regular-student',function (){
    return view('frontend.regular');
});
Route::get('/alumni-student',function (){
    return view('frontend.alumni');
});

Route::resource('student','StudentController');



Route::get('/clear',function(){
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('config:cache');
    Artisan::call('cache:clear');
    return 'cache cleared';
});
