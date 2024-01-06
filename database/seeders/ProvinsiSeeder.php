<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('provinsi')->insert([
            ['name' => 'Aceh'],
            ['name' => 'Sumatera Utara'],
            ['name' => 'Sumatera Barat'],
            ['name' => 'Sumatera Selatan'],
            ['name' => 'Riau'],
            ['name' => 'Kepulauan Riau'],
            ['name' => 'Jambi'],
            ['name' => 'Bengkulu'],
            ['name' => 'Bangka Belitung'],
            ['name' => 'Lampung'],
            ['name' => 'Banten'],
            ['name' => 'Jawa Barat'],
            ['name' => 'Jawa Tengah'],
            ['name' => 'Jawa Timur'],
            ['name' => 'DKI Jakarta'],
            ['name' => 'DIY Yogyakarta'],
            ['name' => 'Bali'],
            ['name' => 'Nusa Tenggara Barat (NTB)'],
            ['name' => 'Nusa Tenggara Timur (NTT)'],
            ['name' => 'Kalimantan Barat (Kalbar)'],
            ['name' => 'Kalimantan Selatan (Kalsel)'],
            ['name' => 'Kalimantan Tengah (Kalteng)'],
            ['name' => 'Kalimantan Timur (Kaltim)'],
            ['name' => 'Kalimantan Utara (Kaltara)'],
            ['name' => 'Gorontalo'],
            ['name' => 'Sulawesi Selatan (Sulsel)'],
            ['name' => 'Sulawesi Tenggara (Sultra)'],
            ['name' => 'Sulawesi Tengah (Sulteng)'],
            ['name' => 'Sulawesi Utara (Sulut)'],
            ['name' => 'Sulawesi Barat (Sulbar)'],
            ['name' => 'Maluku'],
            ['name' => 'Maluku Utara'],
            ['name' => 'Papua'],
            ['name' => 'Papua Barat'],
        ]);
    }
}