<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert
        [
                'name' => 'キウイ',
                'path' => 'images/kiwi.png',
               
        ],

        DB::table('images')->insert
        [
                'name' => 'ストロベリー',
                'path' => 'images/strawberry.png',
              
        ],

        DB::table('images')->insert
        [
                'name' => 'オレンジ'
                'path' => 'images/orange.png'
               
        ],

        DB::table('images')->insert
        [
                'name' => 'グレープ'
                'path' => 'images/grapes.png'
               
        ],

        DB::table('images')->insert
        [
                'name' => 'ピーチ'
                'path' => 'images/peach.png'
               
        ],

        DB::table('images')->insert
        [
                'name' => 'シャインマスカット'
                'path' => 'images/muscat.png'
               
        ],

        DB::table('images')->insert
        [
                'name' => 'パイナップル'
                'path' => 'images/pineapple.png'
                
        ],

        DB::table('images')->insert
        [
                'name' => 'バナナ'
                'path' => 'images/banana.png'
               
        ],

        DB::table('images')->insert
        [
                'name' => 'メロン'
                'path' => 'images/melon.png'
                
        ],

        DB::table('images')->insert
        [
                'name' => 'スイカ'
                'path' => 'images/watermelon.png'
             
        ],


    }
}
