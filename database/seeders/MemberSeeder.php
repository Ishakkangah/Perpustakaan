<?php

namespace Database\Seeders;

use App\Models\member;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        member::create([
            'nama' => 'Admin',
            'slug' => 'Admin',
            'nim' => '1911007',
            'jenis_kelamin_id' => '1',
            'kelas_id' => '1',
            'tempat_tanggal_lahir' => "Palembang, 18 Desembaer 2004",
            'alamat' => 'Jl.Sudirman No.888 Palembang',
            'thumbnail' => '',
        ]);
    }
}
