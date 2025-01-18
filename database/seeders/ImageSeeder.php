<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            [
                'owner_id' => 1,
                'filename' => 'fine_gold.png',
                'title' => null
            ],
            [
                'owner_id' => 1,
                'filename' => 'gold_fand.png',
                'title' => null
            ],
            [
                'owner_id' => 1,
                'filename' => 'ishares_gold.png',
                'title' => null
            ],
            [
                'owner_id' => 1,
                'filename' => 'nissay_gold.png',
                'title' => null
            ],
            [
                'owner_id' => 1,
                'filename' => 'picte_gold.png',
                'title' => null
            ],
            [
                'owner_id' => 1,
                'filename' => 'sbi_ishares_gold.png',
                'title' => null
            ]]);
    }
}