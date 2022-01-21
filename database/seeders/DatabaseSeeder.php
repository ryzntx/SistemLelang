<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Level;
use App\Models\User;

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
        $roles = [

            [
                'level' => 'Admin'
            ],
            [
                'level' => 'Petugas'
            ]

        ];
        foreach ($roles as $rl => $rls){
            Level::create($rls);
        }

        $users = [
            [
                'name' => 'Atha Nabil',
                'username' => 'ryzntx',
                'email' => 'thalalatha13@gmail.com',
                'id_level' => '1',
                'password' => bcrypt('coolhand021'),
            ],
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@admin.com',
                'id_level' => '2',
                'password' => bcrypt('123456'),
            ],
        ];
        foreach ($users as $key => $value) {
            User::create($value);
        }
    }
}
