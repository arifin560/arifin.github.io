<?php

namespace App\Models;

class Post
{
   private static $blog_posts = [
    [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Arifin",
        "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore perspiciatis molestiae quod rerum aut aspernatur doloremque voluptates quae ullam mollitia! Laboriosam minima quos nemo ipsa reiciendis, culpa delectus in nostrum commodi consequatur rem molestias accusantium ipsum sed consequuntur assumenda tempore nulla nihil asperiores repudiandae! Quas, quam blanditiis id culpa et tempore, perferendis dolorum aperiam suscipit laboriosam, facere maiores iusto animi nostrum dolorem similique ullam deleniti dolor voluptate unde neque. Numquam commodi voluptates iusto! Soluta facilis repellendus perferendis saepe et. Est."
    ],
    [
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Dini",
        "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore perspiciatis molestiae quod rerum aut aspernatur doloremque voluptates quae ullam mollitia! Laboriosam minima quos nemo ipsa reiciendis, culpa delectus in nostrum commodi consequatur rem molestias accusantium ipsum sed consequuntur assumenda tempore nulla nihil asperiores repudiandae! Quas, quam blanditiis id culpa et tempore, perferendis dolorum aperiam suscipit laboriosam, facere maiores iusto animi nostrum dolorem similique ullam deleniti dolor voluptate unde neque. Numquam commodi voluptates iusto! Soluta facilis repellendus perferendis saepe ipsa reiciendis, culpa delectus in nostrum commodi consequatur rem molestias accusantium ipsum sed consequuntur assumenda tempore nulla nihil asperiores repudiandae! Quas, quam blanditiis id culpa et tempore, perferendis dolorum aperiam suscipit laboriosam, facere maiores iusto animi nostrum dolorem similique ullam dele."
    ]
    ];

    public static function all() 
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
    //     $post = [];
    //     foreach($posts as $p) {
    //         if($p["slug"] === $slug) {
    //          $post = $p;
    //     }
    // }

    return $posts->firstwhere('slug', $slug);

    }

}
