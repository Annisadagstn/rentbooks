<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Schema::disableForeignKeyConstraints();
        // Role::truncate();
        // Schema::enableForeignKeyConstraints();

        // $data = [
        //     'admin', 'client'
        // ];

        // foreach($data as $value)
        // {     
        //     Role::insert([
        //         'name' => $value,
        //     ]);
           
        // }
        DB::table('users')->insert([
            [
                'name' => 'nisa',
                'email' => 'nisa@gmail.com',
                'phone' => '083897217292',
                'address' => 'tajur',
                'password' => Hash::make('nisa123'),
                'role_id' => 1,
            ],
            [
                'name' => 'diva',
                'email' => 'diva@gmail.com',
                'phone' => '083897217292',
                'address' => 'bogor',
                'password' => Hash::make('diva123'),
                'role_id' => 2,
            ]
        ]);
    }
}
