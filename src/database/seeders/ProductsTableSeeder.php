<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{

    public function run()
    {
        
        $fruits = [
            [
                'name' => 'キウイ',
                'price' => 800,
                'image' => 'images/kiwi.png',
                'description' => 'キウイは甘みと酸味のバランスが絶妙なフルーツです。ビタミンCなどの栄養素も豊富のため、美肌効果や疲労回復効果も期待できます。',
            ],



            [
                'name' => 'ストロベリー',
                'price' => 1200,
                'image' => 'images/strawberry.png',
                'description' => '大人から子供まで大人気のストロベリー。当店では鮮度抜群の完熟いちごを使用しています。',
            ],
          
            [
                'name' => 'オレンジ',
                'price' => 850,
                'image' => 'images/orange.png',
                'description' => '酸味と甘みのバランスが抜群のネーブルオレンジを使用しています。',
            ],
         
            [
                'name' => 'グレープ',
                'price' => 1100,
                'image' => 'images/grapes.png',
                'description' => '高い糖度と適度な酸味が魅力の巨峰を使用しています。',
            ],
           
            [
                'name' => 'ピーチ',
                'price' => 1000,
                'image' => 'images/peach.png',
                'description' => '豊潤な香りととろけるような甘さが魅力のピーチです。',
            ],
          
            [
                'name' => 'シャインマスカット',
                'price' => 1400,
                'image' => 'images/muscat.png',
                'description' => '爽やかな香りと上品な甘みが特長的なシャインマスカットです。',
            ],
          
            [
                'name' => 'パイナップル',
                'price' => 800,
                'image' => 'images/pineapple.png',
                'description' => '甘酸っぱさとトロピカルな香りが特徴のパイナップルです。',
            ],
        
            [
                'name' => 'バナナ',
                'price' => 600,
                'image' => 'images/banana.png',
                'description' => '低カロリーでありながら栄養満点のバナナです。',
            ],
          
            [
                'name' => 'メロン',
                'price' => 900,
                'image' => 'images/melon.png',
                'description' => '香りがよくジューシーで品のある甘さが人気のメロンです。',
            ],
         
            [
                'name' => 'スイカ',
                'price' => 700,
                'image' => 'images/watermelon.png',
                'description' => '甘くてシャリシャリ食感が魅力のスイカです。',
            ],
        ];
            DB::table('products')->insert($fruits);
       


    }
}


