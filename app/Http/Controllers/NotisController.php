<?php

namespace App\Http\Controllers;

use App\Models\Notis;
use App\Models\Premis;
use \PDF;

use DateTime;


use Illuminate\Http\Request;

class NotisController extends Controller
{
    public function index()
    {
        $notis = Notis::where('status', 'Siap')->get();
        $premis = Premis::all();
        return view('pages.statusnotis', [
            'notis' => $notis, 'premis'=>$premis
        ]);
    }

    public function create()
    {
        $notis = Notis::all();
        $premis = Premis::all();
        return view('pages.notisbaru', [
            'notis' => $notis, 'premis'=>$premis
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
        'tarikh_pemeriksaan' => 'nullable',
        'no_siri' => 'nullable',
        'jenis_ppk' => 'nullable',
        'kesalahan' => 'nullable',
        'lokasi' => 'nullable',
        'pembetulan' => 'nullable',
        'seksyen' => 'nullable',
        'tempoh' => 'nullable',
        'img_notis'=>'nullable',
        'aras'=>'nullable'

        ]);

        // concat inputs
        $combined = 'JBPM/KL/TDI: 700-'.$request->input1.'/'.$request->input2.'/'.$request->input3;
        $aras_notis = 'aras '.$request->aras;

        //To Upload image into DB
        $notisa=$request->file('img_notis')->store('notis_img');

        $notis = new Notis();
        $notis->tarikh_pemeriksaan=$request->tarikh_pemeriksaan;
        $notis->no_siri=$combined;
        $notis->jenis_ppk=$request->jenis_ppk;
        $notis->tujuan=$request->tujuan;
        $notis->kesalahan=$request->kesalahan;
        $notis->aras=$aras_notis;
        // $notis->aras=$request->aras;
        $notis->lokasi=$request->lokasi;
        $notis->pembetulan=$request->pembetulan;
        $notis->seksyen=$request->seksyen;
        $notis->tempoh=$request->tempoh;
        $notis->img_notis=$notisa;
        $notis->status="Siap";
        $notis->id_premis=$request->id_premis;
        
        

        $notis->save();
        return redirect('/notis');
    }

    public function show(Notis $notis)
    {
        // return view('notisan.show', [
        //     'notisan' => $notis,
        // ]);
    }

    public function edit($id)
    {
        $notis= Notis::find($id);
        $premis=Premis::where('id', $notis->id_premis)->get();
        return view('pages.edit_notis', [
            'notis'=>$notis, 'premis'=>$premis]);
    }

    public function update($id, Request $request)
    {
        $notis = Notis::find($id);

        // $request->validate([
        //     '$img_notis' => 'nullable'
    
        //     ]);

        //To Upload image into DB
        
        $notis->tarikh_pemeriksaan=$request->tarikh_pemeriksaan;
        $notis->id_premis=$request->id_premis;
        $notis->no_siri=$request->no_siri;
        $notis->jenis_ppk=$request->jenis_ppk;
        $notis->kesalahan=$request->kesalahan;
        $notis->aras=$request->aras;
        $notis->lokasi=$request->lokasi;
        $notis->pembetulan=$request->pembetulan;
        $notis->seksyen=$request->seksyen;
        $notis->tempoh=$request->tempoh;
        $notis->status=$request->status;
        
        // $notis->img_notis=$request->img_notis;
        if ($request->hasFile('img_notis')) {
            $notisa=$request->file('img_notis')->store('notis_img');
            $notis->img_notis=$notisa;
        }

        $notis->save();

        return redirect('/notis');
    }

    public function papar_notis($id)
    {
        $notis= Notis::find($id);
        $premis=Premis::where('id', $notis->id_premis)->get();
        return view('pages.statusnotisborang', [
            'notis'=>$notis, 'premis'=>$premis
        ]);
    }

    

    public function destroy(Notis $notis)
    {
        //
    }

    public function status_siap()
    {
        $notis = Notis::where('status', 'Hantar')->get();
        $premis = Premis::all();
        return view('pages.statusnotishantar', [
            'notis' => $notis, 'premis'=>$premis
        ]);
    }

    
    public function jadual_minggu()
    {
        $notis = Notis::where('status', 'Hantar')->get();
        return view('pages.jadualminggu', [
                'notis' => $notis
            ]);
    }



