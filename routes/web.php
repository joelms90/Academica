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

Route::get('task/{task}',  function (Task $task)
{

 return view('show', compact('task'));
})->name('task.show');

Route::get('user/{user}',  function (User $user)
{

 return view('show2', compact('user'));
})->name('user.show');


Route::get('/', function () {

    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
