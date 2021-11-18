<?php

namespace Database\Seeders;

use App\Models\status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    public function run()
    {
        status::create([
            'nama' => 'Dipinjam',
            'slug' => 'Dipinjam',
        ]);
        status::create([
            'nama' => 'Sudah Kembali',
            'slug' => 'Sudah Kembali',
        ]);
    }
}
