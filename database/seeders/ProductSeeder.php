<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Seeder;
use App\Models\Product;
  
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'DRESS',
                'description' => 'dress Brand',
                'image' => 'images/img4.webp',
                'price' => 10
            ],
            [
                'name' => 'jacket',
                'description' => 'jacket Brand',
                'image' => 'images/img6.webp',
                'price' => 50
            ],
            [
                'name' => 'DRESS',
                'description' => 'dress Brand',
                'image' => 'images/img3.webp',
                'price' => 40
            ],
            [
                'name' => 'PANTS',
                'description' => 'pants Brand',
                'image' => 'images/img2.webp',
                'price' => 20
            ],
            [
                'name' => 'Dress',
                'description' => 'dress Brand',
                'image' => 'images/IMF1.webp',
                'price' => 20
            ],
            [
                'name' => 'JACKET',
                'description' => 'jacket Brand',
                'image' => 'images/IMF2.webp',
                'price' => 20
            ],
            [
                'name' => 'COAT',
                'description' => 'coat Brand',
                'image' => 'images/IMF3.webp',
                'price' => 20
            ],
            [
                'name' => 'JEAN',
                'description' => 'jean Brand',
                'image' => 'images/IMF4.webp',
                'price' => 20
            ],
            
        ];
  
        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}