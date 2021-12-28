<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\post;

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
            'name' => 'Nioke Dev',
            'username' => 'nioke',
            'email' => 'nioke8090@gmail.com',
            'password' => bcrypt('password')
        ]);

        // User::create([
        //     'name' => 'Doddy Ferdiansyah',
        //     'email' => 'doddy@gmail.com',
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
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam assumenda mollitia nesciunt accusamus porro reprehenderit, distinctio eius soluta',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam assumenda mollitia nesciunt accusamus porro reprehenderit, distinctio eius soluta temporibus eum? Voluptatum repellat recusandae sed distinctio ab quidem officia perspiciatis, soluta suscipit beatae illum natus ipsa nulla, nam totam laboriosam sit amet pariatur. Magni, natus ea doloremque debitis optio id, a vel, culpa velit beatae inventore explicabo deleniti qui! Assumenda ea nihil necessitatibus sapiente cumque illo quidem molestias veniam voluptatum omnis ab alias, dicta sunt praesentium veritatis architecto quaerat? Dignissimos quasi nobis deleniti exercitationem possimus ullam quo aperiam amet ratione cum modi est nesciunt quis nostrum quisquam, at pariatur, aut sit.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam assumenda mollitia nesciunt accusamus porro reprehenderit, distinctio eius soluta',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam assumenda mollitia nesciunt accusamus porro reprehenderit, distinctio eius soluta temporibus eum? Voluptatum repellat recusandae sed distinctio ab quidem officia perspiciatis, soluta suscipit beatae illum natus ipsa nulla, nam totam laboriosam sit amet pariatur. Magni, natus ea doloremque debitis optio id, a vel, culpa velit beatae inventore explicabo deleniti qui! Assumenda ea nihil necessitatibus sapiente cumque illo quidem molestias veniam voluptatum omnis ab alias, dicta sunt praesentium veritatis architecto quaerat? Dignissimos quasi nobis deleniti exercitationem possimus ullam quo aperiam amet ratione cum modi est nesciunt quis nostrum quisquam, at pariatur, aut sit.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam assumenda mollitia nesciunt accusamus porro reprehenderit, distinctio eius soluta',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam assumenda mollitia nesciunt accusamus porro reprehenderit, distinctio eius soluta temporibus eum? Voluptatum repellat recusandae sed distinctio ab quidem officia perspiciatis, soluta suscipit beatae illum natus ipsa nulla, nam totam laboriosam sit amet pariatur. Magni, natus ea doloremque debitis optio id, a vel, culpa velit beatae inventore explicabo deleniti qui! Assumenda ea nihil necessitatibus sapiente cumque illo quidem molestias veniam voluptatum omnis ab alias, dicta sunt praesentium veritatis architecto quaerat? Dignissimos quasi nobis deleniti exercitationem possimus ullam quo aperiam amet ratione cum modi est nesciunt quis nostrum quisquam, at pariatur, aut sit.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam assumenda mollitia nesciunt accusamus porro reprehenderit, distinctio eius soluta',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam assumenda mollitia nesciunt accusamus porro reprehenderit, distinctio eius soluta temporibus eum? Voluptatum repellat recusandae sed distinctio ab quidem officia perspiciatis, soluta suscipit beatae illum natus ipsa nulla, nam totam laboriosam sit amet pariatur. Magni, natus ea doloremque debitis optio id, a vel, culpa velit beatae inventore explicabo deleniti qui! Assumenda ea nihil necessitatibus sapiente cumque illo quidem molestias veniam voluptatum omnis ab alias, dicta sunt praesentium veritatis architecto quaerat? Dignissimos quasi nobis deleniti exercitationem possimus ullam quo aperiam amet ratione cum modi est nesciunt quis nostrum quisquam, at pariatur, aut sit.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
