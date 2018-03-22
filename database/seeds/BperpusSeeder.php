<?php

use Illuminate\Database\Seeder;

class BperpusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$judul 		= [
    					'Budidaya Ikan Hias','Budidaya Ikan Patin','Ternak Lele','Ternak Ikan Patik','Ternak Udang',
    					'Pembibitan Ikan Gurame','Pembibitan Ikan Nila','Pembuatan Bibit Ikan','Tingkah Laku Ikan','Ikan Hias Populer',
    					'Teknik Penangkapan ikan','Pengantar Ilmu Kelautan dan Perikanan','Teknik Penangkapan ikan','Ikan Hias Nusantara'
    				];
    	$pengarang  = [
    					'Kuncoro, Budi Eko.','Sutardjo, Sharif C','Purwanto, Dw','Mulyanto','Numberi, Freddy','Dr.Vicentius P. Siregar',
    					'Atkinon,L.P','Gunarso, Wisnu','Maarif, Syamsul','Rompas, Max Rizald','Mutis, Thoby','Anwar, Chairi','Berthold, Robert',
    					'TIM DKP'
    				];
    	$kategori_id= rand(1,24);
    	$tahun		= rand(2005,2018);

       		foreach ($judul as $indek => $data) {
       			DB::table('perpus')->insert([
		        	'judul_buku' 		=> $data ,
		        	'pengarang' 		=> $pengarang[$indek] ,
		        	'kategoriPerpus_id' => $kategori_id ,
		        	'tahun_terbit' 		=> $tahun ,
		        ]);
       		}
    }
}
