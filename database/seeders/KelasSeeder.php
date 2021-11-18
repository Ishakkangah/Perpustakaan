<?php

namespace Database\Seeders;

use App\Models\kelas;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    public function run()
    {
        kelas::Create([
            'nama' => 'Mi 5 weekand',
            'slug' => 'Mi 5 weekand',
        ]);
        kelas::Create([
            'nama' => 'Mi 5 Karyawan',
            'slug' => 'Mi 5 Karyawan',
        ]);
        kelas::Create([
            'nama' => 'Mi 5 Reguller',
            'slug' => 'Mi 5 Reguller',
        ]);
        kelas::Create([
            'nama' => 'Psi 5 Karyawan',
            'slug' => 'Psi 5 Karyawan',
        ]);
        kelas::Create([
            'nama' => 'Psi 5 Reguller',
            'slug' => 'Psi 5 Reguller',
        ]);
    }
}
