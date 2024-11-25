<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array = [
            ['nama' => 'utama'],
            ['nama' => 'kedua'],
            ['nama' => 'ketiga'],

        ];
        Kategori::insert($array);
    }
}
