<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'Đồng hồ', 'status' => 1]);
        Category::create(['name' => 'Túi xách', 'status' => 1]);
        Category::create(['name' => 'Quần Áo', 'status' => 1]);
        Category::create(['name' => 'Dày dép', 'status' => 1]);
    }
}
