<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class chenLoaisp extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('loaisp')->insert([
            ['ten_Loai' => 'Sam sung', 'thu_Tu' => 1, 'an_hien' => 1],
            ['ten_Loai' => 'HTC', 'thu_Tu' => 2, 'an_hien' => 1],
            ['ten_Loai' => 'Apple', 'thu_Tu' => 3, 'an_hien' => 1],
            ['ten_Loai' => 'LG', 'thu_Tu' => 4, 'an_hien' => 1],
            ['ten_Loai' => 'Motorola', 'thu_Tu' => 5, 'an_hien' => 1],
            ['ten_Loai' => 'Mobel', 'thu_Tu' => 6, 'an_hien' => 0],
        ]);

    }
}
