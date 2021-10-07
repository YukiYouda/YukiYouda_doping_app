<?php

namespace Database\Factories;

use App\Models\Supplement;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class SupplementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Supplement::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->word();
        $volume = ['1kg', '2kg', '500g', '250g', '100g'];
        $description = [
            'このソフトジェルに使用されている天然フィッシュオイル濃縮物は、厳格な品質管理基準の下で製造されています。有害となりうるレベルの汚染物質（水銀、重金属、PCB、ダイオキシン、その他の汚染物質）が含まれていないことを検査済みです。他のフィッシュオイルで気分が悪くなったことがある方にも、臭いを抑えた腸溶コーティングソフトジェルなら飲みやすいので、おすすめです。',
            'OPTIMUM NUTRITION®（オプティマムニュートリション）は、ワークアウト前後に適したエネルギーサプリの分野で、極めて高品質の製品を販売して信頼を得てきました。各原料は、卓越した純度、品質、成分を確認するための検査が実施されています。当社の製品は厳格な製造基準に従って製造されており、身体に秘められた力を十分に発揮できるようサポートします。',
            'Vitamin Code®（ビタミンコード）キッズは、遺伝子組み換え原料不使用の子ども用マルチビタミンです。活発な成長期のお子様をサポートする、自然食品由来のビタミンとミネラルが含まれています。有機栽培された26種類の果物と野菜が、体の還元サポート物質、ビタミン、栄養補助因子を届けます。'
        ];

        return [
            'name' => $name,
            'price' => rand(1000, 20000),
            'volume' => $volume[array_rand($volume)],
            'description' => $description[array_rand($description)],
            'img_path' => 'storage/supplement_image/' . rand(1,15) . '.jpg',
            'category_id' => Arr::random(Arr::pluck(Category::all(), 'id')),
        ];
    }
}
