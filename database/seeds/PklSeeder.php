<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class PklSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $gol = ['A','B','AB','O'];
        $kegiatan= ['Magang','Magang Khusus','PKL/KPA','PSG','Penelitian'];

        $limit = 40;

        for($i=0;$i <= $limit;$i++)
        {
        	DB::table('pkl')->insert([
        		'nama_kegiatan' => $faker->randomElement($kegiatan),
    			'nama_lengkap' => $faker->name,
    			'email' => $faker->email,
    			'ttl' => $faker->city.','.$faker->date($format = 'Y-m-d', $max = 'now'),
    			'alamat' => $faker->address,
    			'no' => $faker->phoneNumber,
    			'nama_instansi' => $faker->word,
    			'alamat_instansi' => $faker->address,
    			'alamat_tinggal' => $faker->address,
    			'judul_kegiatan' =>$faker->word,
    			'mulai' => $faker->date($format = 'Y-m-d', $max = 2010),
    			'selesai' => $faker->date($format = 'Y-m-d', $max = 'now'),
    			'golongan' => $faker->randomElement($gol),
        	]);
        }
    }
}
