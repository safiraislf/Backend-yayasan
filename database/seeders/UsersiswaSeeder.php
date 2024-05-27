<?php

namespace Database\Seeders;

use App\Models\Usersiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Usersiswa::create([
            'name'      => 'Safira Indala Sulfa',
            'email'     => 'safiraindala3@gmail.com',
            'password'  => Hash::make('123456'),
        ]);
    }
}
