<?php

use Illuminate\Database\Seeder;

class medsosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medsos')->insert([
        	'fb' => "http://example.com",
        	'tweet' => "http://example.com",
        	'google' => "http://example.com",
        	'ig' => "http://example.com",
        ]);
    }
}
