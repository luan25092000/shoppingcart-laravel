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
    }
}
