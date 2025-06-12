<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SectionSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('sections')->insert([
            [
                'title' => 'Beranda',
                'slug' => 'home',
                'content' => 'PT. Griya Damai Kita menyediakan jasa sewa Toyota HIACE COMMUTER 15 seats dan PREMIO 9 seats eksekutif di Jakarta. Armada kami dilengkapi dengan izin resmi dari Kementerian Perhubungan RI.',
                'images' => json_encode([
                    'images/isuzu_elf.jpg',
                    'images/toyota_hiace.jpg'
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Cara Pemesanan',
                'slug' => 'cara-pemesanan',
                'content' => '1. Hubungi kami dengan informasi lengkap penjemputan. 2. Jangan reservasi melalui sopir. 3. Transfer DP ke rekening BCA. 4. Sisa dibayar tunai. 5. DP tidak dapat dikembalikan. 6. Tidak melayani pengiriman tanpa penanggung jawab.',
                'images' => json_encode([
                    'images/qris.jpg'
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Reservasi 24 Jam',
                'slug' => 'contact',
                'content' => 'HP: 081398697123 (Telp, WA, SMS) Email: griyadamaikita@gmail.com',
                'images' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Kantor',
                'slug' => 'office',
                'content' => 'Apartemen Taman Rasuna Tower 14 Lantai 4 G01 R(01), Jl. HR Rasuna Said – Kuningan, Jakarta Selatan',
                'images' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Galeri',
                'slug' => 'galery',
                'content' => 'Galeri kendaraan Hiace kami untuk kebutuhan Anda.',
                'images' => json_encode([
                    'images/hiace_1.jpg',
                    'images/hiace_2.jpg',
                    'images/hiace_3.jpg',
                    'images/hiace_4.jpg',
                    'images/hiace_5.jpg',
                    'images/hiace_6.jpg',
                    'images/hiace_7.jpg',
                    'images/hiace_8.jpg',
                    'images/hiace_9.jpg',
                    'images/hiace_10.jpg',
                    'images/hiace_11.jpg',
                    'images/hiace_12.jpg',
                    'images/hiace_13.jpg',
                    'images/hiace_14.jpg',
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
