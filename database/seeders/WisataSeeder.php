<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Wisata;

class WisataSeeder extends Seeder
{
    public function run(): void
    {
        Wisata::create([
            'nama' => 'Pantai Sanur',
            'alamat' => 'Sanur, Denpasar',
            'lat' => -8.6910,
            'lng' => 115.2644,
            'kategori' => 'alam',
        ]);

        Wisata::create([
            'nama' => 'Pura Besakih',
            'alamat' => 'Karangasem',
            'lat' => -8.3599,
            'lng' => 115.4524,
            'kategori' => 'budaya',
        ]);

        Wisata::create([
            'nama' => 'Tegallalang Rice Terrace',
            'alamat' => 'Tegallalang, Gianyar',
            'lat' => -8.4290,
            'lng' => 115.2796,
            'kategori' => 'alam',
        ]);

        Wisata::create([
            'nama' => 'Museum Bali',
            'alamat' => 'Denpasar',
            'lat' => -8.6595,
            'lng' => 115.2168,
            'kategori' => 'sejarah',
        ]);

        Wisata::create([
            'nama' => 'Pantai Kuta',
            'alamat' => 'Kuta, Badung',
            'lat' => -8.7189,
            'lng' => 115.1686,
            'kategori' => 'alam',
        ]);
    }
}
