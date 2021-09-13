<?php

namespace Database\Seeders;
use App\Models\Notis;
use Illuminate\Database\Seeder;

class NotisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Notis::create ([
            'tarikh_pemeriksaan'=>'2021-08-01',
            'jenis_ppk'=>'sistem penggera kebakaran utama',
            'no_siri'=>'JPBM/KL/TDI: 700-1/2/3/TDI/3/2021',
            'kesalahan'=>'tidak berfungsi',
            'aras'=>'aras 6',
            'lokasi'=>'depan',
            'pembetulan'=>'membaik pulih',
            'seksyen'=>'Seksyen 2(D)',
            'tempoh'=>'90 hari',
            'status'=>'Siap',
            'id_premis'=>'1',
            'img_notis'=>'/notis_img/TFQahgEVmdm38EmX5CpqsZeM2cMZeKnckwqhMn91.jpg'
        ]);

        Notis::create ([
            'tarikh_pemeriksaan'=>'2021-07-01',
            'jenis_ppk'=>'lampu kecemasan',
            'no_siri'=>'JPBM/KL/TDI: 700-1/2/4/TDI/4/2021',
            'kesalahan'=>'tiada',
            'aras'=>'aras 7',
            'lokasi'=>'belakang',
            'pembetulan'=>'mengadakan',
            'seksyen'=>'Seksyen 2(D)',
            'tempoh'=>'120 hari',
            'status'=>'Hantar',
            'id_premis'=>'2',
            'img_notis'=>'/notis_img/E7E2lB1waecd80u0WPUDal6v5V0OzqMsJGIUQcED.jpg'
        ]);
    }
}
