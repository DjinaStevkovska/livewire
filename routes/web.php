<?php

use App\Comment;
use App\Post;
use App\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/home', 'Controller@home');


// Route::post('/post/{post}/comment', function (Request $request, Post $post) {
//     // dd($request->comment);
//     $request->validate([
//         'comment' => 'required|min:4',
//     ]);

//     Comment::create([
//         'post_id' => $post->id,
//         'username' => 'guest',
//         'content' => $request->comment,
//     ]);

//     return back()->with('success_message', 'Comment was posted!');
// })->name('comment.store');


// Route::get('/post/{post}', function (Post $post)
// {
//     return view('post', [
//         'post' => $post,
//     ]);

// })->name('post');