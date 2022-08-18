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
            'text',
            'password',
            'email',
            'tel',

        ];

        foreach ($Types as $Type) {

            DB::table('element_types')->insert([
                'TypeName' => $Type
            ]);
        }
    }
}