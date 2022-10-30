<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class toko_models extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         
        DB::table('toko_models')->insert([
            [
                    "kode_barang" => "B9",
                    "nama_barang" => "Plampung",
                    "detail" => "Berbahan Karet",
                    "harga" => 80000,
                    "stock" => 38,
                    "foto" => "gambar1.jpg"
            ],

            [
                "kode_barang" => "B11",
                "nama_barang" => "Kaki Katak Renang",
                "detail" => "Tahan Lama",

                "harga" => 300000,
                "stock" => 20,
                "foto" => "gambar3.jpg"
           ],

           [
            "kode_barang" => "B12",
            "nama_barang" => "Topi Renang",
            "detail" => "Meminimalisir Air",
            "harga" => 50000,
            "stock" => 13,
            "foto" => "gambar4.jpg"
           ],

            [
                    "kode_barang" => "B10",
                    "nama_barang" => "Kacamata Air ",
                    "detail" => "Menahan air masuk",
                    "harga" => 150000,
                    "stock" => 23,
                    "foto" => "gambar2.jpg"
            ]
        ]);
       
    }
}

