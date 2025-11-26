<?php

namespace Database\Seeders;

use App\Models\UserProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserProduct::create(['user_id' => 1, 'product_id' => 1]);
    }
}
