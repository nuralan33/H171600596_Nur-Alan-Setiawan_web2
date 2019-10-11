<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Berita extends Model
{
    use SoftDeletes;
    protected $table ='berita'; 
    
    protected $fillable = [
        'judul','isi','users_id','Kategori_Berita_id',
    ];
    protected $casts=[
        'deleted_at'=>'datetime'
    ];
}
