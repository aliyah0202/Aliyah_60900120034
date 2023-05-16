<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OlahragaPopulerIndonesia;

use App\Http\Requests\OlahragaPopulerRequest;

class OlahragaPopulerIndonesiaController extends Controller
{
    public function index(){
        $OlahragaPopulerIndonesia = OlahragaPopulerIndonesia::get();
        return view('index', compact('OlahragaPopulerIndonesia'));
    }

    public function tambah(){
        return view('tambah');
    }

    public function edit($id){
        $OlahragaPopulerIndonesia = OlahragaPopulerIndonesia::where('id', $id)->first();
        return view('edit', compact('OlahragaPopulerIndonesia'));
    }

    public function lihat($id){
        $OlahragaPopulerIndonesia = OlahragaPopulerIndonesia::where('id', $id)->first();
        return view('lihat', compact('OlahragaPopulerIndonesia'));
    }

    public function store(OlahragaPopulerRequest $request){
        $OlahragaPopulerIndonesia = new OlahragaPopulerIndonesia();

        $OlahragaPopulerIndonesia->nama_olahraga = $request -> nama_olahraga;
        $OlahragaPopulerIndonesia->desk_singkat = $request -> desk_singkat;

        $OlahragaPopulerIndonesia->save();
        return redirect('/');   
    }
    


    public function update(OlahragaPopulerRequest $request, $id){
        $OlahragaPopulerIndonesia = OlahragaPopulerIndonesia::where('id', $id)->first();
        $OlahragaPopulerIndonesia->nama_olahraga = $request -> nama_olahraga;
        $OlahragaPopulerIndonesia->desk_singkat = $request -> desk_singkat;
       

        $OlahragaPopulerIndonesia->update();
        
        return redirect('/');   
    }

    public function hapus($id){
        $OlahragaPopulerIndonesia = OlahragaPopulerIndonesia::where('id', $id)->first();
        $OlahragaPopulerIndonesia->delete();
        
        return redirect('/');   
    }
}
