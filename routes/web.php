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
use App\User;
use App\Task;

Route::get('/sendemail','SendEmailController@index');

Route::get('/sendemail/send','SendEmailController@send')->name('mail');


Route::get('task',  function ()
{
$user = user::with('tasks')->where('id', '1')->first();
return $user->tasks;

})->name('tasks3');

Route::get('send-task',  function ()
{
$user = user::with('tasks')->where('id', '1')->first();
return $user->tasks;

})->name('send-tasks');

Route::get('user/{user}',  function (User $user)
{

 return view('show2', compact('user'));
})->name('user.show');


Route::get('/sent', function () {

    return view('sent');
})->name('sent');

Route::get('/tasks', 'TaskController@all')->name('tasks');

Route::get('/tasks', 'TaskController@all')->name('tasks');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
