<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_profile')->insert([
            'user_profile_id' => 1,
            'user_id' => 1,
            'first_name' => 'Hoang',
            'last_name' => 'Linh',
            'sex' => 0,
            'phone' => '0912345678',
            'address' => '2 Hoa Binh Street, Ho Chi Minh City'
        ]);
    }
}
