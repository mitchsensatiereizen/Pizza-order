<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('product')->insert([
        	'ProductName' => 'Bacon Gorgonzola',
        ]);
       DB::table('product')->insert([
        	'ProductName' => 'Pollo Pomodore',
        ]);
       DB::table('product')->insert([
        	'ProductName' => 'BBQ Mixed Grill',
        ]);
    }
}
