<?php

namespace Database\Factories;

use App\Models\buku;
use Illuminate\Database\Eloquent\Factories\Factory;

class BukuFactory extends Factory
{
    protected $model = buku::class;

    public function definition()
    {
        return [
            'judul' => $this->faker->title(),
            'slug' => $this->faker->title(),
            'pengarang' => $this->faker->name(),
            'tahun_penerbit' => $this->faker->year(),
            'penerbit' => $this->faker->company(),
            'ISBN' => rand(1,9),
            'category_id' => rand(1,4),
            'jumlah_buku' => rand(1,10),
            'lokasi' => $this->faker->address(),
            'asal_buku' => $this->faker->city(),
            'jumlah_buku_per_rak' => rand(1,5),
            'tanggal_input' => $this->faker->date(),
            'thumbnail' => $this->faker->image(),
        ];
    }
}
