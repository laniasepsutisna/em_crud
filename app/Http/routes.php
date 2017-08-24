<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|

*/
Route::get('/', function()
{
    return View::make('pages.home');
});
Route::get('about', function()
{
    return View::make('pages.about');
});

Route::get('contact', function()
{
    return View::make('pages.contact');
});

 Route::get('teacher',['as' => 'teacher.list','uses' => 'ControlerTeacher@listTeacher']);

 Route::get('/{teacher}/delete',['as' => 'teacher.delete','uses' => 'ControlerTeacher@deleteTeacher']);

 Route::get('/{teacher}/edit',['as' => 'teacher.edit','uses' => 'ControlerTeacher@editTeacher']);

Route::post('/{teacher}/update',['as' => 'teacher.update','uses' => 'ControlerTeacher@updateTeacher']);

