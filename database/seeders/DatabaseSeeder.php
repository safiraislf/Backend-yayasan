<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Observasi::factory(3)->create();

        \App\Models\Observasi::factory()->create([
            'name'      => 'Safira Indala Sulfa',
            'date'     => '18 Mei 2024',
            'status'    => 'Yes',
            'hasil'     => 'null',
            'final'    => 'Yes',
        ]);

        // $this->call([InfaqSeeder::class, UsersiswaSeeder::class, ]);
    }
}
