<?php

namespace Database\Seeders;
use App\Models\Observasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ObservasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Observasi::create([
            'name'      => 'Safira Indala Sulfa',
            'date'     => '18 Mei 2024',
            'status'    => 'Yes',
            'final'    => 'Yes',
        ]);
    }
}
