<?php

use Illuminate\Database\Seeder;

class kshopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $k = ['Ikan Indukan','Benih Ikan','Kodok','Ikan'];

        foreach ($k as $kate) {
        	DB::table('Kshop')->insert([
        		'nama_kategori' => $kate
        	]);
        }
    }
}
