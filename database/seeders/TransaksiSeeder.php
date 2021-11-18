<?php

namespace Database\Seeders;

use App\Models\transaksi;
use Illuminate\Database\Seeder;

class TransaksiSeeder extends Seeder
{
    public function run()
    {
        transaksi::create([
            'buku_id' => '1',
            'member_id' => '1',
            'tanggal_pinjam' => '1990-01-01',
            'tanggal_kembali' => '1990-02-01',
            'status_id' => '1',
        ]);
    }
}
