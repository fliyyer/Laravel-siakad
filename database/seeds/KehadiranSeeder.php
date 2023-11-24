<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KehadiranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = now();

        $kehadiranData = [
            ['id' => 1, 'ket' => 'Hadir', 'color' => '3C0'],
            ['id' => 2, 'ket' => 'Izin', 'color' => '0CF'],
            ['id' => 3, 'ket' => 'Bertugas Keluar', 'color' => 'F90'],
            ['id' => 4, 'ket' => 'Sakit', 'color' => 'FF0'],
            ['id' => 5, 'ket' => 'Terlambat', 'color' => '7F0'],
            ['id' => 6, 'ket' => 'Tanpa Keterangan', 'color' => 'F00'],
        ];

        foreach ($kehadiranData as $data) {
            DB::table('kehadiran')->updateOrInsert(
                ['id' => $data['id']],
                [
                    'ket' => $data['ket'],
                    'color' => $data['color'],
                    'created_at' => $now,
                    'updated_at' => $now,
                ]
            );
        }

        // Insert pengumuman
        DB::table('pengumuman')->insert([
            'id' => 2,  // Choose a different id value, for example, 2
            'opsi' => 'pengumuman',
            'isi' => 'pengumuman',
            'created_at' => $now,
            'updated_at' => $now,
        ]);
    }
}
