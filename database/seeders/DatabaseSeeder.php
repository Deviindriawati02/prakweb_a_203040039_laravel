<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
       

         User:: create([
             'name' => 'devi',
             'username' => 'deviindria',
            'email' => 'devi@gmail.com',
            'password' => bcrypt('12345')
         ]);

        // User:: create([
        //     'name' => 'yusuf',
        //    'email' => 'yusuf@gmail.com',
        //    'password' => bcrypt('12345')
        // ]);
         User::factory(3)->create();

        Category::create([
            'name' => 'Web Progaming',
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
        //     'excerpt' =>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. e praesentiu Tenetur reprehenderit aliquam nulla quisquam cupiditate autem nostrum quam aut sit, illum accusamus maiores, quidem corporis iure delectus, soluta error natus impedit earum eum. Consectetur ab odit dolorem, soluta vero architecto dolorum id magnam ut quia cumque reiciendis consequatur quae iste, laborum animi impedit, illum eius eum omnis. Cupiditate tempora accusamus dolore qui dicta, ipsa quod necessitatibus repellendus repellat aliquam suscipit libero illo modi placeat explicabo asperiores, molestias pariatur voluptatibus voluptates assumenda autem vero unde? Ratione temporibus ipsam vero rerum?',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' =>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. ',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' =>'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' =>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. ',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis quisquam unde blanditiis esse deleniti repudiandae praesentium voluptatem debitis alias ullam? Tenetur reprehenderit aliquam nulla quisquam cupiditate autem nostrum quam aut sit, illum accusamus maiores, quidem corporis iure delectus, soluta error natus impedit earum eum. Consectetur ab odit dolorem, soluta vero architecto dolorum id magnam ut quia cumque reiciendis consequatur quae iste, laborum animi impedit, illum eius eum omnis. Cupiditate tempora accusamus dolore qui dicta, ipsa quod necessitatibus repellendus repellat aliquam suscipit libero illo modi placeat explicabo asperiores, molestias pariatur .',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
