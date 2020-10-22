<?php

use App\Http\Controllers\PostsController;
use App\Models\Post;
use App\Models\User;
use App\Models\Country;
use App\Models\Photo;
use App\Models\Tag;

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
//
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

/*
|--------------------------------------------------------------------------
| ELOQUENT Relationships
|--------------------------------------------------------------------------
*/


// One to One relationship
//Route::get('user/{id}/post', function($id) {
//
////    return User::find($id)->post;
////    return User::find($id)->post->title;
//    return User::find($id)->post->content;
//
//});

//Route::get('post/{id}/user', function($id) {
//
//    return Post::find($id)->user->name;
//
//});


// One to Many relationship

//Route::get('/posts/{id}/user', function($id) {
//
//    $user = User::find($id);
//
//    foreach ($user->posts as $post) {
//        echo $post->title . '<br>';
//    }
//
//});

// Many to Many relationship

//Route::get('/user/{id}/role', function($id) {
//
//    $user = User::find($id)->roles()->orderBy('id', 'desc')->get();
//
//    return $user;
//
////    foreach ($user->roles as $role) {
////        echo $role->name;
////    }
//
//});

// Accessing the intermediate table / pivot

//Route::get('/user/{id}/pivot', function ($id) {
//
//    $user = User::find($id);
//
//    foreach ($user->roles as $role) {
//
//        echo $role->pivot;
//
//    }
//
//});

//Route::get('/user/country/{id}', function ($id) {
//
//    $country = Country::find($id);
//
//    foreach ($country->posts as $post) {
//        echo $post->title . '<br>';
//    }
//});

// Polymorphic Relations

//Route::get('user/photos', function() {
//
//    $user = User::find(1);
//
//    foreach ($user->photos as $photo) {
//        echo $photo->path;
//    }
//
//});

//Route::get('post/{id}/photos', function($id) {
//
//    $post = Post::find($id);
//
//    foreach ($post->photos as $photo) {
//        echo $photo->path . '<br>';
//    }
//
//});

//Route::get('photo/{id}/post', function($id) {
//
//    $photo = Photo::findOrFail($id);
//
//    return $photo->imageable;
//
//});

// Polymorphic Many to Many

//Route::get('/post/tag', function () {
//
//    $post = Post::find(1);
//
//    foreach ($post->tags as $tag) {
//        echo $tag->name;
//    }
//
//});

//Route::get('/tag/post', function () {
//
//    $tag = Tag::find(2);
//
//    foreach ($tag->post as $post) {
//        echo $post->title;
//    }
//
//});

/*
|--------------------------------------------------------------------------
| CRUD Application
|--------------------------------------------------------------------------
*/


Route::group(['middleware'=>'web'], function() {

    Route::resource('/posts', PostsController::class);

});
