<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //databse class
use Illuminate\Support\Facades\Hash; // hash class use for ecncryption

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name'=>'Rana Rizwan',
            'email'=>'RanaIND@gmail.com',
            'password'=>Hash::make('12334')
        ]);
    }
}
