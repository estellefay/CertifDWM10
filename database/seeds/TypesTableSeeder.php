<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            [
                'name' => 'Instrument',
            ],
            [
                'name' => 'Lesson',
            ],
            [
                'name' => 'Gift',
            ],
            [
                'name' => 'Accesoire',
            ],
        ]);
    }
}
