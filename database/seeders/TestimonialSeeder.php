<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            [
                'user_id' => 3,
                'content' => 'I have been shopping at FashionBazaar for the past year, and I must say that their product quality and customer service are unparalleled. The clothes fit perfectly and the styles are always trendy. I highly recommend FashionBazaar to anyone looking for stylish and affordable fashion.',
                'likes' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 4,
                'content' => 'FashionBazaar has a fantastic collection of watches and shoes. I recently purchased a pair of sneakers and a wristwatch, and I am extremely satisfied with both items. The prices are reasonable, and the delivery was prompt. I will definitely be shopping here again.',
                'likes' => 20,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 5,
                'content' => 'I am very satisfied with my purchase from FashionBazaar. The website is easy to navigate, and the customer support team was very helpful when I had a query about my order. The quality of the products exceeded my expectations, and I have already recommended FashionBazaar to my friends and family.',
                'likes' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 6,
                'content' => 'Shopping at FashionBazaar was a wonderful experience. The variety of products available is impressive, and the detailed product descriptions and images make it easy to choose the right items. I purchased a dress and a handbag, and both were delivered in perfect condition.',
                'likes' => 15,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 7,
                'content' => 'FashionBazaar is my go-to online store for all my fashion needs. They offer a wide range of products, from casual wear to formal attire, all at great prices. The quality of the clothing is excellent, and I have never been disappointed with any of my purchases.',
                'likes' => 25,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 8,
                'content' => 'I recently bought a jacket and a pair of boots from FashionBazaar. The products are of high quality and very stylish. The delivery was quick, and the items were exactly as described. I will definitely be a returning customer.',
                'likes' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 9,
                'content' => 'The customer service at FashionBazaar is exceptional. They were very responsive to my inquiries and ensured that my shopping experience was smooth and enjoyable. The products are great, and the prices are unbeatable.',
                'likes' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 10,
                'content' => 'FashionBazaar has become my favorite online store. The variety of products, the quality, and the excellent customer service make it stand out from the rest. I have recommended it to all my friends.',
                'likes' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
