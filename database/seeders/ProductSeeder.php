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
            [
                'category_id' => 1,
                'user_id' => 1,
                'name' => "Men's Classic Leather Belt",
                'details' => "<p>Men's Classic Leather Belt<br>Item Code: MB00004567<br>Material: Genuine Leather<br>Color: BLACK (As Given Picture)<br>Style: Formal &amp; Casual<br>Length: 40 inches</p><p>High-quality leather belt, perfect for both formal and casual occasions. Durable and adjustable.</p>",
                'price' => 19.99,
                'brand' => 'LeatherCraft',
                'img' => 'images/mens_leather_belt.png',
                'status' => 1,
                'sales' => 0,
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
                'dis_rate' => 0.00
            ],
            [
                'category_id' => 2,
                'user_id' => 1,
                'name' => "Women's Summer Dress",
                'details' => "<p>Women's Summer Dress<br>Item Code: WD00001234<br>Material: 100% Cotton<br>Color: FLORAL PRINT (As Given Picture)<br>Style: Casual &amp; Beachwear<br>Length: Knee-Length</p><p>Lightweight and breathable summer dress, perfect for warm weather. Stylish floral print design.</p>",
                'price' => 29.99,
                'brand' => 'SunnyDays',
                'img' => 'images/womens_summer_dress.png',
                'status' => 1,
                'sales' => 0,
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
                'dis_rate' => 20.00
            ],
            [
                'category_id' => 1,
                'user_id' => 2,
                'name' => "Men's Casual Shirt",
                'details' => "<p>Men's Casual Shirt<br>Item Code: MS00002547<br>Model No: MSFL-C2-NAVYBLUE</p><p>Product Type: Men's Casual Shirt<br>Material: 100% Cotton<br>Fit Type: Slim Fit<br>Collar Type: Button-Down<br>Sleeve Length: Full Sleeve<br>Pattern: Solid<br>Style: Casual &amp; Semi-Formal<br>Color: NAVY BLUE (As Given Picture)</p><p>Comfortable and breathable fabric, perfect for casual outings or semi-formal occasions. Easy to maintain and durable.</p>",
                'price' => 39.99,
                'brand' => 'FashionHub',
                'img' => "images/mens_casual_shirt.png",
                'status' => 1,
                'sales' => 0,
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
                'dis_rate' => 0.00
            ],
            [
                'category_id' => 3,
                'user_id' => 1,
                'name' => "Women's Leather Handbag",
                'details' => "<p>Women's Leather Handbag<br>Item Code: WB00001234<br>Model No: WFL-HB-BLACK</p><p>Product Type: Women's Handbag<br>Material: Genuine Leather<br>Compartments: 3<br>Strap Type: Adjustable Shoulder Strap<br>Closure: Zipper<br>Color: BLACK (As Given Picture)</p><p>Elegant and versatile handbag, suitable for all occasions. High-quality leather ensures durability and style.</p>",
                'price' => 49.99,
                'brand' => 'LuxStyle',
                'img' => 'images/womens_leather_handbag.png',
                'status' => 1,
                'sales' => 0,
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
                'dis_rate' => 12.50
            ],
            [
                'category_id' => 2,
                'user_id' => 2,
                'name' => "Women's Running Shoes",
                'details' => "<p>Women's Running Shoes<br>Item Code: WS00009876<br>Material: Mesh &amp; Rubber<br>Color: PINK/WHITE (As Given Picture)<br>Style: Athletic<br>Size: 6-9</p><p>Lightweight and comfortable running shoes designed for active wear. Breathable mesh upper with durable rubber sole.</p>",
                'price' => 59.99,
                'brand' => 'SportyFit',
                'img' => 'images/womens_running_shoes.png',
                'status' => 1,
                'sales' => 0,
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
                'dis_rate' => 0.00
            ],
            [
                'category_id' => 1,
                'user_id' => 1,
                'name' => "Men's Short Sleeve Polo Shirt",
                'details' => "<p>Men's Short Sleeve Polo Shirt<br>Item Code: SH00000145<br>Model No: SHPO-POLO-05</p><p>Product Type: Men's Casual Polo Shirt<br>Fabric: Cotton Blend<br>Fit: Regular Fit<br>Collar: Polo Collar<br>Sleeve: Short Sleeve<br>Color: Red</p>",
                'price' => 24.99,
                'brand' => 'Casual Comfort',
                'img' => 'images/mens_short_sleeve_polo_shirt.png',
                'status' => 1,
                'sales' => 0,
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
                'dis_rate' => 0.00
            ],
            [
                'category_id' => 2,
                'user_id' => 1,
                'name' => "Women's Floral Print Summer Dress",
                'details' => "<p>Women's Floral Print Summer Dress<br>Item Code: WD00000146<br>Model No: WDFS-FLORAL-01</p><p>Product Type: Women's Dress<br>Fabric: 100% Rayon<br>Fit: Regular Fit<br>Neckline: V-Neck<br>Sleeve: Short Sleeve<br>Length: Knee-Length<br>Pattern: Floral Print<br>Color: Yellow/Blue</p>",
                'price' => 49.99,
                'brand' => 'Summer Vibes',
                'img' => 'images/womens_floral_print_summer_dress.png',
                'status' => 1,
                'sales' => 0,
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
                'dis_rate' => 10.00
            ],
            [
                'category_id' => 1,
                'user_id' => 1,
                'name' => "Men's Denim Jacket",
                'details' => "<p>Men's Denim Jacket<br>Item Code: MJ00003456<br>Material: 100% Cotton Denim<br>Color: LIGHT BLUE (As Given Picture)<br>Style: Casual &amp; Vintage<br>Size: M, L, XL</p><p>Classic denim jacket with a vintage look, perfect for layering. Durable and stylish for everyday wear.</p>",
                'price' => 69.99,
                'brand' => 'DenimWorks',
                'img' => 'images/mens_denim_jacket.png',
                'status' => 1,
                'sales' => 0,
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
                'dis_rate' => 0.00
            ],
            [
                'category_id' => 2,
                'user_id' => 1,
                'name' => "Women's Lace Evening Gown",
                'details' => "<p>Women's Lace Evening Gown<br>Item Code: WD00000151<br>Model No: WLG-EVGOWN-01</p><p>Product Type: Women's Dress<br>Fabric: Lace and Satin<br>Fit: Slim Fit<br>Neckline: Off-Shoulder<br>Sleeve: Sleeveless<br>Length: Floor-Length<br>Pattern: Solid<br>Color: Burgundy</p>",
                'price' => 199.99,
                'brand' => 'Glamour Couture',
                'img' => 'images/womens_lace_evening_gown.png',
                'status' => 1,
                'sales' => 0,
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
                'dis_rate' => 20.00
            ],
            [
                'category_id' => 2,
                'user_id' => 2,
                'name' => "Women's Floral Maxi Dress",
                'details' => "<p>Women's Floral Maxi Dress<br>Item Code: WD00000152<br>Model No: WFMX-FLORAL-02</p><p>Product Type: Women's Dress<br>Fabric: Chiffon<br>Fit: Relaxed Fit<br>Neckline: V-Neck<br>Sleeve: Long Sleeve<br>Length: Maxi<br>Pattern: Floral Print<br>Color: Pink/White</p>",
                'price' => 79.99,
                'brand' => 'Blossom Apparel',
                'img' => 'images/womens_floral_maxi_dress.png',
                'status' => 1,
                'sales' => 0,
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
                'dis_rate' => 15.00
            ],
            [
                'category_id' => 4,
                'user_id' => 1,
                'name' => "Smartwatch Series 5",
                'details' => "<p>Smartwatch Series 5<br>Item Code: SW00001123<br>Model No: SW5-BLK</p><p>Product Type: Smartwatch<br>Features: GPS, Heart Rate Monitor, Bluetooth<br>Battery Life: 24 hours<br>Color: BLACK (As Given Picture)</p><p>Advanced smartwatch with multiple features including fitness tracking, notifications, and heart rate monitoring.</p>",
                'price' => 79.99,
                'brand' => 'TechWear',
                'img' => 'images/smartwatch_series5.png',
                'status' => 1,
                'sales' => 0,
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
                'dis_rate' => 0.00
            ],
            [
                'category_id' => 2,
                'user_id' => 1,
                'name' => "Women's A-Line Summer Dress",
                'details' => "<p>Women's A-Line Summer Dress<br>Item Code: WD00000153<br>Model No: WAL-SUMMER-03</p><p>Product Type: Women's Dress<br>Fabric: Cotton Blend<br>Fit: A-Line<br>Neckline: Scoop Neck<br>Sleeve: Sleeveless<br>Length: Knee-Length<br>Pattern: Solid<br>Color: Light Blue</p>",
                'price' => 49.99,
                'brand' => 'Summer Breeze',
                'img' => 'images/womens_a_line_summer_dress.png',
                'status' => 1,
                'sales' => 0,
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
                'dis_rate' => 10.00
            ],
            [
                'category_id' => 2,
                'user_id' => 1,
                'name' => "Men's Black Corporate Shirt",
                'details' => "<p>Men's Black Corporate Shirt<br>Item Code: CS00000217<br>Model No: MB-MULTISTACK-01</p><p>Product Type: Men's Shirt<br>Fabric: Cotton Blend<br>Fit: Regular Fit<br>Sleeve: Long Sleeve<br>Pattern: Solid with Logo<br>Color: Black<br>Branding: Multistack Embroidery</p>",
                'price' => 49.99,
                'brand' => 'Multistack Apparel',
                'img' => 'images/men_s _black_corporate_shirt.png',
                'status' => 1,
                'sales' => 0,
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
                'dis_rate' => 10.00
            ],
            [
                'category_id' => 2,
                'user_id' => 2,
                'name' => "Women's Velvet Cocktail Dress",
                'details' => "<p>Women's Velvet Cocktail Dress<br>Item Code: WD00000154<br>Model No: WVC-COKTAIL-04</p><p>Product Type: Women's Dress<br>Fabric: Velvet<br>Fit: Bodycon<br>Neckline: Sweetheart Neck<br>Sleeve: 3/4 Sleeve<br>Length: Midi<br>Pattern: Solid<br>Color: Deep Red</p>",
                'price' => 129.99,
                'brand' => 'Elegant Evening',
                'img' => 'images/womens_velvet_cocktail_dress.png',
                'status' => 1,
                'sales' => 0,
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
                'dis_rate' => 25.00
            ],
            [
                'category_id' => 2,
                'user_id' => 1,
                'name' => "Women's Black Ruffled Gown",
                'details' => "<p>Women's Black Ruffled Gown<br>Item Code: WD00000156<br>Model No: WBR-RUFFLED-07</p><p>Product Type: Women's Dress<br>Fabric: Satin and Organza<br>Fit: Mermaid Fit<br>Neckline: Sweetheart Neck<br>Sleeve: Sleeveless<br>Length: Floor-Length<br>Pattern: Solid<br>Color: Black</p>",
                'price' => 249.99,
                'brand' => 'Royal Elegance',
                'img' => 'images/women_black_ruffled_gown.png',
                'status' => 1,
                'sales' => 0,
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
                'dis_rate' => 30.00
            ],
            [
                'category_id' => 1,
                'user_id' => 2,
                'name' => "Men's Denim Button-Up Shirt",
                'details' => "<p>Men's Denim Button-Up Shirt<br>Item Code: SH00000144<br>Model No: SHDB-DENIM-04</p><p>Product Type: Men's Casual Shirt<br>Fabric: 100% Denim<br>Fit: Regular Fit<br>Collar: Spread Collar<br>Sleeve: Full Sleeve<br>Color: Dark Blue</p>",
                'price' => 39.99,
                'brand' => 'Denim Culture',
                'img' => 'images/mens_denim_button_up_shirt.png',
                'status' => 1,
                'sales' => 0,
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
                'dis_rate' => 20.00
            ],
            [
                'category_id' => 2,
                'user_id' => 1,
                'name' => "Women's Sunglasses",
                'details' => "<p>Women's Sunglasses<br>Item Code: SG00002245<br>Material: Polycarbonate<br>Color: BLACK (As Given Picture)<br>Style: Cat-Eye</p><p>Trendy cat-eye sunglasses with UV protection. Lightweight and stylish for everyday wear.</p>",
                'price' => 89.99,
                'brand' => 'ShadyEyes',
                'img' => 'images/womens_sunglasses.png',
                'status' => 1,
                'sales' => 0,
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
                'dis_rate' => 0.00
            ],
            [
                'category_id' => 3,
                'user_id' => 1,
                'name' => "Men's Leather Wallet",
                'details' => "<p>Men's Leather Wallet<br>Item Code: MW00007890<br>Material: Genuine Leather<br>Color: BROWN (As Given Picture)<br>Style: Bi-Fold<br>Compartments: 6 Card Slots, 2 Bill Compartments</p><p>Classic leather wallet with multiple compartments. Compact and durable, perfect for everyday use.</p>",
                'price' => 99.99,
                'brand' => 'WalletMaster',
                'img' => 'images/mens_leather_wallet.png',
                'status' => 1,
                'sales' => 0,
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
                'dis_rate' => 0.00
            ],
            [
                'category_id' => 1,
                'user_id' => 1,
                'name' => "Men's Classic Blue Dress Shirt",
                'details' => "<p>Men's Classic Blue Dress Shirt<br>Item Code: SH00000141<br>Model No: SHCT-WHITE-01</p><p>Product Type: Men's Formal Shirt<br>Fabric: 100% Cotton<br>Fit: Regular Fit<br>Collar: Spread Collar<br>Cuff Style: Button Cuff<br>Style: Formal<br>Care: Machine Wash Cold<br>Color: White</p>",
                'price' => 45.99,
                'brand' => 'Elegant Apparel',
                'img' => 'images/mens_classic_blue_shirt.png',
                'status' => 1,
                'sales' => 0,
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
                'dis_rate' => 10.00
            ],
            [
                'category_id' => 1,
                'user_id' => 2,
                'name' => "Men's Slim Fit Checked Shirt",
                'details' => "<p>Men's Slim Fit Checked Shirt<br>Item Code: SH00000142<br>Model No: SHSF-CHECKED-02</p><p>Product Type: Men's Casual Shirt<br>Fabric: Cotton Blend<br>Fit: Slim Fit<br>Pattern: Checked<br>Collar: Button-Down Collar<br>Sleeve: Full Sleeve<br>Color: Blue/White</p>",
                'price' => 34.99,
                'brand' => 'Urban Style',
                'img' => 'images/mens_slim_fit_checked_shirt.png',
                'status' => 1,
                'sales' => 0,
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
                'dis_rate' => 5.00
            ],
        ]);
    }
}
