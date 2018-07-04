<?php

use Illuminate\Database\Seeder;

class DeliverysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('deliverys')->insert([
            [
                'name' => 'Colisimo',
            ],
            [
                'name' => 'Point relais',
            ],
            [
                'name' => 'Relais colis',
            ],
            [
                'name' => 'drone',
            ],
        ]);
    }
}
