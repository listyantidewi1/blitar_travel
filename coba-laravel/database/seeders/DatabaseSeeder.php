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

        // User::create([
        //     'name' => 'Sulthan',
        //     'email'=> 'sulthan@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Sabilillah',
        //     'email'=> 'sabilillah@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-progamming'
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
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At tenetur, voluptatibus consectetur.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At tenetur, voluptatibus consectetur laboriosam mollitia impedit natus et atque libero reiciendis odio consequuntur dolorem! Necessitatibus quisquam voluptates consequuntur tempore similique rem magnam repellat totam architecto perspiciatis voluptas, unde, soluta inventore officiis, illo laudantium magni accusamus facilis laborum quo deserunt! Perferendis facere molestias quia doloremque, consequatur architecto corrupti voluptatum eligendi culpa esse velit eius pariatur earum. Sit, exercitationem explicabo ex tempora odio, officiis dolorum debitis rerum ducimus sint iste. Nemo voluptatibus possimus alias, asperiores a unde error vitae in, dolor veritatis sequi quos. Earum labore debitis laboriosam omnis cupiditate non dolores fugit.',
        //     'category_id' => 1,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At tenetur, voluptatibus consectetur.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At tenetur, voluptatibus consectetur laboriosam mollitia impedit natus et atque libero reiciendis odio consequuntur dolorem! Necessitatibus quisquam voluptates consequuntur tempore similique rem magnam repellat totam architecto perspiciatis voluptas, unde, soluta inventore officiis, illo laudantium magni accusamus facilis laborum quo deserunt! Perferendis facere molestias quia doloremque, consequatur architecto corrupti voluptatum eligendi culpa esse velit eius pariatur earum. Sit, exercitationem explicabo ex tempora odio, officiis dolorum debitis rerum ducimus sint iste. Nemo voluptatibus possimus alias, asperiores a unde error vitae in, dolor veritatis sequi quos. Earum labore debitis laboriosam omnis cupiditate non dolores fugit.',
        //     'category_id' => 1,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At tenetur, voluptatibus consectetur.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At tenetur, voluptatibus consectetur laboriosam mollitia impedit natus et atque libero reiciendis odio consequuntur dolorem! Necessitatibus quisquam voluptates consequuntur tempore similique rem magnam repellat totam architecto perspiciatis voluptas, unde, soluta inventore officiis, illo laudantium magni accusamus facilis laborum quo deserunt! Perferendis facere molestias quia doloremque, consequatur architecto corrupti voluptatum eligendi culpa esse velit eius pariatur earum. Sit, exercitationem explicabo ex tempora odio, officiis dolorum debitis rerum ducimus sint iste. Nemo voluptatibus possimus alias, asperiores a unde error vitae in, dolor veritatis sequi quos. Earum labore debitis laboriosam omnis cupiditate non dolores fugit.',
        //     'category_id' => 2,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At tenetur, voluptatibus consectetur.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At tenetur, voluptatibus consectetur laboriosam mollitia impedit natus et atque libero reiciendis odio consequuntur dolorem! Necessitatibus quisquam voluptates consequuntur tempore similique rem magnam repellat totam architecto perspiciatis voluptas, unde, soluta inventore officiis, illo laudantium magni accusamus facilis laborum quo deserunt! Perferendis facere molestias quia doloremque, consequatur architecto corrupti voluptatum eligendi culpa esse velit eius pariatur earum. Sit, exercitationem explicabo ex tempora odio, officiis dolorum debitis rerum ducimus sint iste. Nemo voluptatibus possimus alias, asperiores a unde error vitae in, dolor veritatis sequi quos. Earum labore debitis laboriosam omnis cupiditate non dolores fugit.',
        //     'category_id' => 2,
        //     'user_id' => 2

        // ]);

        //  \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
