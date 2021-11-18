<?php

namespace Database\Seeders;

use App\Models\buku;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    public function run()
    {
        buku::create([
            'judul' => 'Apa Yang Steve Jobs Lakukan Ketika Kita Tidur?',
            'slug' => 'Apa Yang Steve Jobs Lakukan Ketika Kita Tidur?',
            'pengarang' => 'Riana Lyn',
            'tahun_penerbit' => '2020',
            'penerbit' => 'Airlangga',
            'ISBN' => '9786232441774',
            'category_id' => 'Pengembangan Diri',
            'jumlah_buku' => '10',
            'lokasi' => 'rak 4',
            'asal_buku' => 'Membeli dari PT.Swalika indonesia',
            'jumlah_buku_per_rak' => '4',
            'tanggal_input' => '1999-01-01',
            'thumbnail' => '',
        ]);
    }
}
