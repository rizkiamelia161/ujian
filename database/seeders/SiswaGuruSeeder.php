<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB as siswaguru;

class SiswaGuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        siswaguru::table('guru_siswas')->insert([
            "siswa_id" => 1,
            "guru_id" => 1,
            "pelanggaran_id" => 1
        ]);
    }
}
