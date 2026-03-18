<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post {
    public static function all(){
        return [
        [
            'title' => 'Judul Artikel 1',
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'author' => 'Dimas Aswito',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, at consequuntur mollitia omnis, vitae sapiente dolorum nam perspiciatis nihil vel facere? Distinctio deleniti possimus temporibus excepturi, quibusdam inventore vel rerum!'
        ],
        [
            'title' => 'Judul Artikel 2',
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'author' => 'Dimas Aswito',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, at consequuntur mollitia omnis, vitae sapiente dolorum nam perspiciatis nihil vel facere? Distinctio deleniti possimus temporibus excepturi, quibusdam inventore vel rerum!'
        ]
    ];
    }

    public static function find($slug){
      return Arr::first(static::all(), fn($post) => $post['slug'] == $slug) ?? abort(404);
    }
}