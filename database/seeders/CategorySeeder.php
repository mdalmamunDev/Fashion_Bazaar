<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $timestamp = Carbon::now();
        DB::table('categories')->insert([
            ['category_name' => 'Men\'s Clothing', 'details' => 'Fashionable men\'s clothing', 'status' => 1, 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['category_name' => 'Women\'s Clothing', 'details' => 'Stylish women\'s clothing', 'status' => 1, 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['category_name' => 'Kids\' Clothing', 'details' => 'Trendy kids\' clothing', 'status' => 1, 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['category_name' => 'Footwear', 'details' => 'Fashionable footwear for all ages', 'status' => 1, 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['category_name' => 'Accessories', 'details' => 'Fashion accessories and jewelry', 'status' => 1, 'created_at' => $timestamp, 'updated_at' => $timestamp],
        ]);
    }
}
