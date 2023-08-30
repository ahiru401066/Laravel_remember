<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => '命名の心得',
            'body' => '命名はデータを基準に考える',
            'image' => 'image_url1',
            'category_id' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
            
        DB::table('posts')->insert([
            'title' => '今夜はいい日',
            'body' => '天気が良かった',
            'image' => 'image_url2',
            'category_id' => 2,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
            
        DB::table('posts')->insert([
            'title' => '身体の調子がいい',
            'body' => '昨日早く寝たのが良かったのかな',
            'image' => 'image_url2',
            'category_id' => 2,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
            
    }
}