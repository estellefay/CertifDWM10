<?php

use Illuminate\Database\Seeder;

class Article_DeliveryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('article_delivery')->insert([
            [
                
                'article_id' => 1,
                'delivery_id' => 1,
            ],
            [
                'article_id' => 1,
                'delivery_id' => 2,
            ],
            [
                'article_id' => 1,
                'delivery_id' => 3,
            ],
            [
                'article_id' => 2,
                'delivery_id' => 3,
            ],
            [
                'article_id' => 2,
                'delivery_id' => 2,
            ],
            [
                'article_id' => 2,
                'delivery_id' => 3,
            ],
            [
                'article_id' => 3,
                'delivery_id' => 1,
            ],
            [
                'article_id' => 3,
                'delivery_id' => 2,
            ],
            [
                'article_id' => 3,
                'delivery_id' => 3,
            ],
            [
                'article_id' => 3,
                'delivery_id' => 4,
            ],
            [
                'article_id' => 4,
                'delivery_id' => 4,
            ],
            [
                'article_id' => 5,
                'delivery_id' => 4,
            ],
            [
                'article_id' => 5,
                'delivery_id' => 2,
            ], 
        ]);
    }
}
