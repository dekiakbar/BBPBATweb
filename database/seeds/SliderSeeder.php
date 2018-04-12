<?php

use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $limit = 5;

        for ($i=0; $i < $limit; $i++) { 
        	Db::table('slider')->insert([
        		'judul' => "judul".$i,
        		'foto' => $i."1234.jpg",
        		'deskripsi' => "komentar ".$i,
        	]);
        }
    }
}
