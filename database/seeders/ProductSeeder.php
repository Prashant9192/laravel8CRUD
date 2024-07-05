<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Models\Product([
            'name' => 'Product 1',
            'details' => 'Product 1 detail'
        ]);

        $product->save();
        $product = new \App\Models\Product([
            'name' => 'Product 2',
            'details' => 'Product 2 detail'
        ]);

        $product->save();
        $product = new \App\Models\Product([
            'name' => 'Product 3',
            'details' => 'Product 3 detail'
        ]);

        $product->save();
        $product = new \App\Models\Product([
            'name' => 'Product 4',
            'details' => 'Product 4 detail'
        ]);

        $product->save();
        $product = new \App\Models\Product([
            'name' => 'Product 5',
            'details' => 'Product 5 detail'
        ]);

        $product->save();
        $product = new \App\Models\Product([
            'name' => 'Product 6',
            'details' => 'Product 6 detail'
        ]);

        $product->save();
        $product = new \App\Models\Product([
            'name' => 'Product 7',
            'details' => 'Product 7 detail'
        ]);

        $product->save();
    }
}
