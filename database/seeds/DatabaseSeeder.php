<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\Product::class, 50)->create()->each(function($p) {
            $p->categories()->attach(factory(App\Category::class)->make());
        });


    }
}
