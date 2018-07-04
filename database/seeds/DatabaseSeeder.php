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
        $this->call(ArticlesTableSeeder::class);
        $this->call(TypesTableSeeder::class);
        $this->call(DeliverysTableSeeder::class);
        $this->call(Article_DeliveryTableSeeder::class);
    }
}
