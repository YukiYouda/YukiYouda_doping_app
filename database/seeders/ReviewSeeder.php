<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
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
                'title' => '効果バツグンでした！',
                'supplement_id' => 1,
                'score' => 4,
                'description' => 'ずっと気になっていたので購入しました。 溶けやすく味も美味しいです。 量も多くコスパもいいので、なくなり次第また購入します。他の味も気になるな。。。'
            ],
        ]);
    }
}
