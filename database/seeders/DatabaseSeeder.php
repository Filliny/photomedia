<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Menu;
use App\Models\Tag;
use App\Models\User;
use Database\Factories\TagFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Contact::factory()->create([
            'phone' => '+3808001234567',
            'address' => "84000 Kiev Russian Battleship st. 15",
            'email' => 'example@company.mail',
            'facebook'=>'https://www.facebook.com/',
            'twitter'=>'https://twitter.com',
            'instagram'=>'https://instagram.com'

        ]);

         User::factory()->create([
             'name' => 'root',
             'email' => 'test@example.com',
             'password' => Hash::make('root'),
             'role' => 'admin'
         ]);

        User::factory()->create([
            'name' => 'user',
            'email' => 'user@example.com',
            'password' => Hash::make('user'),
            'role'=>'user'
        ]);

        Menu::factory()->create([
            'name'=>'Home',
            'link'=>'/',
            'route'=>'index'
        ]);
        Menu::factory()->create([
            'name'=>'Category',
            'link'=>'/category',
            'route'=>'category'
        ]);
        Menu::factory()->create([
            'name'=>'About',
            'link'=>'/about',
            'route'=>'about'
        ]);
        Menu::factory()->create([
            'name'=>'Pages',
            'link'=>'/pages',
            'route'=>'pages'
        ]);
        Menu::factory()->create([
            'name'=>'Contact',
            'link'=>'/contact',
            'route'=>'contact'
        ]);
        Menu::factory()->create([
            'name'=>'Elements',
            'link'=>'/pages/elements',
            'route'=>'elements',
            'menu_id'=>'4'
        ]);
        Menu::factory()->create([
            'name'=>'Single-Blog',
            'link'=>'/pages/single-blog',
            'route'=>'singleblog',
            'menu_id'=>'4'
        ]);

        Tag::factory()->create([
            'name'=>'Camera'
        ]);

        Tag::factory()->create([
            'name'=>'Photography'
        ]);

        Tag::factory()->create([
            'name'=>'Lens'
        ]);

        Tag::factory()->create([
            'name'=>'Blog'
        ]);
        Tag::factory()->create([
            'name'=>'Magazine'
        ]);
        Tag::factory()->create([
            'name'=>'Travelling'
        ]);

        Category::factory()->create([
            'name'=>'Camera',
            'image'=>'/storage/img/photography/single-1.jpg'
        ]);

        Category::factory()->create([
            'name'=>'Photography',
            'image'=>'/storage/img/photography/single-2.jpg'
        ]);

        Category::factory()->create([
            'name'=>'Lens',
            'image'=>'/storage/img/photography/single-4.jpg'
        ]);

        Category::factory()->create([
            'name'=>'Blog',
            'image'=>'/storage/img/photography/2.jpg'
        ]);
        Category::factory()->create([
            'name'=>'Magazine',
            'image'=>'/storage/img/most_recent/1.jpg'
        ]);
        Category::factory()->create([
            'name'=>'Travelling',
            'image'=>'/storage/img/photography/1.jpg'
        ]);

        Category::factory()->create([
            'name'=>'Photoshop',
            'image'=>'/storage/img/elements/g5.jpg'
        ]);

    }
}
