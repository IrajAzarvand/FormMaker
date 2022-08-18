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
        $Types = [
            'input',
            'label',

        ];

        foreach ($Types as $Type) {

            DB::table('tag_types')->insert([
                'TagName' => $Type
            ]);
        }
    }
}