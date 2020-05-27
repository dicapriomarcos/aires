<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i < 10; $i++){
            DB::table('products')->insert([
                'name' => "Producto $i",
                'description' => 'asdasdasd asdasda dasd asdas dasdadadad asdad',
                'price' => 10,
                'category_id' => random_int( 1, 3)
            ]);
        }    
    }
        
}
