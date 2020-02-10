<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Article;
use App\Category;
use App\Comment;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 5)->create();
        factory(Category::class, 10)->create();
        factory(Article::class, 100)->create();
        factory(Comment::class, 500)->create();
    }
}
