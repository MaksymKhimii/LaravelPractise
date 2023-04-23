<?php

use App\Http\Controllers\PostsController;
use App\Models\Post;
use \App\Models\Flight;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Models\User;

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

/*Route::resource('posts', '\App\Http\Controllers\PostsController');

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
});*/

/*Route::get('/read', function () {
    $posts = Post::all();
    foreach ($posts as $post) {
        return $post->title;
    }
});

Route::get('/find', function () {
    $post = DB::table('posts')->find(1);
    return $post->title;
});

Route::get('/findWhere', function () {
    $post = DB::table('posts')
        ->orderBy('id', 'desc')
        ->take(2)
        ->get();
    return $post;
});

Route::get('/findmore', function () {
    $post = Post::all();
    return $post;
});

Route::get('/flights', function () {
    return \App\Models\Flight::all()->where('name', '=', 'Java');
});

Route::get('/insert', function () {
    $flight = Flight::all()->find(1);
    $flight->name = 'C++';
    $flight->save();
});

Route::get('/create', function () {
    /*$flights = Flight::all()->orderBy('id', 'desc');*/
/*    $flights = Flight::all()->sortByDesc('id')->first();
    Flight::create(array('name'=>'GO'));

});

Route::get('/delete', function () {
    $flights = Flight::all()->where('name', '=', 'C++')->first();
    $flights->delete();

});*/

//One-to-One relationship
/*Route::get('/user/{id}/post', function ($id) {
    return User::find($id)->post->title;
});

//One-to-One inverse relationship
Route::get('/post/{id}/user', function ($id) {
    return Post::find($id)->user->name;
});

// One-to-Many relationship
Route::get('/posts', function () {
    $user = User::find(1);
    foreach ($user->posts as $post) {
        echo $post->id . ' ' . $post->title . ' ' . $post->content . "<br>";
    }
});

// polymorphic relationship
Route::get('/users/photos', function () {
    $user = User::find(1);
    foreach ($user->photos as $photo) {
        return $photo;
    }
});*/

Route::resource('/posts', PostsController::class);
