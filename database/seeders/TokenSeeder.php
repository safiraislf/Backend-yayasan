<?php

namespace Database\Seeders;
use App\Models\Token;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Token::create([
            'name'      => 'Safira Indala Sulfa',
            'date'     => '18 Mei 2024',
            'status' => 'Yes',

        ]);
    }
}
