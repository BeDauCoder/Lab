<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\table;

class FavoriteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('favorities')->insert([
            'favorite_name' => 'Thể thao',
            'favorite_description' => 'Thích câu lạc bộ REAL, MU , Barca,...'
        ]);

        DB::table('favorities')->insert([
            'favorite_name' => 'Du lịch',
            'favorite_description' => 'Tôi thích đi du lịch nhiều nước trên Thế Giới.'
        ]);

        DB::table('favorities')->insert([
            'favorite_name' => 'Xem phim',
            'favorite_description' => 'Tôi thích xem Netflix.'
        ]);
    }
}
