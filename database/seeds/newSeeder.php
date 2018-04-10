<?php

use Illuminate\Database\Seeder;
use Faker\Factory as F;
class newSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
    	$f = F::create('id_ID');
        $limit = 15;
        $file = ['1523331934.pdf','1523331959.pdf','1523331989.pdf','1523332040.pdf'];

        for ($i=0; $i < $limit; $i++) { 
        	$n = $f->numberBetween($min=0,$max=3);
        	DB::table('news')->insert([
        		'judul' => $f->word,
        		'deskripsi' => $f->text,
        		'file' => $file[$n],
        	]);
        }
    }
}