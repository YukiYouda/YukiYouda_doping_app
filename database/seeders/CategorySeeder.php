<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!DB::table('categories')->first()) {
            DB::table('categories')->insert([
                ['name' => 'プロテイン'],
                ['name' => 'BCAA'],
                ['name' => 'マルチビタミン・ミネラル'],
                ['name' => 'グルタミン'],
                ['name' => 'クレアチン'],
                ['name' => 'フィッシュオイル'],
                ['name' => 'コエンザイムQ10'],
                ['name' => '亜鉛'],
                ['name' => 'プロバイオティクス'],
                ['name' => 'その他'],
            ]);
        }
    }
}
