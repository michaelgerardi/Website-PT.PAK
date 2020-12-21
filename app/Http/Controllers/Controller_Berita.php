<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Berita;

class Controller_Berita extends Controller
{
    public function index(){
        $data_Berita= Berita::all();
        return view('Berita.index',compact('data_Berita'));
    }


    public function view_insert(){
        return view('Berita.create');
    }

    public function create(Request $request){
        $request->validate([
            'Judul_berita'=>'required',
            'Tanggal_berita'=>'required',
            'Kutipan_berita'=>'required',
            'Artikel_berita'=>'required',
            'gambar_berita'=> 'required|image|max:2048'
        ]);
        $image_berita = $request->file('gambar_berita');
        $gambar_baru = rand() .'.'. $image_berita->getClientOriginalExtension();
        $image_berita->move(public_path('images'),$gambar_baru);
        $insert_data = array(
            'Judul_berita'=>$request->Judul_berita,
            'Tanggal_berita'=>$request->Tanggal_berita,
            'Kutipan_berita'=>$request->Kutipan_berita,
            'Artikel_berita'=>$request->Artikel_berita,
            'gambar_berita'=>$gambar_baru
        );
        Berita::create($insert_data);
        return redirect('View_berita');
    }

    public function Find_edit($id){
        $data_Berita = Berita::find($id);
        $data=[ 
            'tittle'=> 'Berita',
            'data_Berita'=>$data_Berita
        ];
        return view('Berita.edit',$data);
    }
    public function edit_berita($id, Request $request){
        $gambar_name = $request->hidden_gambar;
        $gambar = $request->file('gambar');
        if($gambar!= ''){
            $request->validate([
                'Judul_berita'=>'required',
                'Tanggal_berita'=>'required',
                'Kutipan_berita'=>'required',
                'Artikel_berita'=>'required',
                'gambar_berita'=> 'required|image|max:2048'
            ]);
             $gambar_baru = rand() .'.'. $image_berita->getClientOriginalExtension();
             $image_berita->move(public_path('images'),$gambar_baru);
        }else{
            $request->validate([
                'Judul_berita'=>'required',
                'Tanggal_berita'=>'required',
                'Kutipan_berita'=>'required',
                'Artikel_berita'=>'required',
            ]);
            $form_data =array(
                'Judul_berita'=>$request->Judul_berita,
                'Tanggal_berita'=>$request->Tanggal_berita,
                'Kutipan_berita'=>$request->Kutipan_berita,
                'Artikel_berita'=>$request->Artikel_berita,
                'gambar_berita' =>$gambar_name
            );
            Berita::Find($id)->update($form_data);
            return redirect()->route('Indexberita');
        }
    }

    public function delete_berita($id){
        $data = Berita::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function history()
    {
        $Berita = Berita::onlyTrashed()->get();
        return view('Berita.History', compact('Berita'));
    }

    public function hapus_permanen(){
        $Berita = Berita::onlyTrashed();
        $Berita->ForceDelete();
        return redirect()->back();
    }

    public function kembalikan($id)
    {
        $Berita = Berita::onlyTrashed()->where('id',$id);
        $Berita->restore();
    	return view('Berita.History', compact('Berita'));
    }

   

}
