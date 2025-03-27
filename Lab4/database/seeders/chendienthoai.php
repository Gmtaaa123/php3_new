<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class chendienthoai extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for ($i = 0; $i < 300; $i++) {
            DB::table('dienthoai')->insert([
                [
                    'tenDT' => 'Oppo XA ' . $i,
                    'gia' => mt_rand(700000, 1000000),
                    'ngayCapNhat' => now(),
                    'idLoai' => 2
                ],
                [
                    'tenDT' => 'Iphone XS Max ' . $i,
                    'gia' => mt_rand(500000, 800000),
                    'ngayCapNhat' => now(),
                    'idLoai' => 3
                ],
                [
                    'tenDT' => 'Nokia Pro ' . $i,
                    'gia' => mt_rand(250000, 500000),
                    'ngayCapNhat' => now(),
                    'idLoai' => 1
                ]
            ]);
        }
    }
}
