<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class CampaignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('campaigns')->insert([
            [
                'id' => 1,
                'image' => '/asset/photo1.png',
                'name' => 'Bantu Siswa SDN01',
                'startDate' => Carbon::parse('2021-01-01'),
                'endDate' => Carbon::parse('2021-03-01'),
                'desc' => 'Donasikan ponsel bekasmu untuk membantu para siswa SDN01 Bekasi belajar online!',
                'spesifikasi' => 'Sistem Operasi: min. Android Kit Kat (4.4) || RAM: min. 2GB || Memori: min. 8GB',
                'penerima' => 'Muhammad Hussein Shibab',
                'qty' => 15,
                'creator' => 'John Doe'
            ],
            [
                'id' => 2,
                'image' => '/asset/photo1.png',
                'name' => 'Bantu Siswa SMPN01',
                'startDate' => Carbon::parse('2021-02-01'),
                'endDate' => Carbon::parse('2021-04-01'),
                'desc' => 'Donasikan ponsel bekasmu untuk membantu para siswa SMPN01 Bekasi belajar online!',
                'spesifikasi' => 'Sistem Operasi: min. Android Kit Kat (4.4) || RAM: min. 4GB || Memori: min. 16GB',
                'penerima' => 'Siti Fatonah',
                'qty' => 35,
                'creator' => 'John Doe'
            ],
            [
                'id' => 3,
                'image' => '/asset/photo1.png',
                'name' => 'Bantu Siswa SMAN01',
                'startDate' => Carbon::parse('2021-03-01'),
                'endDate' => Carbon::parse('2021-05-01'),
                'desc' => 'Donasikan ponsel bekasmu untuk membantu para siswa SMAN01 Bekasi belajar online!',
                'spesifikasi' => 'Sistem Operasi: min. Android Kit Kat (4.4) || RAM: min. 4GB || Memori: min. 32GB',
                'penerima' => 'Nurdin Suroji',
                'qty' => 50,
                'creator' => 'John Doe'
            ]
        ]);
    }
}
