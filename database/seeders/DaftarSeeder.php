<?php

namespace Database\Seeders;

use App\Models\Daftar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DaftarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Daftar::create([
            'name'          => 'Safira',
            'parents'       => 'Agus',
            'gender'        =>'Perempuan',
            'lahir'         =>'Surabaya, 19 maret 2002',
            'jenjang'       =>'TC',
            'alamat'        => 'Jalan raya made',
            'telepon'        =>'089273910',
            'berkas'        =>'gdsc.pdf',
        ]);
    }
}
