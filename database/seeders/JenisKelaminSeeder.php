<?php

namespace Database\Seeders;

use App\Models\jenis_kelamin;
use Illuminate\Database\Seeder;

class JenisKelaminSeeder extends Seeder
{
    public function run()
    {
        jenis_kelamin::Create([
            'nama' => 'Laki-Laki',
            'slug' => 'Laki-Laki',
        ]);
        jenis_kelamin::Create([
            'nama' => 'Perempuan',
            'slug' => 'Perempuan',
        ]);
    }
}
