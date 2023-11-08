<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Newrelease extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('newrelease')->insert([
            'naamGame' => 'Diablo IV',
            'releaseDate' => '2023-09-09',
        ]);

        DB::table('newrelease')->insert([
            'naamGame' => 'Starfield',
            'releaseDate' => '2023-09-09',
        ]);

        DB::table('newrelease')->insert([
            'naamGame' => 'Minecraft Update',
            'releaseDate' => '2023-09-09',
        ]);
    }
}
