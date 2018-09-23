<?php

use Illuminate\Database\Seeder;

class TownshipTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('township')->insert([
        	'TownshipName' => 'Appingedam',
        ]);
       DB::table('township')->insert([
        	'TownshipName' => 'Bedum',
        ]);
       DB::table('township')->insert([
        	'TownshipName' => 'Bellingwedde',
        ]);
       DB::table('township')->insert([
        	'TownshipName' => 'Ten Boer',
        ]);
              DB::table('township')->insert([
        	'TownshipName' => 'Delfzijl',
        ]);
               DB::table('township')->insert([
        	'TownshipName' => 'Groningen',
        ]);
             DB::table('township')->insert([
        	'TownshipName' => 'Grootegast',
        ]);
             DB::table('township')->insert([
        	'TownshipName' => 'Haren',
        ]);
              DB::table('township')->insert([
        	'TownshipName' => 'Hoogezand-Sappermeer',
        ]);
               DB::table('township')->insert([
        	'TownshipName' => 'Leek',
        ]);
               DB::table('township')->insert([
        	'TownshipName' => 'Loppersum',
        ]);
               DB::table('township')->insert([
        	'TownshipName' => 'Marum',
        ]);
               DB::table('township')->insert([
        	'TownshipName' => 'Almere',
        ]);
               DB::table('township')->insert([
        	'TownshipName' => 'Stadskanaal',
        ]);
               DB::table('township')->insert([
        	'TownshipName' => 'Scheemda',
        ]);
               DB::table('township')->insert([
        	'TownshipName' => 'Slochteren',
        ]);
               DB::table('township')->insert([
        	'TownshipName' => 'Veendam',
        ]);
    }
}
