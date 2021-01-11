<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
                'name' => 'Bantu Siswa SDN01',
                'startDate' => Carbon::parse('2021-01-01'),
                'endDate' => Carbon::parse('2021-03-01'),
                'desc' => 'Donasikan ponsel bekasmu untuk membantu para siswa SDN01 Bekasi belajar online!',
                'spesifikasi' => 'iPhone 12 Pro Max 512GB Pacific Blue',
                'penerima' => 'Ardie Wijaya',
                'qty' => 1000,
                'creator' => 'Ardie Wijaya'
            ]
        ]);
    }
}
