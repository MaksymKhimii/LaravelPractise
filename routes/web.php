<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
/*
Route::get('hello', function () {
    $actions = [
        'add',
        'delete',
        'update',
        'find',
        'sort'
    ];
    return view('hello', compact('actions'));
});

Route::get('users', function () {
    $users = DB::table('users')->get();
    return view('users', compact('users'));
});

Route::get('user/{id}', function ($id) {
    $user = DB::table('users')->find($id);
    return view('user', compact('user'));
});*/

//Route::get('/post/{id}', '\App\Http\Controllers\PostsController@index');

Route::resource('posts', '\App\Http\Controllers\PostsController');

Route::get('/insert', function () {
    DB::insert('insert into users(phone, created_at, updated_at) VALUES
                                                     (?, ?, ?)', ['12345', now(), now()]);
});

Route::get('/read', function () {
    $result = DB::select('select * from users where id=?', [1]);
    foreach ($result as $user) {
        return $user->phone;
    }
});

Route::get('/update', function (){
    return DB::update('update users set phone = ?', [678910]);
});

Route::get('/delete', function (){
    $delete = DB::delete('delete from users where id = ?', [1]);
    return $delete;
});
