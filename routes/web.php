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
});

