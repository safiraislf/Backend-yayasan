<?php

namespace Database\Seeders;
use App\Models\Infaq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InfaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Infaq::create([
            'name'      => 'Safira Indala Sulfa',
            'date'     => '18 Mei 2024',
            'image'     => 'gdsc.png',
            'status'    => 'Yes',

        ]);
    }
}
