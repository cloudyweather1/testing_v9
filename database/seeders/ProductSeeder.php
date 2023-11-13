<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'product_title' => 'Men\'s Modern-Fit Solid Sport Coat',
                'product_description' => '

                <p itemprop="description">Put a sophisticated spin on your jeans-and-a-button-down look with the athletic modern fit of this stylish sport coat from Michael Kors.</p>
<ul>
    <li>Two front patch pockets; left chest welt pocket; internal pockets</li>
    <li>Imported</li>
    <li>Two-button closure; four-button cuffs</li>
    <li>Notched lapel</li>
    <li>Side vents</li>
</ul>



                ',
                'product_price' => '102.99',
                'product_quantity' => 100,
                'product_image1' => 'images/products/product1.webp',
                'product_image2' => 'images/products/product1.webp',
                'product_image3' => 'images/products/product1.webp',
                'product_image4' => 'images/products/product1.webp',
                'product_status' => 'available',
                'product_category' => 'MICHAEL KORS',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_title' => 'Men\'s Modern Single Breasted, 2-Piece Suit Set',
                'product_description' => '

                <p itemprop="description">Features a leather finish and a tailored fit. Fully lined. RWS Certified. Comes with pants. Drop 8, which means there is an eight-inch difference between the chest and the waist. I.e., if your chest size is 38 inches, your suit will come with 30-inch waist pants. Requires minimal tailoring if any.</p>
                <ul>
                    <li>Peak lapel</li>
                    <li>Single button closure</li>
                    <li>Set includes- 1 coat and 1 pants</li>
                    <li>Hand stitching detail allover</li>
                    <li>Imported</li>
                </ul>

                ',
                'product_price' => '810.00',
                'product_quantity' => 100,
                'product_image1' => 'images/products/product2.webp',
                'product_image2' => 'images/products/product2.webp',
                'product_image3' => 'images/products/product2.webp',
                'product_image4' => 'images/products/product2.webp',
                'product_status' => 'available',
                'product_category' => 'MICHAEL KORS',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_title' => 'iPhone 13 Pro Max Silver - 256GB',
                'product_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dicta reiciendis odio consequuntur sunt magnam eum facilis quaerat dolor aperiam labore facere amet officiis, unde quae distinctio earum culpa omnis soluta voluptate tempora placeat?.',
                'product_price' => '1199.00',
                'product_quantity' => 100,
                'product_image1' => 'images/products/iphone1-1.jpg',
                'product_image2' => 'images/products/iphone1-2.jpg',
                'product_image3' => 'images/products/iphone1-3.jpg',
                'product_image4' => 'images/products/iphone1-4.jpg',
                'product_status' => 'available',
                'product_category' => 'MICHAEL KORS',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'product_title' => 'iPhone 13 Pro Graphite - 256GB',
                'product_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dicta reiciendis odio consequuntur sunt magnam eum facilis quaerat dolor aperiam labore facere amet officiis, unde quae distinctio earum culpa omnis soluta voluptate tempora placeat?.',
                'product_price' => '1099.00',
                'product_quantity' => 100,
                'product_image1' => 'images/products/iphone1-2.jpg',
                'product_image2' => 'images/products/iphone1-1.jpg',
                'product_image3' => 'images/products/iphone1-3.jpg',
                'product_image4' => 'images/products/iphone1-4.jpg',
                'product_status' => 'available',
                'product_category' => 'Graphite',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_title' => 'iPhone 13 Pro Gold - 256GB',
                'product_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dicta reiciendis odio consequuntur sunt magnam eum facilis quaerat dolor aperiam labore facere amet officiis, unde quae distinctio earum culpa omnis soluta voluptate tempora placeat?.',
                'product_price' => '1099.00',
                'product_quantity' => 100,
                'product_image1' => 'images/products/iphone1-3.jpg',
                'product_image2' => 'images/products/iphone1-1.jpg',
                'product_image3' => 'images/products/iphone1-2.jpg',
                'product_image4' => 'images/products/iphone1-4.jpg',
                'product_status' => 'available',
                'product_category' => 'Gold',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_title' => 'iPhone 12 Red - 256GB',
                'product_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dicta reiciendis odio consequuntur sunt magnam eum facilis quaerat dolor aperiam labore facere amet officiis, unde quae distinctio earum culpa omnis soluta voluptate tempora placeat?.',
                'product_price' => '849.00',
                'product_quantity' => 100,
                'product_image1' => 'images/products/iphone1-3.jpg',
                'product_image2' => 'images/products/iphone1-1.jpg',
                'product_image3' => 'images/products/iphone1-2.jpg',
                'product_image4' => 'images/products/iphone1-4.jpg',
                'product_status' => 'available',
                'product_category' => 'Red',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_title' => 'iPhone 12 Mini Purple - 128GB',
                'product_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dicta reiciendis odio consequuntur sunt magnam eum facilis quaerat dolor aperiam labore facere amet officiis, unde quae distinctio earum culpa omnis soluta voluptate tempora placeat?.',
                'product_price' => '649.00',
                'product_quantity' => 100,
                'product_image1' => 'images/products/iphone1-2.jpg',
                'product_image2' => 'images/products/iphone1-1.jpg',
                'product_image3' => 'images/products/iphone1-3.jpg',
                'product_image4' => 'images/products/iphone1-4.jpg',
                'product_status' => 'available',
                'product_category' => 'Purple',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_title' => 'iPhone Test',
                'product_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dicta reiciendis odio consequuntur sunt magnam eum facilis quaerat dolor aperiam labore facere amet officiis, unde quae distinctio earum culpa omnis soluta voluptate tempora placeat?.',
                'product_price' => '20.00',
                'product_quantity' => 100,
                'product_image1' => 'images/products/iphone1-2.jpg',
                'product_image2' => 'images/products/iphone1-1.jpg',
                'product_image3' => 'images/products/iphone1-3.jpg',
                'product_image4' => 'images/products/iphone1-4.jpg',
                'product_status' => 'available',
                'product_category' => 'Purple',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
