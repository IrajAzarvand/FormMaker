<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TagTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Tags = [
            'input',
            'label',

        ];

        foreach ($Tags as $Tag) {

            DB::table('tag_types')->insert([
                'TagName' => $Tag
            ]);
        }
    }
}