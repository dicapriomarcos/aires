<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(['name' => 'Sandwiches']);
        DB::table('categories')->insert(['name' => 'Platos']);
        DB::table('categories')->insert(['name' => 'Postres']);
    }
}
