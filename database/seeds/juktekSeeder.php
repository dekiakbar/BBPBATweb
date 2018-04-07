<?php

use Illuminate\Database\Seeder;

class juktekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $judul = [
        	'Ternak Ikan Lele','Budidaya Ikan Nila','Cara merawat ikan Koi','Cara merawat ikan Lele','Cara merawat ikan Nila'
        ];
        $slug = ['cara-merawak-ikan-koi','ternak-ikan-lele','budidaya-ikan-nila','budidaya-ikan-koi','budidaya-ikan-Lele'];
        $foto = ['1523109912.jpg','1523110086.jpg','1523110320.jpg','1523110086.jpg','1523110086.jpg'];
        $file = ['1523110320.pdf','1523110086.pdf','1523109912.pdf','1523109912.pdf','1523109912.pdf'];
        $kutipan =
        		'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.';

        foreach($judul as $indek => $isi) {
        	DB::table('juktek')->insert([
        		'judul_juktek' => $isi,
    			'slug' => $slug[$indek],
    			'kutipan' => $kutipan,
    			'file' => $file[$indek],
    			'foto' => $foto[$indek],
        	]);
        }
    }
}
