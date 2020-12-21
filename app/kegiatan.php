<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class kegiatan extends Model
{
    protected $table ='kegiatan';
    protected $fillable = ['judul_kegiatan','tanggal_kegiatan','jam_kegiatan','isi_kegiatan','gambar'];
    use SoftDeletes;
    protected $dates =['deleted_at'];
}
