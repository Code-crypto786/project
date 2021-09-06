<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
        [
            'name'=>'Sony',
            'price'=>'10,000',
            'category'=>'new',
            'description'=>'Rana Rizwan the phone deller',
            'gallery'=>'C:\xampp\t1.webp',
        ],
        [
            'name'=>'Sony old',
            'price'=>'80,000',
            'category'=>'new',
            'description'=>'Rana Rizwan the phone deller',
            'gallery'=>'C:\xampp\t2.jpg',
        ],
        [
            'name'=>'LG old Model',
            'price'=>'80,000',
            'category'=>'good',
            'description'=>'Rana Rizwan the phone deller',
            'gallery'=>'C:\xampp\t2.jpg',
        ],
        [
            'name'=>'Tissote',
            'price'=>'20000',
            'category'=>'new',
            'description'=>'Rana Rizwan the phone deller',
            'gallery'=>'C:\xampp\w1.jpeg',
        ],
        [
            'name'=>'Titatanic',
            'price'=>'20000',
            'category'=>'new',
            'description'=>'Rana Rizwan the phone deller',
            'gallery'=>'C:\xampp\w2.jpg',
        ]
          
        ]);
    }
}
