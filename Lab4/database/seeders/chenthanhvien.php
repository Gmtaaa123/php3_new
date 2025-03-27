<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class chenthanhvien extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $ho = ['Nguyễn', 'Lê', 'Phan', 'Đỗ', 'Hồ', 'Võ', 'Bùi'];
    $lot = ['Thị', 'Văn', 'Đức', 'Ngọc', 'Hoàng', 'Minh', 'Kim', ''];
    $ten = ['Tâm', 'Thảo', 'Hải', 'Hòa', 'Hào', 'Thanh', 'Tú', 'Hậu', 'Phương'];

        for($i = 0 ; $i<100 ; $i++){
            $hoten = Arr::random($ho).' '.Arr::random($lot).' '.Arr::random($ten);

            DB::table('thanhvien')->insert([
                'hoTen' => $hoten,
                'email' => Str::random(5).'@gmail.com',
                'password' => bcrypt('hehe')
            ]);
        }
    }
}
