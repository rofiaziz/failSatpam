<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker=Faker::create('id_ID');
        //library faker membuat data dari data INDONESIA 

        for($i = 1; $i <= 50; $i++){

        DB::table('pegawai')->insert([
        	'nama_pegawai' => $faker->name ,
        	'jabatan_pegawai' => $faker->jobTitle,
        	'umur_pegawai' => $faker->numberBetween(21,40),
        	'alamat_pegawai' => $faker->address
        	]);
    }
}
}
