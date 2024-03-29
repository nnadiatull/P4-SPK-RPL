<?php

namespace Database\Seeders;

use App\Models\Pelanggan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pelanggan::create([
            'nama_pelanggan' => 'Azzahra',
            'alamat' => 'Beteng Sidomekar',
            'no_tlp' => '123'
        ]);
    }
}
