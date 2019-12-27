<?php

use Illuminate\Database\Seeder;

class TheLoaiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('TheLoai')->insert([
        	['Ten' => 'Nhà Đất Bán','TenKhongDau' => 'Nha-Dat-Ban'],
        	['Ten' => 'Nhà Đất Cho Thuê','TenKhongDau' => 'Nha-Dat-Cho-Thue'],
        	['Ten' => 'Dự Án','TenKhongDau' => 'Du-An'],
        	['Ten' => 'Nhà Đất Cần Mua','TenKhongDau' => 'Nha-Dat-Can-Thue'],
        	['Ten' => 'Cho Thuê Căn Hộ Chung Cư','TenKhongDau' => 'Cho-Thue-Can-Ho-Chung-Cu'],
        	['Ten' => 'Cho Thuê Nhà Riên','TenKhongDau' => 'Cho-Thue-Nha-Rieng'],
        	['Ten' => 'Bán Nhà Mặt Phố','TenKhongDau' => 'Ban-Nha-Mat-Pho'],
        	['Ten' => 'Bán Đất Nền Dự Án','TenKhongDau' => 'Ban-Dat-Nen-Du-An'],
        	['Ten' => 'Bán Kho','TenKhongDau' => 'Ban-Kho']
    	]);

    }
}
