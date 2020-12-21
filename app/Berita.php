<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Berita extends Model
{
    protected $table ='berita';
    protected $fillable = ['Judul_berita','Tanggal_berita','Kutipan_berita','Artikel_berita','gambar_berita'];

    use SoftDeletes;
    protected $dates =['deleted_at'];
}
