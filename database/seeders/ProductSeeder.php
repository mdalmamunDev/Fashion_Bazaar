<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $timestamp = Carbon::now();

        DB::table('products')->insert([
            ['category_id' => 1, 'user_id' => 1, 'name' => 'Product 1', 'details' => 'Details of Product 1', 'price' => 19.99, 'brand' => 'Brand A', 'img' => 'images/p1.png', 'status' => 1, 'sales' => 0, 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['category_id' => 2, 'user_id' => 1, 'name' => 'Product 2', 'details' => 'Details of Product 2', 'price' => 29.99, 'brand' => 'Brand B', 'img' => 'images/p2.png', 'status' => 1, 'sales' => 0, 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['category_id' => 1, 'user_id' => 2, 'name' => 'Product 3', 'details' => 'Details of Product 3', 'price' => 39.99, 'brand' => 'Brand C', 'img' => 'images/p3.png', 'status' => 1, 'sales' => 0, 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['category_id' => 3, 'user_id' => 1, 'name' => 'Product 4', 'details' => 'Details of Product 4', 'price' => 49.99, 'brand' => 'Brand D', 'img' => 'images/p4.png', 'status' => 1, 'sales' => 0, 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['category_id' => 2, 'user_id' => 2, 'name' => 'Product 5', 'details' => 'Details of Product 5', 'price' => 59.99, 'brand' => 'Brand E', 'img' => 'images/p5.png', 'status' => 1, 'sales' => 0, 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['category_id' => 1, 'user_id' => 1, 'name' => 'Product 6', 'details' => 'Details of Product 6', 'price' => 69.99, 'brand' => 'Brand F', 'img' => 'images/p6.png', 'status' => 1, 'sales' => 0, 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['category_id' => 4, 'user_id' => 1, 'name' => 'Product 7', 'details' => 'Details of Product 7', 'price' => 79.99, 'brand' => 'Brand G', 'img' => 'images/p7.png', 'status' => 1, 'sales' => 0, 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['category_id' => 2, 'user_id' => 1, 'name' => 'Product 8', 'details' => 'Details of Product 8', 'price' => 89.99, 'brand' => 'Brand H', 'img' => 'images/p8.png', 'status' => 1, 'sales' => 0, 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['category_id' => 3, 'user_id' => 1, 'name' => 'Product 9', 'details' => 'Details of Product 9', 'price' => 99.99, 'brand' => 'Brand I', 'img' => 'images/p9.png', 'status' => 1, 'sales' => 0, 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['category_id' => 5, 'user_id' => 1, 'name' => 'Product 10', 'details' => 'Details of Product 10', 'price' => 109.99, 'brand' => 'Brand J', 'img' => 'images/p10.png', 'status' => 1, 'sales' => 0, 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['category_id' => 1, 'user_id' => 2, 'name' => 'Product 11', 'details' => 'Details of Product 11', 'price' => 119.99, 'brand' => 'Brand K', 'img' => 'images/p11.png', 'status' => 1, 'sales' => 0, 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['category_id' => 2, 'user_id' => 1, 'name' => 'Product 12', 'details' => 'Details of Product 12', 'price' => 129.99, 'brand' => 'Brand L', 'img' => 'images/p12.png', 'status' => 1, 'sales' => 0, 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['category_id' => 3, 'user_id' => 1, 'name' => 'Product 13', 'details' => 'Details of Product 13', 'price' => 139.99, 'brand' => 'Brand M', 'img' => 'images/p1.png', 'status' => 1, 'sales' => 0, 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['category_id' => 1, 'user_id' => 2, 'name' => 'Product 14', 'details' => 'Details of Product 14', 'price' => 149.99, 'brand' => 'Brand N', 'img' => 'images/p4.png', 'status' => 1, 'sales' => 0, 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['category_id' => 5, 'user_id' => 2, 'name' => 'Product 15', 'details' => 'Details of Product 15', 'price' => 159.99, 'brand' => 'Brand O', 'img' => 'images/p5.png', 'status' => 1, 'sales' => 0, 'created_at' => $timestamp, 'updated_at' => $timestamp],
        ]);
    }
}
