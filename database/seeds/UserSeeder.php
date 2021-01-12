<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'admin',
                'email' => 'admin@lembiru.id',
                'password' => \Illuminate\Support\Facades\Hash::make('12345678'),
                'role' => 'admin'
            ],
            [
                'id' => 2,
                'name' => 'Ricco',
                'email' => 'riccocoolz@gmail.com',
                'password' => \Illuminate\Support\Facades\Hash::make('12345678'),
                'role' => 'user'
            ],
        ]);
    }
}
