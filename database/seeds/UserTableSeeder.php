<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create(
            [
                'name' => 'Patricio',
                'apellido' => 'Polito',
                'email' => 'patricioprp06@gmail.com',
                'password' => bcrypt('32460264'),
            ]
    );
    App\User::create(
        [
            'name' => 'Melissa',
            'apellido' => 'Paccaossi',
            'email' => 'melissa06@gmail.com',
            'password' => bcrypt('melissa'),
        ]
    );
    App\User::create(
        [
            'name' => 'Lucas',
            'apellido' => 'Ranalletta',
            'email' => 'lucas@gmail.com',
            'password' => bcrypt('lucas'),
        ]
    );
    App\User::create(
        [
            'name' => 'Nancy',
            'apellido' => 'Guaranca',
            'email' => 'nancy@gmail.com',
            'password' => bcrypt('nancy'),
        ]
    );
    }
}
