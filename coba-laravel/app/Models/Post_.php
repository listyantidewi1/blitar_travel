<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul_post_pertama",
            "author" => "Sul",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, quibusdam. Facilis hic earum quae quia minus id vero ad, corrupti impedit nostrum libero maiores dolorem possimus sequi beatae? Cumque harum eligendi ipsum exercitationem consequatur. Labore pariatur sunt cum, eum tenetur, quaerat molestias quibusdam perspiciatis distinctio rem, doloribus soluta dolores accusantium unde rerum iure quidem facere nam deleniti in aut nostrum ducimus placeat nemo. A expedita perferendis veniam, alias illum, eligendi, ipsum quos neque sequi molestias fuga magnam necessitatibus. Sunt aut ducimus fuga quaerat inventore dolor itaque dicta, dolorum fugit? Eos."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul_post_kedua",
            "author" => "Than",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, quibusdam. Facilis hic earum quae quia minus id vero ad, corrupti impedit nostrum libero maiores dolorem possimus sequi beatae? Cumque harum eligendi ipsum exercitationem consequatur. Labore pariatur sunt cum, eum tenetur, quaerat molestias quibusdam perspiciatis distinctio rem, doloribus soluta dolores accusantium unde rerum iure quidem facere nam deleniti in aut nostrum ducimus placeat nemo. A expedita perferendis ven iam, alias illum."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post  = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
};
