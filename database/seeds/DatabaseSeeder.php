<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(kategoriSeeder::class);
        $this->call(tagSeeder::class);
        $this->call(adminSeeder::class);
        $this->call(artikelSeeder::class);
        $this->call(tamuSeeder::class);
        $this->call(KperpusSeeder::class);
        $this->call(BperpusSeeder::class);
        $this->call(PklSeeder::class);
        $this->call(juktekSeeder::class);
        $this->call(kshopSeeder::class);
        $this->call(shopSeeder::class);
        $this->call(newSeeder::class);
        $this->call(medsosSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(SliderSeeder::class);
    }
}
