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
        // php artisan make:seed ProductTableSeeder

        $product = new \App\Product([
            'imagePath' => 'http://shakespeareandcompany.com/files/isbn/9780007448036.jpg',
            'title' => 'Game of throne',
            'description' => 'Super cool - at least as a child.',
            'price' => 60
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://shakespeareandcompany.com/files/isbn/9780007448036.jpg',
            'title' => 'Game of throne',
            'description' => 'Super cool - at least as a child.',
            'price' => 60
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://shakespeareandcompany.com/files/isbn/9780007448036.jpg',
            'title' => 'Game of throne',
            'description' => 'Super cool - at least as a child.',
            'price' => 60
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://shakespeareandcompany.com/files/isbn/9780007448036.jpg',
            'title' => 'Game of throne',
            'description' => 'Super cool - at least as a child.',
            'price' => 60
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://shakespeareandcompany.com/files/isbn/9780007448036.jpg',
            'title' => 'Game of throne',
            'description' => 'Super cool - at least as a child.',
            'price' => 60
        ]);
        $product->save();
    }
}
