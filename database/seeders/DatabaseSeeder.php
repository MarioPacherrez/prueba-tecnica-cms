<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Article;
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
        // \App\Models\User::factory(10)->create();

        //$users = User::factory(10)

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            /*Article::factory(10)->create([
                'title' => fake()->text(50),
                'content' => fake()->paragraph(100),
                'status' => 'Despublicado',
                'slug' => fake()->slug
            ])->each(function ($article) use ($users) {
                $article->users()->attach($users->random(2));
            })*/
        ]);
        //Article::factory(10)->create();
    }
}
