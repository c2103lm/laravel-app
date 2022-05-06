<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'STERLING', 'price' => 2600000,'sale_price' => 2000000, 'image' => '1651838699.png', 'desr' => '<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Kích thước mặt</p>\r\n<p class=\"productInfo_value__Xrxm_\">42MM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Độ dày</p>\r\n<p class=\"productInfo_value__Xrxm_\">8.5MM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Màu mặt</p>\r\n<p class=\"productInfo_value__Xrxm_\">NAVY</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Loại máy</p>\r\n<p class=\"productInfo_value__Xrxm_\">MIYOTA QUARTZ</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Kích cỡ dây</p>\r\n<p class=\"productInfo_value__Xrxm_\">20MM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Chống nước</p>\r\n<p class=\"productInfo_value__Xrxm_\">5ATM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Mặt kính</p>\r\n<p class=\"productInfo_value__Xrxm_\">SAPPHIRE</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Chất liệu dây</p>\r\n<p class=\"productInfo_value__Xrxm_\">DÂY THÉP KHÔNG GỈ</p>\r\n</div>', 'category_id' => 1, 'status' => 1
            ],
            [
                'name' => 'STERLING', 'price' => 2600000,'sale_price' => 2000000, 'image' => '1651838699.png', 'desr' => '<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Kích thước mặt</p>\r\n<p class=\"productInfo_value__Xrxm_\">42MM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Độ dày</p>\r\n<p class=\"productInfo_value__Xrxm_\">8.5MM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Màu mặt</p>\r\n<p class=\"productInfo_value__Xrxm_\">NAVY</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Loại máy</p>\r\n<p class=\"productInfo_value__Xrxm_\">MIYOTA QUARTZ</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Kích cỡ dây</p>\r\n<p class=\"productInfo_value__Xrxm_\">20MM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Chống nước</p>\r\n<p class=\"productInfo_value__Xrxm_\">5ATM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Mặt kính</p>\r\n<p class=\"productInfo_value__Xrxm_\">SAPPHIRE</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Chất liệu dây</p>\r\n<p class=\"productInfo_value__Xrxm_\">DÂY THÉP KHÔNG GỈ</p>\r\n</div>', 'category_id' => 1, 'status' => 1
            ],
            [
                'name' => 'STERLING', 'price' => 2600000,'sale_price' => 2000000, 'image' => '1651838699.png', 'desr' => '<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Kích thước mặt</p>\r\n<p class=\"productInfo_value__Xrxm_\">42MM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Độ dày</p>\r\n<p class=\"productInfo_value__Xrxm_\">8.5MM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Màu mặt</p>\r\n<p class=\"productInfo_value__Xrxm_\">NAVY</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Loại máy</p>\r\n<p class=\"productInfo_value__Xrxm_\">MIYOTA QUARTZ</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Kích cỡ dây</p>\r\n<p class=\"productInfo_value__Xrxm_\">20MM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Chống nước</p>\r\n<p class=\"productInfo_value__Xrxm_\">5ATM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Mặt kính</p>\r\n<p class=\"productInfo_value__Xrxm_\">SAPPHIRE</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Chất liệu dây</p>\r\n<p class=\"productInfo_value__Xrxm_\">DÂY THÉP KHÔNG GỈ</p>\r\n</div>', 'category_id' => 1, 'status' => 1
            ],
            [
                'name' => 'STERLING', 'price' => 2600000,'sale_price' => 2000000, 'image' => '1651838699.png', 'desr' => '<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Kích thước mặt</p>\r\n<p class=\"productInfo_value__Xrxm_\">42MM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Độ dày</p>\r\n<p class=\"productInfo_value__Xrxm_\">8.5MM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Màu mặt</p>\r\n<p class=\"productInfo_value__Xrxm_\">NAVY</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Loại máy</p>\r\n<p class=\"productInfo_value__Xrxm_\">MIYOTA QUARTZ</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Kích cỡ dây</p>\r\n<p class=\"productInfo_value__Xrxm_\">20MM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Chống nước</p>\r\n<p class=\"productInfo_value__Xrxm_\">5ATM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Mặt kính</p>\r\n<p class=\"productInfo_value__Xrxm_\">SAPPHIRE</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Chất liệu dây</p>\r\n<p class=\"productInfo_value__Xrxm_\">DÂY THÉP KHÔNG GỈ</p>\r\n</div>', 'category_id' => 1, 'status' => 1
            ],
            [
                'name' => 'STERLING', 'price' => 2600000,'sale_price' => 2000000, 'image' => '1651838699.png', 'desr' => '<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Kích thước mặt</p>\r\n<p class=\"productInfo_value__Xrxm_\">42MM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Độ dày</p>\r\n<p class=\"productInfo_value__Xrxm_\">8.5MM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Màu mặt</p>\r\n<p class=\"productInfo_value__Xrxm_\">NAVY</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Loại máy</p>\r\n<p class=\"productInfo_value__Xrxm_\">MIYOTA QUARTZ</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Kích cỡ dây</p>\r\n<p class=\"productInfo_value__Xrxm_\">20MM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Chống nước</p>\r\n<p class=\"productInfo_value__Xrxm_\">5ATM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Mặt kính</p>\r\n<p class=\"productInfo_value__Xrxm_\">SAPPHIRE</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Chất liệu dây</p>\r\n<p class=\"productInfo_value__Xrxm_\">DÂY THÉP KHÔNG GỈ</p>\r\n</div>', 'category_id' => 1, 'status' => 1
            ],
            [
                'name' => 'STERLING', 'price' => 2600000,'sale_price' => 2000000, 'image' => '1651838699.png', 'desr' => '<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Kích thước mặt</p>\r\n<p class=\"productInfo_value__Xrxm_\">42MM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Độ dày</p>\r\n<p class=\"productInfo_value__Xrxm_\">8.5MM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Màu mặt</p>\r\n<p class=\"productInfo_value__Xrxm_\">NAVY</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Loại máy</p>\r\n<p class=\"productInfo_value__Xrxm_\">MIYOTA QUARTZ</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Kích cỡ dây</p>\r\n<p class=\"productInfo_value__Xrxm_\">20MM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Chống nước</p>\r\n<p class=\"productInfo_value__Xrxm_\">5ATM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Mặt kính</p>\r\n<p class=\"productInfo_value__Xrxm_\">SAPPHIRE</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Chất liệu dây</p>\r\n<p class=\"productInfo_value__Xrxm_\">DÂY THÉP KHÔNG GỈ</p>\r\n</div>', 'category_id' => 1, 'status' => 1
            ],
            [
                'name' => 'STERLING', 'price' => 2600000,'sale_price' => 2000000, 'image' => '1651838699.png', 'desr' => '<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Kích thước mặt</p>\r\n<p class=\"productInfo_value__Xrxm_\">42MM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Độ dày</p>\r\n<p class=\"productInfo_value__Xrxm_\">8.5MM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Màu mặt</p>\r\n<p class=\"productInfo_value__Xrxm_\">NAVY</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Loại máy</p>\r\n<p class=\"productInfo_value__Xrxm_\">MIYOTA QUARTZ</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Kích cỡ dây</p>\r\n<p class=\"productInfo_value__Xrxm_\">20MM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Chống nước</p>\r\n<p class=\"productInfo_value__Xrxm_\">5ATM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Mặt kính</p>\r\n<p class=\"productInfo_value__Xrxm_\">SAPPHIRE</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Chất liệu dây</p>\r\n<p class=\"productInfo_value__Xrxm_\">DÂY THÉP KHÔNG GỈ</p>\r\n</div>', 'category_id' => 1, 'status' => 1
            ],
            [
                'name' => 'STERLING', 'price' => 2600000,'sale_price' => 2000000, 'image' => '1651838699.png', 'desr' => '<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Kích thước mặt</p>\r\n<p class=\"productInfo_value__Xrxm_\">42MM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Độ dày</p>\r\n<p class=\"productInfo_value__Xrxm_\">8.5MM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Màu mặt</p>\r\n<p class=\"productInfo_value__Xrxm_\">NAVY</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Loại máy</p>\r\n<p class=\"productInfo_value__Xrxm_\">MIYOTA QUARTZ</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Kích cỡ dây</p>\r\n<p class=\"productInfo_value__Xrxm_\">20MM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Chống nước</p>\r\n<p class=\"productInfo_value__Xrxm_\">5ATM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Mặt kính</p>\r\n<p class=\"productInfo_value__Xrxm_\">SAPPHIRE</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Chất liệu dây</p>\r\n<p class=\"productInfo_value__Xrxm_\">DÂY THÉP KHÔNG GỈ</p>\r\n</div>', 'category_id' => 1, 'status' => 1
            ],
            [
                'name' => 'STERLING', 'price' => 2600000,'sale_price' => 2000000, 'image' => '1651838699.png', 'desr' => '<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Kích thước mặt</p>\r\n<p class=\"productInfo_value__Xrxm_\">42MM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Độ dày</p>\r\n<p class=\"productInfo_value__Xrxm_\">8.5MM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Màu mặt</p>\r\n<p class=\"productInfo_value__Xrxm_\">NAVY</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Loại máy</p>\r\n<p class=\"productInfo_value__Xrxm_\">MIYOTA QUARTZ</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Kích cỡ dây</p>\r\n<p class=\"productInfo_value__Xrxm_\">20MM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Chống nước</p>\r\n<p class=\"productInfo_value__Xrxm_\">5ATM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Mặt kính</p>\r\n<p class=\"productInfo_value__Xrxm_\">SAPPHIRE</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Chất liệu dây</p>\r\n<p class=\"productInfo_value__Xrxm_\">DÂY THÉP KHÔNG GỈ</p>\r\n</div>', 'category_id' => 1, 'status' => 1
            ],
            [
                'name' => 'STERLING', 'price' => 2600000,'sale_price' => 2000000, 'image' => '1651838699.png', 'desr' => '<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Kích thước mặt</p>\r\n<p class=\"productInfo_value__Xrxm_\">42MM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Độ dày</p>\r\n<p class=\"productInfo_value__Xrxm_\">8.5MM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Màu mặt</p>\r\n<p class=\"productInfo_value__Xrxm_\">NAVY</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Loại máy</p>\r\n<p class=\"productInfo_value__Xrxm_\">MIYOTA QUARTZ</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Kích cỡ dây</p>\r\n<p class=\"productInfo_value__Xrxm_\">20MM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Chống nước</p>\r\n<p class=\"productInfo_value__Xrxm_\">5ATM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Mặt kính</p>\r\n<p class=\"productInfo_value__Xrxm_\">SAPPHIRE</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Chất liệu dây</p>\r\n<p class=\"productInfo_value__Xrxm_\">DÂY THÉP KHÔNG GỈ</p>\r\n</div>', 'category_id' => 1, 'status' => 1
            ],
            [
                'name' => 'STERLING', 'price' => 2600000,'sale_price' => 2000000, 'image' => '1651838699.png', 'desr' => '<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Kích thước mặt</p>\r\n<p class=\"productInfo_value__Xrxm_\">42MM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Độ dày</p>\r\n<p class=\"productInfo_value__Xrxm_\">8.5MM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Màu mặt</p>\r\n<p class=\"productInfo_value__Xrxm_\">NAVY</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Loại máy</p>\r\n<p class=\"productInfo_value__Xrxm_\">MIYOTA QUARTZ</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Kích cỡ dây</p>\r\n<p class=\"productInfo_value__Xrxm_\">20MM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Chống nước</p>\r\n<p class=\"productInfo_value__Xrxm_\">5ATM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Mặt kính</p>\r\n<p class=\"productInfo_value__Xrxm_\">SAPPHIRE</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Chất liệu dây</p>\r\n<p class=\"productInfo_value__Xrxm_\">DÂY THÉP KHÔNG GỈ</p>\r\n</div>', 'category_id' => 1, 'status' => 1
            ],
            [
                'name' => 'STERLING', 'price' => 2600000,'sale_price' => 2000000, 'image' => '1651838699.png', 'desr' => '<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Kích thước mặt</p>\r\n<p class=\"productInfo_value__Xrxm_\">42MM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Độ dày</p>\r\n<p class=\"productInfo_value__Xrxm_\">8.5MM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Màu mặt</p>\r\n<p class=\"productInfo_value__Xrxm_\">NAVY</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Loại máy</p>\r\n<p class=\"productInfo_value__Xrxm_\">MIYOTA QUARTZ</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Kích cỡ dây</p>\r\n<p class=\"productInfo_value__Xrxm_\">20MM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Chống nước</p>\r\n<p class=\"productInfo_value__Xrxm_\">5ATM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Mặt kính</p>\r\n<p class=\"productInfo_value__Xrxm_\">SAPPHIRE</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Chất liệu dây</p>\r\n<p class=\"productInfo_value__Xrxm_\">DÂY THÉP KHÔNG GỈ</p>\r\n</div>', 'category_id' => 1, 'status' => 1
            ],
            [
                'name' => 'STERLING', 'price' => 2600000,'sale_price' => 2000000, 'image' => '1651838699.png', 'desr' => '<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Kích thước mặt</p>\r\n<p class=\"productInfo_value__Xrxm_\">42MM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Độ dày</p>\r\n<p class=\"productInfo_value__Xrxm_\">8.5MM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Màu mặt</p>\r\n<p class=\"productInfo_value__Xrxm_\">NAVY</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Loại máy</p>\r\n<p class=\"productInfo_value__Xrxm_\">MIYOTA QUARTZ</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Kích cỡ dây</p>\r\n<p class=\"productInfo_value__Xrxm_\">20MM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Chống nước</p>\r\n<p class=\"productInfo_value__Xrxm_\">5ATM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Mặt kính</p>\r\n<p class=\"productInfo_value__Xrxm_\">SAPPHIRE</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Chất liệu dây</p>\r\n<p class=\"productInfo_value__Xrxm_\">DÂY THÉP KHÔNG GỈ</p>\r\n</div>', 'category_id' => 1, 'status' => 1
            ],
            [
                'name' => 'STERLING', 'price' => 2600000,'sale_price' => 2000000, 'image' => '1651838699.png', 'desr' => '<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Kích thước mặt</p>\r\n<p class=\"productInfo_value__Xrxm_\">42MM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Độ dày</p>\r\n<p class=\"productInfo_value__Xrxm_\">8.5MM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Màu mặt</p>\r\n<p class=\"productInfo_value__Xrxm_\">NAVY</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Loại máy</p>\r\n<p class=\"productInfo_value__Xrxm_\">MIYOTA QUARTZ</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Kích cỡ dây</p>\r\n<p class=\"productInfo_value__Xrxm_\">20MM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Chống nước</p>\r\n<p class=\"productInfo_value__Xrxm_\">5ATM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Mặt kính</p>\r\n<p class=\"productInfo_value__Xrxm_\">SAPPHIRE</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Chất liệu dây</p>\r\n<p class=\"productInfo_value__Xrxm_\">DÂY THÉP KHÔNG GỈ</p>\r\n</div>', 'category_id' => 1, 'status' => 1
            ],
            [
                'name' => 'STERLING', 'price' => 2600000,'sale_price' => 2000000, 'image' => '1651838699.png', 'desr' => '<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Kích thước mặt</p>\r\n<p class=\"productInfo_value__Xrxm_\">42MM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Độ dày</p>\r\n<p class=\"productInfo_value__Xrxm_\">8.5MM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Màu mặt</p>\r\n<p class=\"productInfo_value__Xrxm_\">NAVY</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Loại máy</p>\r\n<p class=\"productInfo_value__Xrxm_\">MIYOTA QUARTZ</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Kích cỡ dây</p>\r\n<p class=\"productInfo_value__Xrxm_\">20MM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Chống nước</p>\r\n<p class=\"productInfo_value__Xrxm_\">5ATM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Mặt kính</p>\r\n<p class=\"productInfo_value__Xrxm_\">SAPPHIRE</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Chất liệu dây</p>\r\n<p class=\"productInfo_value__Xrxm_\">DÂY THÉP KHÔNG GỈ</p>\r\n</div>', 'category_id' => 1, 'status' => 1
            ],
            [
                'name' => 'STERLING', 'price' => 2600000,'sale_price' => 2000000, 'image' => '1651838699.png', 'desr' => '<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Kích thước mặt</p>\r\n<p class=\"productInfo_value__Xrxm_\">42MM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Độ dày</p>\r\n<p class=\"productInfo_value__Xrxm_\">8.5MM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Màu mặt</p>\r\n<p class=\"productInfo_value__Xrxm_\">NAVY</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Loại máy</p>\r\n<p class=\"productInfo_value__Xrxm_\">MIYOTA QUARTZ</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Kích cỡ dây</p>\r\n<p class=\"productInfo_value__Xrxm_\">20MM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Chống nước</p>\r\n<p class=\"productInfo_value__Xrxm_\">5ATM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Mặt kính</p>\r\n<p class=\"productInfo_value__Xrxm_\">SAPPHIRE</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Chất liệu dây</p>\r\n<p class=\"productInfo_value__Xrxm_\">DÂY THÉP KHÔNG GỈ</p>\r\n</div>', 'category_id' => 1, 'status' => 1
            ],
            [
                'name' => 'STERLING', 'price' => 2600000,'sale_price' => 2000000, 'image' => '1651838699.png', 'desr' => '<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Kích thước mặt</p>\r\n<p class=\"productInfo_value__Xrxm_\">42MM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Độ dày</p>\r\n<p class=\"productInfo_value__Xrxm_\">8.5MM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Màu mặt</p>\r\n<p class=\"productInfo_value__Xrxm_\">NAVY</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Loại máy</p>\r\n<p class=\"productInfo_value__Xrxm_\">MIYOTA QUARTZ</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Kích cỡ dây</p>\r\n<p class=\"productInfo_value__Xrxm_\">20MM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Chống nước</p>\r\n<p class=\"productInfo_value__Xrxm_\">5ATM</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Mặt kính</p>\r\n<p class=\"productInfo_value__Xrxm_\">SAPPHIRE</p>\r\n</div>\r\n<div class=\"productInfo_boxContent__Hp65L\">\r\n<p class=\"productInfo_name__5WsHw\">Chất liệu dây</p>\r\n<p class=\"productInfo_value__Xrxm_\">DÂY THÉP KHÔNG GỈ</p>\r\n</div>', 'category_id' => 1, 'status' => 1
            ]
        ];

        DB::table('products')->insert($data);
    }
}
