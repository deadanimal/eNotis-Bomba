<?php

namespace Database\Seeders;
use App\Models\Premis;
use Illuminate\Database\Seeder;

class PremisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Premis::create ([
        'nama_premis'=>'Akal Budi Resource',
        'alamat'=>'No 21, Jalan Bahagia 5, Selangor',
        'jenis_perniagaan'=>'2',
        'pemilik'=>'En Rahman',
        'no_tel'=>'012-2266039',
        'no_premis'=>'110'
        ]);

        Premis::create ([
            'nama_premis'=>'HBS Sdn Bhd',
            'alamat'=>'No 5, Jalan Tanjung, Perak',
            'jenis_perniagaan'=>'4',
            'pemilik'=>'En Lee',
            'no_tel'=>'012902111',
            'no_premis'=>'112'
            ]);
    }
}
