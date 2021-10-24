<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();

        // User::create([
        //     'name' => 'Herlan Nurachman',
        //     'email' => 'herlannurachman2000@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Asep Gustavo',
        //     'email' => 'gustavo@gmail.com',
        //     'password' => bcrypt('12345678')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
            
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, nulla deleniti dolorem eaque omnis quibusdam cumque architecto velit quo quis? Sed necessitatibus rem',
            
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, nulla deleniti dolorem eaque  omnis quibusdam cumque architecto velit quo quis? Sed necessitatibus rem, minima pariatur consequatur maxime vitae illum obcaecati! Deserunt quis et ducimus reprehenderit debitis delectus voluptates nesciunt? Repellendus deserunt hic sapiente ea aperiam quos recusandae repellat ducimus labore laborum eligendi sint pariatur nemo, dolorum necessitatibus earum doloremque nulla soluta odit reiciendis exercitationem laboriosam odio corporis magnam? In ex blanditiis quaerat non ipsa eum? Maxime neque, molestiae possimus voluptatibus, eaque illum rerum expedita sequi tempore alias accusantium ducimus. At placeat magnam repudiandae sequi illo saepe officiis illum deserunt ab.',

        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-ke-dua',
            
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, nulla deleniti dolorem eaque omnis quibusdam cumque architecto velit quo quis? Sed necessitatibus rem',
            
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, nulla deleniti dolorem eaque  omnis quibusdam cumque architecto velit quo quis? Sed necessitatibus rem, minima pariatur consequatur maxime vitae illum obcaecati! Deserunt quis et ducimus reprehenderit debitis delectus voluptates nesciunt? Repellendus deserunt hic sapiente ea aperiam quos recusandae repellat ducimus labore laborum eligendi sint pariatur nemo, dolorum necessitatibus earum doloremque nulla soluta odit reiciendis exercitationem laboriosam odio corporis magnam? In ex blanditiis quaerat non ipsa eum? Maxime neque, molestiae possimus voluptatibus, eaque illum rerum expedita sequi tempore alias accusantium ducimus. At placeat magnam repudiandae sequi illo saepe officiis illum deserunt ab.',

        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ke-tiga',
            
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, nulla deleniti dolorem eaque omnis quibusdam cumque architecto velit quo quis? Sed necessitatibus rem',
            
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, nulla deleniti dolorem eaque  omnis quibusdam cumque architecto velit quo quis? Sed necessitatibus rem, minima pariatur consequatur maxime vitae illum obcaecati! Deserunt quis et ducimus reprehenderit debitis delectus voluptates nesciunt? Repellendus deserunt hic sapiente ea aperiam quos recusandae repellat ducimus labore laborum eligendi sint pariatur nemo, dolorum necessitatibus earum doloremque nulla soluta odit reiciendis exercitationem laboriosam odio corporis magnam? In ex blanditiis quaerat non ipsa eum? Maxime neque, molestiae possimus voluptatibus, eaque illum rerum expedita sequi tempore alias accusantium ducimus. At placeat magnam repudiandae sequi illo saepe officiis illum deserunt ab.',

        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-ke-empat',
            
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, nulla deleniti dolorem eaque omnis quibusdam cumque architecto velit quo quis? Sed necessitatibus rem',
            
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, nulla deleniti dolorem eaque  omnis quibusdam cumque architecto velit quo quis? Sed necessitatibus rem, minima pariatur consequatur maxime vitae illum obcaecati! Deserunt quis et ducimus reprehenderit debitis delectus voluptates nesciunt? Repellendus deserunt hic sapiente ea aperiam quos recusandae repellat ducimus labore laborum eligendi sint pariatur nemo, dolorum necessitatibus earum doloremque nulla soluta odit reiciendis exercitationem laboriosam odio corporis magnam? In ex blanditiis quaerat non ipsa eum? Maxime neque, molestiae possimus voluptatibus, eaque illum rerum expedita sequi tempore alias accusantium ducimus. At placeat magnam repudiandae sequi illo saepe officiis illum deserunt ab.',

        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

    }
}
