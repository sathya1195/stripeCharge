<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
Use App\Models\product;

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
            ['name'=>'Blueberry Greek Yogurt','price'=>18,
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit.Vel, varius habitant ornare ac rhoncus.','image'=>'1.jpg'],
            ['name'=>'Cadbury 5 Star Chocolate','price'=>38,
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit.Vel, varius habitant ornare ac rhoncus.','image'=>'2.jpg'],
            ['name'=>'Onion Flavour Potato','price'=>3,
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit.Vel, varius habitant ornare ac rhoncus.','image'=>'3.jpg'],
            ['name'=>'Salted Instant Popcorn','price'=>13,
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit.Vel, varius habitant ornare ac rhoncus.','image'=>'4.jpg'],
            ['name'=>'Kelloggs Original Cereals','price'=>38,
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit.Vel, varius habitant ornare ac rhoncus.','image'=>'5.jpg'],
            ['name'=>'Amul Butter - 500 g','price'=>70,
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit.Vel, varius habitant ornare ac rhoncus.','image'=>'6.jpg'],
            ['name'=>'Slurrp Millet Chocolate','price'=>40,
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit.Vel, varius habitant ornare ac rhoncus.','image'=>'1.jpg'],
            ['name'=>'Haldiras Sev Bhujia','price'=>38,
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit.Vel, varius habitant ornare ac rhoncus.','image'=>'2.jpg'],
            ['name'=>'Crushed Tomatoes','price'=>50,
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit.Vel, varius habitant ornare ac rhoncus.','image'=>'2.jpg'],
            ['name'=>'Roast Ground Coffee','price'=>23,
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit.Vel, varius habitant ornare ac rhoncus.','image'=>'2.jpg'],
        ];
        
        Product::insert($products);
    }
}
