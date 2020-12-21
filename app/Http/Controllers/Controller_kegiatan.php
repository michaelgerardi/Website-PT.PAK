<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kegiatan;

class Controller_kegiatan extends Controller
{
    public function index(){
        $data_kegiatan = kegiatan::all();
        return view('Kegiatan.index',compact('data_kegiatan'));
    }

    public function view_insert_kegiatan(){
        return view('Kegiatan.create');
    }

    public function create(Request $request){
        $request->validate([
            'judul_kegiatan'=>'required',
            'tanggal_kegiatan'=>'required',
            'jam_kegiatan'=>'required',
            'isi_kegiatan'=> 'required',
            'gambar'=>'required|image|max:2048'
        ]);
        $image = $request->file('gambar');
        $new_image = rand().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('images'),$new_image);
        $insert_data = array(
            'judul_kegiatan' => $request->judul_kegiatan,
            'tanggal_kegiatan'=>$request->tanggal_kegiatan,
            'jam_kegiatan'=>$request->jam_kegiatan,
            'isi_kegiatan'=>$request->isi_kegiatan,
            'gambar'=>$new_image
        );
        kegiatan::create($insert_data);
        return redirect('View_kegiatan');
    }

    public function Find_edit_kegiatan($id){
        $data_kegiatan = kegiatan::find($id);
        $data=[
            'tittle'=> 'kegiatan',
            'data_kegiatan'=>$data_kegiatan
        ];
        return view('Kegiatan.edit',$data);
    }

    public function edit_kegiatan($id,Request $request){
        $gambar_name = $request->hidden_gambar;
        $gambar = $request->file('gambar');
        if($gambar!= ''){
            $request->validate([
                'judul_kegiatan'=>'required',
                'tanggal_kegiatan'=>'required',
                'jam_kegiatan'=>'required',
                'isi_kegiatan'=> 'required',
                'gambar'=>'image|max:2048'
            ]);
            $new_image = rand().'.'.$image->getClientOriginalExtension();
            $gambar->move(public_path('images'),$new_image);
        }else{
            $request->validate([
                'judul_kegiatan'=>'required',
                'tanggal_kegiatan'=>'required',
                'jam_kegiatan'=>'required',
                'isi_kegiatan'=> 'required'
            ]);
            $form_data =array(
                'judul_kegiatan' =>$request->judul_kegiatan,
                'tanggal_kegiatan' => $request->tanggal_kegiatan,
                'jam_kegiatan'=>$request->jam_kegiatan,
                'isi_kegiatan' =>$request->isi_kegiatan,
                'gambar' =>$gambar_name
            );
            kegiatan::find($id)->update($form_data);
            return redirect()->route('Indexkegiatan');
        }
    }

    public function Delete_kegiatan($id){
        $data_kegiatan = kegiatan::find($id);
        $data_kegiatan->delete();
        return redirect()->back();
    }
    public function history_kegiatan()
    {
         $kegiatan = kegiatan::onlyTrashed()->get();
        return view('Kegiatan.History', compact('kegiatan'));
    }

    public function hapus_permanen_kegiatan(){
        $kegiatan = kegiatan::onlyTrashed();
        $kegiatan->ForceDelete();
        return redirect()->back();
    }
}
