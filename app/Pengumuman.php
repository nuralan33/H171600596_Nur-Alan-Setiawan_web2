<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class Pengumuman extends Model
{
    use SoftDeletes;

    protected $table ='pengumuman'; 
    
    protected $fillable = [
        'judul','isi','users_id','Kategori_Pengumuman_id',
    ];
    protected $casts=[
        'deleted_at'=>'datetime'

    ];
    
}
