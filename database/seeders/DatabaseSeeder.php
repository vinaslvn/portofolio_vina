<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Portofolio;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => "",
            'email' => "",
            'password' => "",
        ]);

        Portofolio::factory()->create([
            'judul' => "selpiya",
            'kategori' => "women independent",
            'foto' => "trfsghdhds",
            'deskripsi' => "saya seorang perempuan mandiri",
        ]);
    }
}
