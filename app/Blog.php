<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
  //  protected $tabel='blog123'; //custom nama tabelnya
   // public $timestamps=false;
    //whitelist untuk jalankan field
    public $fillable =['title','descriptions'];
    //blacklist untuk entrian
    public $guarded=['id','created_at']; // buat proteksi


}
