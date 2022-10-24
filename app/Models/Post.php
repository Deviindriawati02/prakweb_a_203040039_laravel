<?php

namespace App\Models;



class Post 
{
   private static $blog_posts = [
    [
        "title"=> "Judul Post Pertama",
        "slug"=>"Judul Post Pertama",
        "autor"=> "Devi Indriawati",
        "Body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis ullam quaerat iure harum officia mollitia porro itaque illum esse ut laboriosam ipsa in suscipit, voluptate inventore officiis blanditiis vero laborum obcaecati sed doloribus. Consectetur impedit facere, nobis quos molestiae sint. Ab nesciunt atque dolor, alias aut laboriosam earum ipsum libero, veniam eligendi sint illo sapiente nobis voluptatibus praesentium cupiditate autem mollitia in quae dolores exercitationem. Nemo unde provident tempore expedita, et eaque quo recusandae voluptatum placeat pariatur tempora aliquam possimus modi, minima, quibusdam dolorum eius nostrum odit amet est sapiente. Veniam libero necessitatibus hic dolores recusandae. Soluta reprehenderit perferendis veniam?"
    ]
    ];


    public static function all()
    {
        return collect(self::$blog_posts);
    }
    public static function find($slug)
    {
        $posts = static::all();
         return $posts->firstWhere('slug', $slug);

    }
}
