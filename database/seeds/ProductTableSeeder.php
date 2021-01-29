<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => './img/slide/product/product1.png',
            'name' => 'CHIN',
            'price' => 880000,
            'color' => "white"
        ]);

        $product->save();

        $product = new \App\Product([
            'imagePath' => './img/slide/product/product2.png',
            'name' => 'CHIN',
            'price' => 880000,
            'color' => "black"
        ]);
        
        $product->save();

        $product = new \App\Product([
            'imagePath' => './img/slide/product/product3.png',
            'name' => 'CHIN',
            'price' => 990000,
            'color' => "white"
        ]);
        
        $product->save();

        $product = new \App\Product([
            'imagePath' => './img/slide/product/product4.png',
            'name' => 'CHIN',
            'price' => 990000,
            'color' => "black"
        ]);
        
        $product->save();

        $product = new \App\Product([
            'imagePath' => './img/sofa1.webp',
            'name' => 'ELegant Combo',
            'price' => 880000,
            'color' => NULL
        ]);

        $product->save();

        $product = new \App\Product([
            'imagePath' => './img/sofa5.webp',
            'name' => 'SIMPLE COMBO',
            'price' => 980000,
            'color' => NULL
        ]);
        
        $product->save();

        $product = new \App\Product([
            'imagePath' => './img/sofa8.webp',
            'name' => 'CHIN',
            'price' => 1080000,
            'color' => NULL
        ]);
        
        $product->save();

        $product = new \App\Product([
            'imagePath' => './img/sofa6.webp',
            'name' => 'CHIN',
            'price' => 1180000,
            'color' => NULL
        ]);
        
        $product->save();
    }
}
