<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductReview;
use App\Models\Product;
use App\Models\User;
use Faker\Factory as Faker;

class ProductReviewSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        $products = Product::all();
        $users = User::where('type', 3)->take(5)->get();

        foreach ($products as $product) {
            foreach ($users as $user) {
                ProductReview::create([
                    'product_id' => $product->id,
                    'user_id' => $user->id,
                    'comment' => $faker->sentence(),
                    'stars' => $faker->numberBetween(1, 5),
                ]);
            }
        }
    }
}

