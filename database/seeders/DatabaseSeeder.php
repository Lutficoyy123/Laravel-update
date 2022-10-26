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
         

       // User::create([
       //     'name' => 'Muhamad Lutfi',
       //     'email' => 'lutfray123@gmail.com',
       //     'password' => bcrypt('12345')
       // ]);

       // User::create([
       //     'name' => 'Akbar Maldini',
       //     'email' => 'akbar123@gmail.com',
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
       //    'title' => 'Judul Pertama',
       //     'slug' => 'judul-pertama',
       //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus animi dignissimos laborum voluptates consequatur neque provident quod assumenda, blanditiis, ducimus officia consequuntur quo dolores? Blanditiis eum quibusdam delectus voluptatum corrupti',
       //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus animi dignissimos laborum voluptates consequatur neque provident quod assumenda, blanditiis, ducimus officia consequuntur quo dolores? Blanditiis eum quibusdam delectus voluptatum corrupti, qui sed maxime, aut odit voluptates repellendus quisquam voluptas voluptatibus. Debitis perferendis, excepturi doloremque ut esse sapiente nostrum repellat ea, sit consequuntur blanditiis, a fuga veniam perspiciatis sint provident sed. Alias tempora repudiandae dolore obcaecati commodi asperiores dignissimos eveniet, maxime quas libero, necessitatibus, deleniti neque velit dolorum magni. Explicabo, quos temporibus maxime reiciendis doloribus molestiae quidem dignissimos possimus deserunt, ullam laboriosam magni ut dolorem excepturi numquam eveniet blanditiis similique officia.',
       //     'category_id' => 1,
       //     'user_id' => 1
       // ]);

       // Post::create([
       //     'title' => 'Judul Ke Dua ',
       //     'slug' => 'judul-ke-dua',
       //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus animi dignissimos laborum voluptates consequatur neque provident quod assumenda, blanditiis, ducimus officia consequuntur quo dolores? Blanditiis eum quibusdam delectus voluptatum corrupti',
       //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus animi dignissimos laborum voluptates consequatur neque provident quod assumenda, blanditiis, ducimus officia consequuntur quo dolores? Blanditiis eum quibusdam delectus voluptatum corrupti, qui sed maxime, aut odit voluptates repellendus quisquam voluptas voluptatibus. Debitis perferendis, excepturi doloremque ut esse sapiente nostrum repellat ea, sit consequuntur blanditiis, a fuga veniam perspiciatis sint provident sed. Alias tempora repudiandae dolore obcaecati commodi asperiores dignissimos eveniet, maxime quas libero, necessitatibus, deleniti neque velit dolorum magni. Explicabo, quos temporibus maxime reiciendis doloribus molestiae quidem dignissimos possimus deserunt, ullam laboriosam magni ut dolorem excepturi numquam eveniet blanditiis similique officia.',
       //     'category_id' => 1,
       //     'user_id' => 1
       // ]);

       // Post::create([
       //     'title' => 'Judul Ke Tiga ',
       //     'slug' => 'judul-ke-tiga',
       //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus animi dignissimos laborum voluptates consequatur neque provident quod assumenda, blanditiis, ducimus officia consequuntur quo dolores? Blanditiis eum quibusdam delectus voluptatum corrupti',
       //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus animi dignissimos laborum voluptates consequatur neque provident quod assumenda, blanditiis, ducimus officia consequuntur quo dolores? Blanditiis eum quibusdam delectus voluptatum corrupti, qui sed maxime, aut odit voluptates repellendus quisquam voluptas voluptatibus. Debitis perferendis, excepturi doloremque ut esse sapiente nostrum repellat ea, sit consequuntur blanditiis, a fuga veniam perspiciatis sint provident sed. Alias tempora repudiandae dolore obcaecati commodi asperiores dignissimos eveniet, maxime quas libero, necessitatibus, deleniti neque velit dolorum magni. Explicabo, quos temporibus maxime reiciendis doloribus molestiae quidem dignissimos possimus deserunt, ullam laboriosam magni ut dolorem excepturi numquam eveniet blanditiis similique officia.',
       //     'category_id' => 2,
       //     'user_id' => 1
       // ]);
        
       // Post::create([
       //     'title' => 'Judul Ke Empat ',
       //     'slug' => 'judul-ke-empat',
       //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus animi dignissimos laborum voluptates consequatur neque provident quod assumenda, blanditiis, ducimus officia consequuntur quo dolores? Blanditiis eum quibusdam delectus voluptatum corrupti',
       //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus animi dignissimos laborum voluptates consequatur neque provident quod assumenda, blanditiis, ducimus officia consequuntur quo dolores? Blanditiis eum quibusdam delectus voluptatum corrupti, qui sed maxime, aut odit voluptates repellendus quisquam voluptas voluptatibus. Debitis perferendis, excepturi doloremque ut esse sapiente nostrum repellat ea, sit consequuntur blanditiis, a fuga veniam perspiciatis sint provident sed. Alias tempora repudiandae dolore obcaecati commodi asperiores dignissimos eveniet, maxime quas libero, necessitatibus, deleniti neque velit dolorum magni. Explicabo, quos temporibus maxime reiciendis doloribus molestiae quidem dignissimos possimus deserunt, ullam laboriosam magni ut dolorem excepturi numquam eveniet blanditiis similique officia.',
       //     'category_id' => 2,
       //     'user_id' => 2
       // ]);

    }

}

