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

Route::get('/', function () {
    return redirect()->route('tasks.index');
});

Auth::routes();

Route::get('/home', function () {
    return redirect()->route('tasks.index');
})->name('home');

Route::resource('tasks', 'TasksController')->parameters(['tasks' => 'id'])->middleware('auth');

Route::resource('projects', 'ProjectsController')->parameters(['projects' => 'id'])->middleware('auth');