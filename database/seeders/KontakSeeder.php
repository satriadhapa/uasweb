<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KontakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("kontaks")->insert([
            'nama'=> "Satria",
            'email'=> "satriadhapa@gmail.com",
            'no_hp'=> "0812902066",
            'kategori'=> "datascientist"
        ]);
    }
}
