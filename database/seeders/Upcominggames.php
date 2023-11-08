<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Upcominggames extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('upcominggames')->insert([
            'nameUpcoming' => 'GTA VI',
            'upcomingDate' => '2023-09-09',
        ]);

        DB::table('upcominggames')->insert([
            'nameUpcoming' => 'EA FC 24',
            'upcomingDate' => '2023-09-09',
        ]);

    }
}
