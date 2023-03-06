<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();

        DB::table('products')->insert([
            'items'          =>  'Iphone 12',
            'price'       =>  '$999',
            'details'          =>  '256gb'
        ]);

        DB::table('products')->insert([
            'items'          =>  'Iphone 13r',
            'price'       =>  '$1001',
            'details'          =>  '512gb'
        ]);

        DB::table('products')->insert([
            'items'          =>  'Iphone 114',
            'price'       =>  '$1049',
            'details'          =>  '1tb'
            
            
        ]);
    }
}