    public function cetaknotis($id)
    {

        // dd($id);
        $notis= Notis::find($id);
        $premis=Premis::where('id', $notis->id_premis)->get();

        if ($notis->jenis_ppk == 'pintu api') {

            if ($notis->kesalahan == 'tiada') {
                $notis->tujuan="Memastikan pintu api sentiasa berada dalam keadaan baik dan hendaklah ditutup pada setiap masa";
                $notis->pembetulan="Mengadakan pintu api di bahagian $notis->lokasi premis";
                $notis->seksyen="Seksyen 2 Tafsiran Bahaya Kebakaran (C) yang boleh menyebabkan ancaman kepada keselamatan nyawa jika berlaku kebakaran ";
            }

            if ($notis->kesalahan == 'rosak') {
                $notis->tujuan='Memastikan pintu api sentiasa berada dalam keadaan baik dan hendaklah ditutup pada setiap masa';
                $notis->seksyen='Seksyen 2 Tafsiran Bahaya Kebakaran (D)yang boleh menyebabkan ancaman kepada keselamatan nyawa dan harta jika berlaku kebakaran ';
                $notis->pembetulan="Membaik pulih pintu api di bahagian $notis->lokasi premis mengikut undang undang yang telah diperuntukan oleh Jabatan Bomba";
            }
        } 
        
        elseif ($notis->jenis_ppk == 'alat pemadam api') {
            $notis->tujuan="Memastikan alat pemadam api mudah alih disediakan mengikut Piawaian Malaysia 1539, dan sentiasa berada dalam keadaan baik";
        
            if ($notis->kesalahan == 'tiada') {
                $notis->pembetulan="Mengadakan alat pemadam api di bahagian $notis->lokasi";
                $notis->seksyen="Seksyen 2 Tafsiran Bahaya Kebakaran (C) yang menyebabkan tindakan pemadaman kebakaran di peringkat awal tidak dapat dibuat serta merta jika berlaku kebakaran";
            } 
            elseif ($notis->kesalahan=='tidak diselenggara') {
                $notis->pembetulan="Membuat penyelenggaraan alat pemadam api mudah alih di bahagian $notis->lokasi";
                $notis->seksyen="Seksyen 2 Tafsiran Bahaya Kebakaran (D) yang menyebabkan tindakan pemadaman kebakaran di peringkat awal tidak dapat dibuat serta merta jika berlaku kebakaran";
            } 
            
            elseif ($notis->kesalahan=='tamat tempoh dan tidak diselenggara') {
                $notis->pembetulan="Membuat penyelenggaraan pemadam api mudah alih di bahagian $notis->lokasi";
                $notis->seksyen="Seksyen 2 Tafsiran Bahaya Kebakaran (D) yang menyebabkan tindakan pemadaman kebakaran di peringkat awal tidak dapat dibuat serta merta jika berlaku kebakaran";
            } 
            
            elseif ($notis->kesalahan=='rosak') {
                $notis->pembetulan='Memastikan alat pemadam api mudah alih disediakan mengikut Piawaian Malaysia 1539, dan sentiasa berada dalam keadaan baik';
                $notis->seksyen = "Seksyen 2 Tafsiran Bahaya Kebakaran (D) yang menyebabkan tindakan pemadaman kebakaran di peringkat awal tidak dapat dibuat serta merta jika berlaku kebakaran";
            }
        } 
        
        elseif ($notis->jenis_ppk=='lampu kecemasan') {
            $notis->tujuan="Memastikan lampu kecemasan sentiasa berada dalam keadaan baik dan mematuhi Piawaian Malaysia (MS) 619";

            if ($notis->kesalahan=='tiada') {
                $notis->pembetulan="Mengadakan lampu kecemasan di bahagian $notis->lokasi premis";
                $notis->seksyen='Seksyen 2 Tafsiran Bahaya Kebakaran (C) yang boleh menyebabkan ancaman kepada keselamatan nyawa jika berlaku kebakaran';

            } elseif ($notis->kesalahan=='tidak berfungsi') {
                $notis->seksyen='Seksyen 2 Tafsiran Bahaya Kebakaran (D) yang boleh menyebabkan ancaman kepada keselamatan nyawa jika berlaku kebakaran';
                $notis->pembetulan="Membaik pulih lampu kecemasan di bahagian $notis->lokasi premis";
            }
        } 
        
        elseif ($notis->jenis_ppk=="tanda tempat keluar kecemasan") {
            $notis->tujuan="Memastikan tanda tempat keluar kecemasan berfungsi dan berada dalam keadaan baik setiap masa";

            if ($notis->kesalahan='tiada') {
                $notis->pembetulan="Mengadakan tanda tempat keluar kecemasan di bahagian $notis->lokasi premis";
                $notis->seksyen='Seksyen 2 Tafsiran Bahaya Kebakaran (C) yang boleh menyebabkan ancaman kepada keselamatan nyawa jika berlaku kebakaran';

            } 
            else if($notis->kesalahan='tidak berfungsi'){
                $notis->pembetulan="Membaik pulih tanda tempat keluar kecemasan di bahagian $notis->lokasi premis";
                $notis->seksyen="Seksyen 2 Tafsiran Bahaya Kebakaran (D) yang boleh menyebabkan ancaman kepada keselamatan nyawa";
            }
        } 

        elseif ($notis->jenis_ppk=="pemegang injap sistem gelung hos") {
                if ($notis->kesalahan="tidak berfungsi") {
                    $notis->pembetulan="Membaik pulih pemegang injap sistem gelung hos di bahagian $notis->lokasi premis";
                    $notis->tujuan="Memastikan sistem gelung hos sentiasa berada dalam keadaan baik dan boleh digunakan pada bila-bila masa";
                    $notis->seksyen="Seksyen 2 Tafsiran Bahaya Kebakaran (D) yang menyebabkan tindakan pemadaman kebakaran di peringkat awal tidak dapat dibuat serta merta jika berlaku kebakaran";
                }
                
        }
        
        elseif ($notis->jenis_ppk=="tangga") {

            $notis->tujuan="Memastikan tiada halangan pada tangga jalan keluar untuk mencegah kemasukan asap bagi tujuan pelepasan diri dan selamat dilalui sekiranya berlaku kebakaran";
            $notis->seksyen="Seksyen 2 Tafsiran Bahaya Kebakaran (A) yang menyebabkan ancaman kepada keselamatan nyawa sekiranya berlaku kebakaran";
        } 

        elseif ($notis->jenis_ppk=="panel penggera kebakaran") {
            $notis->pembetulan="Membaik pulih panel penggera kebakaran di bahagian $notis->lokasi premis";
            $notis->tujuan="Memastikan panel penggera kebakaran berfungsi dan sentiasa berada dalam keadaan baik";
            $notis->seksyen="Seksyen 2 Tafsiran Bahaya Kebakaran (D) yang boleh menyebabkan ancaman kepada keselamatan nyawa jika berlaku kebakaran ";
        } 

        elseif ($notis->jenis_ppk=="sistem penggera kebakaran utama") {
            if ($notis->kesalahan ="tidak berfungsi"){
                $notis->pembetulan="Membaikpulih sistem penggera kebakaran utama di $notis->lokasi";
                $notis->tujuan="Memastikan sistem penggera kebakaran utama berfungsi dan sentiasa berada dalam keadaan baik";
                $notis->seksyen="Seksyen 2 Tafsiran Bahaya Kebakaran (D) yang boleh menyebabkan amaran awal tidak dapat disampaikan";
            }

        } 

        elseif ($notis->jenis_ppk=="pili bomba") {
            if ($notis->kesalahan="tidak berfungsi") {
                $notis->pembetulan="Membaik pulih pili bomba di bahagian $notis->lokasi premis";
                $notis->seksyen="Seksyen 2 Tafsiran Bahaya Kebakaran (D) yang boleh menyebabkan ancaman kepada keselamatan nyawa jika berlaku kebakaran";
                $notis->tujuan="Memastikan pili bomba premis sentiasa berada dalam keadaan baik dan boleh digunakan pada bila-bila masa";
            }
        } 

        elseif ($notis->jenis_ppk=="Pam Standby") {
            $notis->seksyen="Seksyen 2 Tafsiran Bahaya Kebakaran (D) yang boleh menyebabkan ancaman kepada keselamatan nyawa jika berlaku kebakaran";
            $notis->tujuan="Memastikan Pam Standby premis sentiasa berada dalam keadaan baik dan boleh digunakan pada bila-bila masa";
            $notis->pembetulan="Membaik pulih Pam Standby bagi sistem gelung hos di bahagian $notis->lokasi premis";
        } 

        elseif ($notis->jenis_ppk=="Pam Duty") {
            $notis->seksyen="Seksyen 2 Tafsiran Bahaya Kebakaran (D) yang boleh menyebabkan ancaman kepada keselamatan nyawa jika berlaku kebakaran";
            $notis->pembetulan="Membaik pulih Pam Duty bagi sistem gelung hos di bahagian $notis->lokasi premis";
            $notis->tujuan="Memastikan Pam Duty premis sentiasa berada dalam keadaan baik dan boleh digunakan pada bila-bila masa";
        } 

        elseif ($notis->jenis_ppk="Pam Jokey") {
            $notis->seksyen="Seksyen 2 Tafsiran Bahaya Kebakaran (D) yang boleh menyebabkan ancaman kepada keselamatan nyawa jika berlaku kebakaran";
            $notis->pembetulan="Membaik pulih Pam Jokey bagi sistem gelung hos di bahagian $notis->lokasi premis";
            $notis->tujuan="Memastikan Pam Jokey premis sentiasa berada dalam keadaan baik dan boleh digunakan pada bila-bila masa";
        }


        //dd($notis->tarikh_pemeriksaan);
        setlocale(LC_ALL, 'ms_MY');
        $date = new DateTime($notis->tarikh_pemeriksaan);
        $tarikh_pemeriksaan = $date->format('d/m/Y');

        $notis->status = "Hantar";
        $notis->save();

        // dd($premis);
        $pdf = PDF::loadView('pdf.cetaknotis', [
            'notis' => $notis, 'premis'=>$premis, 'tarikh_pemeriksaan'=> $tarikh_pemeriksaan])->setOptions(['defaultFont' => 'Times New Roman']);
        // $pdf = PDF::loadView('reports.today', ['Data' => $Data])->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download($notis->no_siri.'.pdf');
    }
}