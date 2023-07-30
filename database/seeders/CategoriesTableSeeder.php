<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * php artisan db:seed --class=CategoriesTableSeeder
     */
    public function run(): void
    {
        $list = [];

        $code = ["K01", "PC02", "H03", "SP04"];

        $types = ["Kitchen", "Personal Care", "Household", "Special Offer"];


        sort($code);
        sort($types);

        for ($i = 1; $i <= count($code); $i++){
            array_push($list, [
                "ctg_code"      => $code[$i - 1],
                "ctg_names"     => $types[$i - 1]
            ]);
        }

        DB::table('categories')->insert($list);
    }
}
