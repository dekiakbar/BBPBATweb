<?php

use Illuminate\Database\Seeder;

use App\kategoriPerpus;
class KperpusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $insert = ['FAO','LHP','LTH','Kultur Pakan Alami','Petunjuk Teknis Budidaya Ikan Hias Air Tawar','Penyakit Ikan',
        			'Laporan Administrasi Perkantoran','Laporan Teknik Komputer','Ikan Nila','SIDAT','Ikan Patin',
        			'Kualitas Air','Kodok','Prosiding','Ikan Lele','Ikan Nilem','Laporan Tahunan','Ikan Koi','Ikan Baung',
        			'Ikan Graskap','Ikan Barbir','Ikan Kaan','Ikan Una','Ikan Mola'];
        foreach ($insert as $isi) {
        	DB::table('kategoriPerpus')->insert([
        		'nama_kategori' => $isi
        	]);
        }
    }
}
