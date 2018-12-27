<?php

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
        // $this->call(UsersTableSeeder::class);
        factory(App\Model\category::class,10)->create();
        factory(App\Model\Product::class,50)->create();
        // factory(App\Model\party::class,50)->create();
        factory(App\Model\party::class,50)->create();
    }
}
