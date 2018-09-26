<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZipcodeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fileurls = fopen('public/files/postcode-tabel.mdb', 'r');
        $filehash = fopen('public/files/postcode-tabel.mdb', 'r');

        while (($row = fgetcsv($fileurls, 0, ',')) !=FALSE){
            DB::table('zipcdde')->insert(
            array(
                'url' => $row,
            )
            );
        }
        while (($row = fgetcsv($filehash, 0, ',')) !=FALSE){
            DB::table('zipcode')->insert(
            array(
                'hash' => $row,
            )
            );
            }
    }
}
