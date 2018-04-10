<?php

use Illuminate\Database\Seeder;

class shopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$nama_ikan = ['Ikan Nila Per KG'];
    	$kategori_id = ['4'];
    	$slug = ['ikan-nila-per-kg'];
    	$harga = ['1000'];
    	$ukuran = ['3"'];
    	$stok = ['1000'];
    	$foto = ['1523287243.jpg'];
    	$keterangan = ['Ikan Nila siap Panen'];

    	foreach ($nama_ikan as $indek => $isi) {
    		
	        DB::table('shop')->insert([
	        	'nama_ikan' => $isi,
	        	'kategori_id' => $kategori_id[$indek],
	        	'slug' => $slug[$indek],
	        	'harga' => $harga[$indek],
	        	'ukuran' => $ukuran[$indek],
	        	'stok' => $stok[$indek],
	        	'foto' => $foto[$indek],
	        	'keterangan' => $keterangan[$indek],
	        ]);
    	}
    }
}
