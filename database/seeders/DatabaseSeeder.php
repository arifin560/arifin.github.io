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
     */
    public function run()
    {        
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Arifin',
            'username' => 'arifin',
            'email' => 'arif@gmail.com',
            'password' => bcrypt('password')
        ]);
        // User::create([
        //     'name' => 'Dini',
        //     'email' => 'dini@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing'            
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
        //     'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus doloremque nisi saepe eius dolores',
        //     'body' => 'orem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam adipisci pariatur ipsum officiis facere tempora, rem fuga repellendus aliquid, reprehenderit quod quibusdam. Consectetur eos similique alias cum laboriosam unde ullam possimus. Vero, delectus quisquam velit neque eligendi beatae tenetur ullam nam amet qui cupiditate dicta ab eum libero deserunt nesciunt assumenda, perspiciatis commodi soluta molestiae quia! Nisi ducimus voluptatibus explicabo vel laborum hic officiis id laboriosam sunt ipsam. Aliquid labore quis id repellat reprehenderit. Neque autem adipisci, itaque inventore provident animi quasi maiores quo modi nostrum eum ex velit et iure temporibus recusandae mollitia assumenda esse tempora reiciendis atque dolor. Temporibus dicta alias illo ab quae. Neque voluptatem perspiciatis tempora odit nesciunt sit labore expedita dolor repellat, necessitatibus numquam. Nostrum quae eveniet minus sapiente dolorem veritatis, aperiam eos impedit itaque magnam debitis, sed id rerum ex ut voluptates perferendis voluptas deleniti nobis hic. Officiis quidem odio ipsam alias dolorem similique.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus doloremque nisi saepe eius dolores',
        //     'body' => 'orem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam adipisci pariatur ipsum officiis facere tempora, rem fuga repellendus aliquid, reprehenderit quod quibusdam. Consectetur eos similique alias cum laboriosam unde ullam possimus. Vero, delectus quisquam velit neque eligendi beatae tenetur ullam nam amet qui cupiditate dicta ab eum libero deserunt nesciunt assumenda, perspiciatis commodi soluta molestiae quia! Nisi ducimus voluptatibus explicabo vel laborum hic officiis id laboriosam sunt ipsam. Aliquid labore quis id repellat reprehenderit. Neque autem adipisci, itaque inventore provident animi quasi maiores quo modi nostrum eum ex velit et iure temporibus recusandae mollitia assumenda esse tempora reiciendis atque dolor. Temporibus dicta alias illo ab quae. Neque voluptatem perspiciatis tempora odit nesciunt sit labore expedita dolor repellat, necessitatibus numquam. Nostrum quae eveniet minus sapiente dolorem veritatis, aperiam eos impedit itaque magnam debitis, sed id rerum ex ut voluptates perferendis voluptas deleniti nobis hic. Officiis quidem odio ipsam alias dolorem similique.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus doloremque nisi saepe eius dolores',
        //     'body' => 'orem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam adipisci pariatur ipsum officiis facere tempora, rem fuga repellendus aliquid, reprehenderit quod quibusdam. Consectetur eos similique alias cum laboriosam unde ullam possimus. Vero, delectus quisquam velit neque eligendi beatae tenetur ullam nam amet qui cupiditate dicta ab eum libero deserunt nesciunt assumenda, perspiciatis commodi soluta molestiae quia! Nisi ducimus voluptatibus explicabo vel laborum hic officiis id laboriosam sunt ipsam. Aliquid labore quis id repellat reprehenderit. Neque autem adipisci, itaque inventore provident animi quasi maiores quo modi nostrum eum ex velit et iure temporibus recusandae mollitia assumenda esse tempora reiciendis atque dolor. Temporibus dicta alias illo ab quae. Neque voluptatem perspiciatis tempora odit nesciunt sit labore expedita dolor repellat, necessitatibus numquam. Nostrum quae eveniet minus sapiente dolorem veritatis, aperiam eos impedit itaque magnam debitis, sed id rerum ex ut voluptates perferendis voluptas deleniti nobis hic. Officiis quidem odio ipsam alias dolorem similique.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus doloremque nisi saepe eius dolores',
        //     'body' => 'orem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam adipisci pariatur ipsum officiis facere tempora, rem fuga repellendus aliquid, reprehenderit quod quibusdam. Consectetur eos similique alias cum laboriosam unde ullam possimus. Vero, delectus quisquam velit neque eligendi beatae tenetur ullam nam amet qui cupiditate dicta ab eum libero deserunt nesciunt assumenda, perspiciatis commodi soluta molestiae quia! Nisi ducimus voluptatibus explicabo vel laborum hic officiis id laboriosam sunt ipsam. Aliquid labore quis id repellat reprehenderit. Neque autem adipisci, itaque inventore provident animi quasi maiores quo modi nostrum eum ex velit et iure temporibus recusandae mollitia assumenda esse tempora reiciendis atque dolor. Temporibus dicta alias illo ab quae. Neque voluptatem perspiciatis tempora odit nesciunt sit labore expedita dolor repellat, necessitatibus numquam. Nostrum quae eveniet minus sapiente dolorem veritatis, aperiam eos impedit itaque magnam debitis, sed id rerum ex ut voluptates perferendis voluptas deleniti nobis hic. Officiis quidem odio ipsam alias dolorem similique.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
