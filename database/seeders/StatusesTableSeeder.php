<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * php artisan db:seed --class=StatusesTableSeeder
     */
    public function run(): void
    {
        $list = [];

        $types = [
            "wait for confirmation",
            "Order confirmation",
            "Freight",
            "Delivered",
            "Cancelled"
        ];
        sort($types);

        for($i = 1; $i <= count($types); $i++){
            array_push($list, [
                "id"            => $i,
                "status_name"   => $types[$i - 1]
            ]);
        }
        DB::table("statuses")->insert($list);
    }
}
