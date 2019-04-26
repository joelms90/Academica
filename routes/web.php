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

Route::get('task',  function ()
{
$user = user::with('tasks')->where('id', '1')->first();
return $user->tasks;

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

Route::get('current_tasks', 'TaskController@index');
Route::get('archived_tasks', 'TaskController@archived');
Route::post('create_task', 'TaskController@store');
Route::post('delete_task/{id}', 'TaskController@destroy');
Route::post('archive_task/{id}', 'TaskController@archive');
Route::post('edit_task', 'TaskController@edit');