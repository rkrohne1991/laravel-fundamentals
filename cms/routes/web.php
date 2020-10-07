<?php

use App\Http\Controllers\PostsController;

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
//    DB::insert('insert into posts(title, content) values(?,?)', ['PHP with Laravel', 'Laravel is the best thing that has happened to PHP']);
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
