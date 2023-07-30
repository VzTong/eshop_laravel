<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CentalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * php artisan db:seed --class=CentalTableSeeder
     */
    public function run(): void
    {
        $list = [];

        $types = ["Kg", "G", "L", "Ml", "Pc"];
        sort($types);


        for ($i = 1; $i <= count($types); $i++) {
            array_push($list, [
                "id"                => $i,
                "centals_name"      => $types[$i - 1]

            ]);
        }
        // DB::table('centals')->insert($list);
        DB::table("centals")->insert($list);
    }
}
