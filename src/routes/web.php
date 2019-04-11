<?php


//Route::get('/courses', function (){
//   return view('Flexi\CourseEnrolement::courses.index');
//});
Route::group(['namespace'=>'Flexi\CourseEnrolement\Http\Controllers'], function (){
    Route::get('/courses', 'CourseController@index');
});