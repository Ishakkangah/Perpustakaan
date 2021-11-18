<?php

namespace Database\Seeders;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $date = Carbon::now('Asia/Jakarta');
        Category::create([
            'nama_category' => 'Dongeng',
            'slug' => 'Dongeng',
            'deskripsi' => 'Novel adalah bentuk sastra lama yang menceritakan mengenai suatu peristiwa atau kejadian yang luar biasa berupa fiksi (tidak nyata) atau khayalan.',
            'created_by' => $date,
        ]);
        Category::create([
            'nama_category' => 'Komic',
            'slug' => 'komic',
            'deskripsi' => 'omik adalah cerita bergambar yang disusun dari gambar-gambar tidak bergerak sehingga membentuk suatu cerita yang mudah dipahami.',
            'created_by' => $date,
        ]);
        Category::create([
            'nama_category' => 'Sejarah',
            'slug' => 'Sejarah',
            'deskripsi' => ' Buku Buku adalah kumpulan kertas atau bahan lainnya yang dijilid menjadi satu pada salah satu ujungnya dan berisi tulisan atau gambar.',
            'created_by' => $date,
        ]);
        Category::create([
            'nama_category' => 'Novel',
            'slug' => 'Novel',
            'deskripsi' => 'Novel adalah salah satu jenis karya sastra yang berbentuk prosa. Kisah di dalam novel merupakan hasil karya imajinasi yang membahas tentang permasalahan kehidupan seseorang atau berbagai tokoh.',
            'created_by' => $date,
        ]);
    }
}
