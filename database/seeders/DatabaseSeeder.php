<?php

namespace Database\Seeders;

use App\Models\member;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(BukuSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(MemberSeeder::class);
        $this->call(KelasSeeder::class);
        $this->call(JenisKelaminSeeder::class);
        $this->call(BukuSeeder::class);
        $this->call(TransaksiSeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
