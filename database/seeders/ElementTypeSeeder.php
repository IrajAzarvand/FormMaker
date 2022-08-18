<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ElementTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Types = [
            '1' => [
                'text',
                'password',
                'email',
                'tel',
            ],


        ];

        foreach ($Types as $tag => $Types) {
            foreach ($Types as $Type) {
                DB::table('element_types')->insert([
                    'tag_type_id' => $tag,
                    'TypeName' => $Type,
                ]);
            }
        }
    }
}