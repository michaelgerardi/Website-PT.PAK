<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use App\kegiatan;
Use DB;

class Controller_View extends Controller
{
    public function View_Website(){
        $tampil_berita = Berita::all()->sortByDesc('id')->take(3);
        return view('Layouts.layout',compact('tampil_berita'));
    }
    public function tampil_berita($id){
        $view_berita = Berita::where('id',$id)->get();
        return view('Layouts.view_berita',compact('view_berita'));
    }
    public function tampil_kegiatan($id){
        $view_kegiatan = kegiatan::where('id',$id)->get();
        return view('Layouts.view_kegiatan',compact('view_kegiatan'));
    }
    public function view_misi_visi(){
        return view('Layouts.Visi&Misi');
    }
    public function sambutan(){
        return view('Layouts.sambutan');
    }
    public function product(){
        return view('Layouts.product');
    }
    public function ISO(){
        return view('Layouts.sertifikatiso');
    }
    public function sejarah(){
        return view('Layouts.sejarah');
    }
    public function struktur(){
        return view('Layouts.struktur');
    }
    public function cp(){
        return view('Layouts.cp');
    }
    public function halal(){
        return view('Layouts.sertifikathalal');
    }
    public function view_kegiatan(){
        return view('Layouts.slider');
    }
}

