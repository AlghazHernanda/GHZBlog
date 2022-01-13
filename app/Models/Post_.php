<?php

namespace App\Models;



class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Alghaz Hernanda",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem deserunt qui suscipit iusto? Perferendis 
            possimus ratione impedit earum! Sit eius eum reprehenderit in eos ullam quaerat ipsum corporis ratione placeat neque 
            dolorem amet, a expedita mollitia praesentium magni deleniti quibusdam repellendus nam id. Eius, iusto. Voluptas, sequi 
            nam? Quibusdam, aliquid quasi obcaecati minus nostrum facere blanditiis? Eum sapiente velit maiores, unde quia adipisci,v
            oluptates ipsum modi deleniti soluta consequuntur error voluptatibus ipsam. Dicta commodi id provident nobis sed quia inventore!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Doddy",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem deserunt qui suscipit iusto? Perferendis 
            possimus ratione impedit earum! Sit eius eum reprehenderit in eos ullam quaerat ipsum corporis ratione placeat neque 
            dolorem amet, a expedita mollitia praesentium magni deleniti quibusdam repellendus nam id. Eius, iusto. Voluptas, sequi 
            nam? Quibusdam, aliquid quasi obcaecati minus nostrum facere blanditiis? Eum sapiente velit maiores, unde quia adipisci,v
            oluptates ipsum modi deleniti soluta consequuntur error voluptatibus ipsam. Dicta commodi id provident nobis sed quia inventore!"
        ],

    ];

    public static function all()
    {
        return collect(self::$blog_posts);
        // kita kasih collect biar bisa lebih gampang ngaturnya
    }

    public static function find($slug)
    {
        $posts =  static::all();
        // $post = [];

        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
        //ambil semua posts yang isinya collection, lalu ambil yang pertama kali di temukan
        //dimana slug nya = $slug
    }
}
