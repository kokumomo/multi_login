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
        DB::table('primary_categories')->insert([
            [
                'name' => '投資信託',
                'sort_order' => 1,
            ],
            [
                'name' => 'ETF',
                'sort_order' => 2,
            ],
            [
                'name' => 'ゴールド',
                'sort_order' => 3,
            ],
        ]);

        DB::table('secondary_categories')->insert([
            [
                'name' => '三菱ＵＦＪ－ｅＭＡＸＩＳ Ｓｌｉｍ 全世界株式（オール・カントリー）',
                'sort_order' => 1,
                'primary_category_id' => 1
            ],
            [
                'name' => '三菱ＵＦＪ－ｅＭＡＸＩＳ　Ｓｌｉｍ　米国株式（Ｓ＆Ｐ５００）',
                'sort_order' => 2,
                'primary_category_id' => 1
            ],
            [
                'name' => '大和－ｉＦｒｅｅＮＥＸＴ　ＦＡＮＧ＋インデックス',
                'sort_order' => 3,
                'primary_category_id' => 1
            ],
            [
                'name' => 'VOO',
                'sort_order' => 4,
                'primary_category_id' => 2
            ],
            [
                'name' => 'QQQ',
                'sort_order' => 5,
                'primary_category_id' => 2
            ],
            [
                'name' => 'SPY',
                'sort_order' => 6,
                'primary_category_id' => 2
            ],
            [
                'name' => 'ＮＥＸＴ ＦＵＮＤＳ 金価格連動型上場投信',
                'sort_order' => 7,
                'primary_category_id' => 3
            ],
            [
                'name' => 'SPDR®ゴールド・シェア',
                'sort_order' => 8,
                'primary_category_id' => 3
            ],
            [
                'name' => 'WisdomTree',
                'sort_order' => 9,
                'primary_category_id' => 3
            ],
            [
                'name' => '純金上場信託（現物国内保管型）',
                'sort_order' => 10,
                'primary_category_id' => 3
            ],
            [
                'name' => 'iシェアーズ　ゴールド ETF',
                'sort_order' => 11,
                'primary_category_id' => 3
            ],
            
        ]);
    }
}
