<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        User::create([
            'name' => 'Mohamad Alghaz Hernanda',
            'username' => 'alghazhernanda',
            'email' => 'alghaz.h@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Pep Guardiola',
        //     'email' => 'guardiola@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'user_id' => 1,
        //     'category_id' => 1,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla laboriosam cupiditate alias beatae perspiciatis vero consequatur corrupti',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum quod quaerat sunt suscipit illum doloremque atque consectetur ullam praesentium? Sint error debitis nihil numquam culpa maxime quidem vitae omnis. Voluptates?</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam voluptatem consequatur cum repudiandae, porro eveniet at. Beatae totam sequi maxime soluta non at aliquid ut accusamus voluptates aut? Minus quae id at nisi omnis. Ratione, mollitia cumque quasi nulla quam praesentium dolore reiciendis ex nam dolor error? Accusantium, enim perspiciatis.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'user_id' => 1,
        //     'category_id' => 2,
        //     'slug' => 'judul-Ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla laboriosam cupiditate alias beatae perspiciatis vero consequatur corrupti',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum quod quaerat sunt suscipit illum doloremque atque consectetur ullam praesentium? Sint error debitis nihil numquam culpa maxime quidem vitae omnis. Voluptates?</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam voluptatem consequatur cum repudiandae, porro eveniet at. Beatae totam sequi maxime soluta non at aliquid ut accusamus voluptates aut? Minus quae id at nisi omnis. Ratione, mollitia cumque quasi nulla quam praesentium dolore reiciendis ex nam dolor error? Accusantium, enim perspiciatis.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'user_id' => 1,
        //     'category_id' => 1,
        //     'slug' => 'judul-Ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla laboriosam cupiditate alias beatae perspiciatis vero consequatur corrupti',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum quod quaerat sunt suscipit illum doloremque atque consectetur ullam praesentium? Sint error debitis nihil numquam culpa maxime quidem vitae omnis. Voluptates?</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam voluptatem consequatur cum repudiandae, porro eveniet at. Beatae totam sequi maxime soluta non at aliquid ut accusamus voluptates aut? Minus quae id at nisi omnis. Ratione, mollitia cumque quasi nulla quam praesentium dolore reiciendis ex nam dolor error? Accusantium, enim perspiciatis.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'user_id' => 2,
        //     'category_id' => 1,
        //     'slug' => 'judul-Ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla laboriosam cupiditate alias beatae perspiciatis vero consequatur corrupti',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum quod quaerat sunt suscipit illum doloremque atque consectetur ullam praesentium? Sint error debitis nihil numquam culpa maxime quidem vitae omnis. Voluptates?</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam voluptatem consequatur cum repudiandae, porro eveniet at. Beatae totam sequi maxime soluta non at aliquid ut accusamus voluptates aut? Minus quae id at nisi omnis. Ratione, mollitia cumque quasi nulla quam praesentium dolore reiciendis ex nam dolor error? Accusantium, enim perspiciatis.</p>'
        // ]);
    }
}
