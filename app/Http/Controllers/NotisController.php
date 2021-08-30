<?php

namespace App\Http\Controllers;

use App\Models\Notis;
use App\Models\Premis;
use \PDF;



use Illuminate\Http\Request;

class NotisController extends Controller
{
    public function index()
    {
        $notis = Notis::where('status','Siap')->get();
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

        ]);

        // concat inputs
        $combined = 'JPBM/KL/TDI: 700-'.$request->input1.'/'.$request->input2.'/'.$request->input3.'/TDI'.'/'.$request->input4.'/2021';

        //To Upload image into DB
        $notisa=$request->file('img_notis')->store('notis_img'); 

        $notis = new Notis();
        $notis->tarikh_pemeriksaan=$request->tarikh_pemeriksaan;
        $notis->no_siri=$combined;
        $notis->jenis_ppk=$request->jenis_ppk;
        $notis->kesalahan=$request->kesalahan;
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
        $premis=Premis::all();
        return view('pages.edit_notis',[
            'notis'=>$notis, 'premis'=>$premis]);
        
    }

    public function update($id, Request $request)
    {
        $notis = Notis::find($id);

        $request->validate([
            '$img_notis' => 'nullable'
    
            ]);

        //To Upload image into DB
        $notisa=$request->file('img_notis')->store('notis_img');

        $notis->tarikh_pemeriksaan=$request->tarikh_pemeriksaan;
        $notis->id_premis=$request->id_premis;
        $notis->no_siri=$request->no_siri;
        $notis->jenis_ppk=$request->jenis_ppk;
        $notis->kesalahan=$request->kesalahan;
        $notis->lokasi=$request->lokasi;
        $notis->pembetulan=$request->pembetulan;
        $notis->seksyen=$request->seksyen;
        $notis->tempoh=$request->tempoh;
        $notis->status=$request->status;
        $notis->img_notis=$notisa;

        $notis->save();

        return redirect('/notis');
}

    public function papar_notis($id)
    {
        $notis= Notis::find($id);
        $premis=Premis::find($id);
        return view('pages.statusnotisborang',[
            'notis'=>$notis, 'premis'=>$premis
        ]);
        
    }

    

    public function destroy(Notis $notis)
    {
        //
    }
    public function status_siap(){
        $notis = Notis::where('status','Hantar')->get();
        $premis = Premis::all();
        return view('pages.statusnotishantar', [
            'notis' => $notis, 'premis'=>$premis
        ]);
    }

    
     public function jadual_minggu(){
         $notis = Notis::where('status', 'Hantar')->get();
         return view('pages.jadualminggu', [
                'notis' => $notis
            ]);
     }

     public function cetaknotis($id){
        // dd($id);
        $notis= Notis::find($id);
        $premis=Premis::find($id);
        $notis->status = "Hantar";
        $notis->save();

        // dd($notis);
        $pdf = PDF::loadView('pdf.cetaknotis', [
            'notis' => $notis, 'premis'=>$premis
        ]);
        return $pdf->download($notis->no_siri.'.pdf');

    }


    
}
