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

// Route::get('/', function () {
//     return view('posts.index');
// });

// Route::get('/', function(){
//       // $tasks = [
//       //   'Go to the store',
//       //   'Finish screencasts',
//       //   'Clean the house'
//       // ];
//       // $tasks = DB::table('tasks')->latest()->get();
//       $tasks = App\Task::all();
//       return view('index', compact('tasks'));
// });

// Route::get('tasks/{task}', function($id){
//   // $task = DB::table('tasks')->find($id);
//   $task = App\Task::find($id);
//   return view('show', compact('task'));
// });

Route::get('/', 'PostsController@index')->name('home');
Route::get('posts/new', 'PostsController@create');
Route::post('posts/new', 'PostsController@store');
Route::get('posts/{post}', 'PostsController@show');

Route::post('/{post}/comments', 'CommentsController@store');

Route::get('/register', 'RegisterController@create');
Route::post('/register', 'RegisterController@store');

Route::get('/logout', 'SessionsController@destroy');
Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
