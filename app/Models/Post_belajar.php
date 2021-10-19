<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
        [
                "title" => "Judul Post Pertama",
                "slug" => "judul-post-pertama",
                "author" => "Herlan Nurachman",
                "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias repellat voluptates sint aliquid rerum. Culpa repudiandae earum ab officia ullam vel suscipit blanditiis voluptates aut facilis numquam, laudantium omnis quas, veritatis voluptatem architecto pariatur nisi quos alias, quidem minima exercitationem. Omnis itaque est, aperiam recusandae quos quam dolorum deleniti facere ab error voluptatibus. Iste voluptatum nesciunt temporibus repellat quae ea nemo? Sunt repellat vel architecto eius expedita, dolorum excepturi beatae, earum rerum cumque necessitatibus hic doloremque ratione provident veritatis totam."
            ],
        
            [
                "title" => "Judul Post Herlan",
                "slug" => "judul-post-kedua",
                "author" => "Herlan Unpas",
                "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus laudantium alias accusamus, neque dicta officia autem sit quisquam ipsum veniam culpa, cupiditate illo? Aut iusto autem optio modi nesciunt sequi voluptatum officiis, dolores similique nulla debitis a ad odit repudiandae voluptates at nobis repellendus error libero laboriosam vitae aliquam cum. Dolor odit temporibus quae non rerum, minima quo perspiciatis et, enim eum libero ad veritatis. Et itaque quasi nobis dolorum, consectetur magnam nostrum, excepturi, qui esse voluptates mollitia ullam. Aperiam quo ipsa non. Expedita odit quae aut eveniet accusantium dolorum numquam dolor, dolore maxime eius odio fugiat. Perferendis, qui porro."
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





// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Post extends Model
{
    // use HasFactory;
}
