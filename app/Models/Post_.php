<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Nioke Dev",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet quisquam velit magni in. Consequatur cupiditate aut optio facilis quod non illo, totam mollitia deserunt omnis doloribus illum ullam nulla autem minima dolorem, minus in expedita quibusdam architecto recusandae possimus. Consectetur optio nulla est illo recusandae quo. Sunt animi, consequuntur, quam quos hic nesciunt omnis facilis, officiis cupiditate nobis ut quisquam. Error ipsum sed aut. Ratione beatae necessitatibus expedita tempora ipsam, commodi, corrupti atque velit dignissimos id hic dolorem, veritatis possimus."

        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Sandhika Galih",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet quisquam velit magni in. Consequatur cupiditate aut optio facilis quod non illo, totam mollitia deserunt omnis doloribus illum ullam nulla autem minima dolorem, minus in expedita quibusdam architecto recusandae possimus. Consectetur optio nulla est illo recusandae quo. Sunt animi, consequuntur, quam quos hic nesciunt omnis facilis, officiis cupiditate nobis ut quisquam. Error ipsum sed aut. Ratione beatae necessitatibus expedita tempora ipsam, commodi, corrupti atque velit dignissimos id hic dolorem, veritatis possimus.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet quisquam velit magni in. Consequatur cupiditate aut optio facilis quod non illo, totam mollitia deserunt omnis doloribus illum ullam nulla autem minima dolorem, minus in expedita quibusdam architecto recusandae possimus. Consectetur optio nulla est illo recusandae quo. Sunt animi, consequuntur, quam quos hic nesciunt omnis facilis, officiis cupiditate nobis ut quisquam. Error ipsum sed aut. Ratione beatae necessitatibus expedita tempora ipsam, commodi, corrupti atque velit dignissimos id hic dolorem, veritatis possimus."

        ],
        [
            "title" => "Judul Post Ketiga",
            "slug" => "judul-post-ketiga",
            "author" => "Doddy Firmansyah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet quisquam velit magni in. Consequatur cupiditate aut optio facilis quod non illo, totam mollitia deserunt omnis doloribus illum ullam nulla autem minima dolorem, minus in expedita quibusdam architecto recusandae possimus. Consectetur optio nulla est illo recusandae quo. Sunt animi, consequuntur, quam quos hic nesciunt omnis facilis, officiis cupiditate nobis ut quisquam. Error ipsum sed aut. Ratione beatae necessitatibus expedita tempora ipsam, commodi, corrupti atque velit dignissimos id hic dolorem, veritatis possimus.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet quisquam velit magni in. Consequatur cupiditate aut optio facilis quod non illo, totam mollitia deserunt omnis doloribus illum ullam nulla autem minima dolorem, minus in expedita quibusdam architecto recusandae possimus. Consectetur optio nulla est illo recusandae quo. Sunt animi, consequuntur, quam quos hic nesciunt omnis facilis, officiis cupiditate nobis ut quisquam. Error ipsum sed aut. Ratione beatae necessitatibus expedita tempora ipsam, commodi, corrupti atque velit dignissimos id hic dolorem, veritatis possimus.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet quisquam velit magni in. Consequatur cupiditate aut optio facilis quod non illo, totam mollitia deserunt omnis doloribus illum ullam nulla autem minima dolorem, minus in expedita quibusdam architecto recusandae possimus. Consectetur optio nulla est illo recusandae quo. Sunt animi, consequuntur, quam quos hic nesciunt omnis facilis, officiis cupiditate nobis ut quisquam. Error ipsum sed aut. Ratione beatae necessitatibus expedita tempora ipsam, commodi, corrupti atque velit dignissimos id hic dolorem, veritatis possimus."

        ]
    ];


    public static function all()
    {
        return collect(self::$blog_posts);
    }
    public static function find($slug)
    {
        $posts = static::all();
        // self khusus untuk properti static
        // tapi kalau static itu untuk methdd static


        // $post = [];

        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
