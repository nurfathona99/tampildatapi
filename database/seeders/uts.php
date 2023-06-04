<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class kelas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $uts = [
        'id' => '01',
        'nama_pengeluaran' => 'aku',
        'keterangan' => 'buku',
        'biaya' => '20000',
        'tanggal_transaksi' => '19',
        'nama_konsumen' => 'saya',
        'email_konsumen' => 'saya@gmail',
        'created_at' => new \DateTime ,
        'updated_at' => null
        ];
        \DB::table('additional_costs')->insert ($uts);
    }
}
