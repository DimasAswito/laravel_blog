<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    $posts = [
        [
            'title' => 'Judul Artikel 1',
            'author' => 'Dimas Aswito',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, at consequuntur mollitia omnis, vitae sapiente dolorum nam perspiciatis nihil vel facere? Distinctio deleniti possimus temporibus excepturi, quibusdam inventore vel rerum!'
        ],
        [
            'title' => 'Judul Artikel 2',
            'author' => 'Dimas Aswito',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, at consequuntur mollitia omnis, vitae sapiente dolorum nam perspiciatis nihil vel facere? Distinctio deleniti possimus temporibus excepturi, quibusdam inventore vel rerum!'
        ]
    ];
    return view('posts', ['title' => 'Blog Page', 'posts' => $posts]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Us']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Me']);
});
