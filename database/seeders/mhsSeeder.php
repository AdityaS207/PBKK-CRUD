<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class mhsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i < 10; $i++) {
            $data = [
                'nrp' => 'NRP' . $i,
                'nama' => 'Mahasiswa ke- ' . $i,
                'alamat' => 'ITS',
            ];
            DB::table('mhs')->insert($data);
        }
    }
}
