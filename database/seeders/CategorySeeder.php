<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'hobby',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
    
        DB::table('categories')->insert([
            'name' => 'cook',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
            
        DB::table('categories')->insert([
            'name' => 'study',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
           
    }
}