<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PesertaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $peserta = [
            [
                "id" => "1",
                "nama" => "budi",
                "idPeserta" => "191502502",
                "alamat" => "jl. rapak mahang",
                "noHp" => "082123511416",
                // "kelas_id" => 1,
                
            ],
            [
                "id" => "2",
                "nama" => "didi",
                "idPeserta" => "2009106117",
                "alamat" => "gg. unggul",
                "noHp" => "082123511422",
                // "kelas_id" => 2,
            ],
        ];

        foreach($peserta as $pst){
            \App\Models\Peserta::firstOrCreate($pst);
        }
    }
}
