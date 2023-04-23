<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Nike L1',
            'code' => 'nike_l1',
            'price' => '99.99',
            'description' => 'New collection and new view. This is the first time you will feel "barefoot"',
            'img' => 'img/g1.png',
        ]);
        DB::table('products')->insert([
            'name' => 'Nike Boots',
            'code' => 'asics_boots',
            'price' => '55.99',
            'description' => 'This is not the shoes that you will wear everytime, but every weekend',
            'img' => 'img/g2.png',
        ]);
        DB::table('products')->insert([
            'name' => 'Nike Glance',
            'code' => 'nike_glance',
            'price' => '77.89',
            'description' => 'Nike from new collection. They know what you need!',
            'img' => 'img/g3.png',
        ]);
        DB::table('products')->insert([
            'name' => 'Nike AirMax',
            'code' => 'nike_airmax',
            'price' => '105.99',
            'description' => 'Casual and comfortable as usual. Your Nike forever:)',
            'img' => 'img/g4.png',
        ]);
    }
}
