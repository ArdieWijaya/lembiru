<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GadgetDonationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gadget_donations')->insert([
            [
                'id' => 1,
                'brand' => 'Apple',
                'type' => 'iPhone 12 Pro Max',
                'condition' => 'Pristine',
                'user_id' => 2,
                'campaign_id' => 1,
                'created_at' => Carbon::parse('2021-01-01')
            ],
            [
                'id' => 2,
                'brand' => 'Apple',
                'type' => 'iPhone 11 Pro Max',
                'condition' => 'Pristine',
                'user_id' => 2,
                'campaign_id' => 1,
                'created_at' => Carbon::parse('2021-01-02')
            ],
            [
                'id' => 3,
                'brand' => 'Apple',
                'type' => 'iPhone XS Max',
                'condition' => 'Pristine',
                'user_id' => 2,
                'campaign_id' => 1,
                'created_at' => Carbon::parse('2021-01-03')
            ]
        ]);
    }
}
