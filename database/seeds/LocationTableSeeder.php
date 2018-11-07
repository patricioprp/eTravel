<?php

use Illuminate\Database\Seeder;
use App\Location;

class LocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Location::create([
            'name' 				=>	'San Salvador de Jujuy',
            'province_id'          =>  '1'
        ]);
        Location::create([
            'name' 				=>	'Tilcara',
            'province_id'          =>  '1'
        ]);
        Location::create([
            'name' 				=>	'Cafayate',
            'province_id'          =>  '2'
        ]);
        Location::create([
            'name' 				=>	'Oran',
            'province_id'          =>  '2'
        ]);
    }
}
