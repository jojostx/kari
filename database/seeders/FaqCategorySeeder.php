<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $timestamps = [
            'created_at' => \now(),
            'updated_at' => \now(),
        ];

        $category = [
            [
                'name' => "General",
            ],
            [
                'name' => "Investment plans",
            ],
            [
                'name' => "kari's policies and reporting",
            ],
            [
                'name' => "Profile and Account",
            ],
        ];

        $data = [];

        foreach ($category as $item) {
            $data[] = \array_merge($item, $timestamps);
        }

        DB::table('faq_categories')->insert($data);
    }
}
