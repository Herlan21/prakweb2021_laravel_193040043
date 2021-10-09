<?php

use Illuminate\Support\Facades\Route;

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
    return view('Home', [
    "title" => "Home"]);
});

Route::get('/about', function () {
    return view('About', [
        "title" => "About",
        "name" => "Herlan Nurachman",
        "email" => "herlannurachman2000@gmail.com",
        "image" => "gambar1.png"
    ]);
}); 





Route::get('/blog', function () {

    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Herlan Nurachman",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias repellat voluptates sint aliquid rerum. Culpa repudiandae earum ab officia ullam vel suscipit blanditiis voluptates aut facilis numquam, laudantium omnis quas, veritatis voluptatem architecto pariatur nisi quos alias, quidem minima exercitationem. Omnis itaque est, aperiam recusandae quos quam dolorum deleniti facere ab error voluptatibus. Iste voluptatum nesciunt temporibus repellat quae ea nemo? Sunt repellat vel architecto eius expedita, dolorum excepturi beatae, earum rerum cumque necessitatibus hic doloremque ratione provident veritatis totam."
        ],
    
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Herlan Unpas",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus laudantium alias accusamus, neque dicta officia autem sit quisquam ipsum veniam culpa, cupiditate illo? Aut iusto autem optio modi nesciunt sequi voluptatum officiis, dolores similique nulla debitis a ad odit repudiandae voluptates at nobis repellendus error libero laboriosam vitae aliquam cum. Dolor odit temporibus quae non rerum, minima quo perspiciatis et, enim eum libero ad veritatis. Et itaque quasi nobis dolorum, consectetur magnam nostrum, excepturi, qui esse voluptates mollitia ullam. Aperiam quo ipsa non. Expedita odit quae aut eveniet accusantium dolorum numquam dolor, dolore maxime eius odio fugiat. Perferendis, qui porro."
        ],
    ];
    

    return view('posts',[ 
        "title" => "Posts", 
        "posts" => $blog_posts
  ]);
}); 

$new_post = [];
foreach($blog_posts as $post) {
    if($post["slug"]=== $slug) {
        $new_post = $post;
    }
}

// Single Post

Route::get('posts/{slug}', function($slug){
    return view('post',[
        "title" => "Single Post" 
    ]);
});
