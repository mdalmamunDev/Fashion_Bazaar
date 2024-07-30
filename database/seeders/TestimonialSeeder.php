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
                'user_id' => 2,
                'content' => 'FashionBazaar has a fantastic collection of watches and shoes. I recently purchased a pair of sneakers and a wristwatch, and I am extremely satisfied with both items. The prices are reasonable, and the delivery was prompt. I will definitely be shopping here again.',
                'likes' => 20,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 1,
                'content' => 'I am very satisfied with my purchase from FashionBazaar. The website is easy to navigate, and the customer support team was very helpful when I had a query about my order. The quality of the products exceeded my expectations, and I have already recommended FashionBazaar to my friends and family.',
                'likes' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
