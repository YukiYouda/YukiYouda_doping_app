<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('supplements')->insert([
            [
                'name' => 'Optimum Nutrition, Gold Standard 100% Whey',
                'price' => 8155,
                'volume' => '2.27kg',
                'description' => '1回分に高品質タンパク質を24g配合し、筋肉を力強くサポート、
                炭水化物と脂肪分をできるだけ除去したホエイタンパク質分離物（WPI）が主成分、
                トレーニング後のフォローに注力したい方に、天然由来の必須アミノ酸（EAA）11gを含有、
                1988年以来世界中で20億個を売り上げた、高品質タンパク質のGold Standard®（ゴールドスタンダード）',
                'img_path' => ,
                'category_id' => 1,
            ],
            [
                'name' => 'Optimum Nutrition, Gold Standard 100% Whey',
                'price' => 8155,
                'volume' => '2.27kg',
                'description' => '1回分に高品質タンパク質を24g配合し、筋肉を力強くサポート、
                炭水化物と脂肪分をできるだけ除去したホエイタンパク質分離物（WPI）が主成分、
                トレーニング後のフォローに注力したい方に、天然由来の必須アミノ酸（EAA）11gを含有、
                1988年以来世界中で20億個を売り上げた、高品質タンパク質のGold Standard®（ゴールドスタンダード）',
                'img_path' => ,
                'category_id' => 1,
            ],
            
        ]);
    }
}
