<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HariSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = now();

        $days = [
            ['id' => 1, 'nama_hari' => 'Senin'],
            ['id' => 2, 'nama_hari' => 'Selasa'],
            ['id' => 3, 'nama_hari' => 'Rabu'],
            ['id' => 4, 'nama_hari' => 'Kamis'],
            ['id' => 5, 'nama_hari' => "Jum'at"],
        ];

        foreach ($days as $day) {
            DB::table('hari')->updateOrInsert(
                ['id' => $day['id']],
                [
                    'nama_hari' => $day['nama_hari'],
                    'created_at' => $now,
                    'updated_at' => $now,
                ]
            );
        }
    }
}
