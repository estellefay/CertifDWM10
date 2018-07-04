<?php

use Illuminate\Database\Seeder;

class DeliveriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('deliveries')->insert([
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
