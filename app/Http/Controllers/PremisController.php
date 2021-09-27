<?php

namespace App\Http\Controllers;
use App\Models\Premis;
use App\Models\Notis;
use Illuminate\Http\Request;

class PremisController extends Controller
{
    public function index()
    {
       $premis=Premis::all();
       return view('pages.senaraipremis',[
           'premis'=>$premis
        ]);    
    }

    public function create()
    {
       // dd($request);
        return view('pages.tambahpremis');
    }

    public function store(Request $request)
    {
        
        // $request->validate([
        //     'nama_premis'=>'nullable',
        //     'alamat' =>'nullable',
        //     ]);

        // dd($request);
        $premis= new Premis;
        
        $premis->nama_premis=$request->nama_premis;
        $premis->alamat=$request->alamat;
        $premis->jenis_perniagaan=$request->jenis_perniagaan;
        $premis->pemilik=$request->pemilik;
        $premis->no_tel=$request->no_tel;
        $premis->no_premis=$request->no_premis;
        $premis->poskod=$request->poskod;
        $premis->negeri=$request->negeri;
        
        //$premis->id_notis=$request->id_notis;

        $premis->save();
        
        return redirect('/premis');
    }

    public function show(Premis $premis)
    {
        //
    }

    public function edit($id)
    {

        $premis = Premis::find($id);
        return view('pages.maklumatpremis',[
            'premis'=>$premis]); 

    }

    public function update(Request $request, $id)
    {
        // $premis = Premis::find($id);
        // dd($premis);
        $premis = Premis::find($id);
        $premis->nama_premis=$request->nama_premis;
        $premis->alamat=$request->alamat;
        $premis->jenis_perniagaan=$request->jenis_perniagaan;
        $premis->pemilik=$request->pemilik;
        $premis->no_tel=$request->no_tel;
        $premis->poskod=$request->poskod;
        $premis->negeri=$request->negeri;
        $premis->no_premis=$request->no_premis;

        $premis->save();

        return redirect('/premis');

    }

    public function destroy(Premis $premis)
    {
        //
    }
}
