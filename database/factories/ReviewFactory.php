<?php

namespace Database\Factories;

use App\Models\Review;
use App\Models\Supplement;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class ReviewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Review::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = [
            '最高の効果です！',
            'まったく効き目がありません',
            'おすすめです！',
            'お金の無駄です',
            '体感ありませんでした',
        ];

        $description = [
            '国内のマルチビタミン剤と比較して、成分がいずれも多く入っており、しっかりとビタミンを補うことができます。 1粒の大きさが人差し指の第一関節ほどの大きさあり、飲む時は注意が必要です。 体感効果としては、栄養不足解消され、日中のだるさや眠気がほとんどなくなりました。 過去にスポーツ競技の選手がドーピング検査でひっかかったニュースがありましたが、ルール規定で禁止されてるだけであり、一般の方には無関係です。（発ガン物質等人体に害がある成分ではない）',
            '他のメーカーのも飲んでますが、ダントツで溶けやすいです！甘さもくどくなく、おやつ代わりに飲む時は豆乳やアーモンドミルクで飲むと満足感があります。トレ後は水に溶かしてサラッと飲むと丁度いいです。最近は冷凍バナナ、冷凍ベリー、ヨーグルト、豆乳、プロテインでスムージーボウルにして朝食によく食べてます！ほんのりチョコ味でおいしいです！',
            'はじめてのクレアチンなのでカプセルにしようか迷いましたが、結果こちらのパウダータイプにしました。 少しケミカル感がありますが、プロテインと合わせて飲むと問題なく感じます。 続けていくためにはコスパが良いほうがいい気もしますので、おすすめです。'
        ];

        return [
            'title' => $title[array_rand($title)],
            'supplement_id' => Arr::random(Arr::pluck(Supplement::all(), 'id')),
            'score' => rand(1,5),
            'description' => $description[array_rand($description)],
        ];
    }
}
