<?php

use App\Http\Controllers\PostsController;
use App\Models\Post;

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

//Route::get('/', function () {
//    return view('welcome');
//});
//
////Route::get('/post/{id}', [PostsController::class, 'index']);
//
//Route::resource('posts', PostsController::class);
//
//Route::get('/contact', [PostsController::class, 'contact']);
//
//Route::get('post/{id}/{var1}/{var2}', [PostsController::class, 'show_post']);


/*
|--------------------------------------------------------------------------
| Database Raw SQL Queries
|--------------------------------------------------------------------------
*/

//use Illuminate\Support\Facades\DB;
//
//Route::get('/insert', function() {
//
//    DB::insert('insert into posts(title, content) values(?,?)', ['Laravel is awesome with Rafal', 'Laravel with Rafal is the best thing that has happened to PHP']);
//
//});

//Route::get('/read', function() {
//
//    $results = DB::select('select * from posts where id = ?', [1]);
//
////    return $results;
//
//    foreach ($results as $post) {
//
//        return $post->title;
//
//    }
//
//});

//Route::get('/update', function() {
//
//    $updated = DB::update('update posts set title = "Updated title" where id = ?', [1]);
//
//    return $updated;
//
//});

//Route::get('/delete', function() {
//
//    $deleted = DB::delete('delete from posts where id = ?', [1]);
//
//    return $deleted;
//
//});


/*
|--------------------------------------------------------------------------
| ELOQUENT
|--------------------------------------------------------------------------
*/


//Route::get('/read', function() {
//
//    $posts = Post::all();
//
//    foreach ($posts as $post) {
//
//        return $post->title;
//
//    }
//
//});

//Route::get('/find', function() {
//
//    $post = Post::find(2);
//
//    return $post;
//
//});

//Route::get('/find-where', function() {
//
//    $posts = Post::where('id', 2)->orderBy('id', 'desc')->take(1)->get();
//
//    return $posts;
//
//});

//Route::get('/find-more', function() {
//
////    $posts = Post::findOrFail(1);
//
//    $posts = Post::where('users_count', '<', 50)->firstOrFail();
//
//    return $posts;
//
//});

//Route::get('/basic-insert', function() {
//
//    $post = new Post;
//    $post->title = 'New Eloquent title insert';
//    $post->content = 'Wow eloquent is really cool, look at this content';
//    $post->save();
//});

//Route::get('/basic-insert2', function() {
//
//    $post = Post::find(2);
//    $post->title = 'New Eloquent title insert 2';
//    $post->content = 'Wow eloquent is really cool, look at this content 2';
//    $post->save();
//});

//Route::get('/create', function() {
//
//    Post::create(['title' => 'the create method', 'content' => 'WOW I\'am a lot with Edwin Diaz']);
//});

//Route::get('/update', function() {
//
//    Post::where('id', 2)->where('is_admin', 0)->update(['title' => 'NEW PHP TITLE', 'content' => 'I love Laravel']);
//
//});

//Route::get('/delete', function() {
//
//    $post = Post::find(8);
//    $post->delete();
//
//});

//Route::get('/delete2', function() {
//
////    Post::destroy(3);
//    Post::destroy([4,5]);
//
//});

//Route::get('/soft-delete', function() {
//
//    Post::find(6)->delete();
//
//});
//
//Route::get('/read-soft-delete', function() {
//
////    $post = Post::withTrashed()->where('id', 6)->get();
//    $post = Post::onlyTrashed()->where('is_admin', 0)->get();
//
//    return $post;
//
//});

//Route::get('/read-soft-delete', function() {
//
////    $post = Post::withTrashed()->where('id', 6)->get();
//    $post = Post::onlyTrashed()->where('is_admin', 0)->get();
//
//    return $post;
//
//});
//
//Route::get('/restore', function() {
//
////    $post = Post::withTrashed()->where('id', 6)->get();
//    Post::withTrashed()->where('is_admin', 0)->restore();
//
//});

//Route::get('/force-delete', function() {
//
////    $post = Post::withTrashed()->where('id', 6)->get();
//    Post::onlyTrashed()->where('is_admin', 0)->forceDelete();
//
//});
