<?php

use App\Models\Post; 
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Me']);
});

Route::get('/posts', function(){
    return view('posts', ['title' => 'Blog Me', 'posts' => Post::all()
   ]);
});

Route::get('/posts/{post:slug}', function(Post $post){
   // $post = Post::find($post);

    return view('post', ['title' => 'Artikel Saya', 'post' => $post ]);
});

Route::get('/contact', function(){
    return view('contact', ['title' => 'Contact Me']);
});