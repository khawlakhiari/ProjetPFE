<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etablissement extends Model
{
    use HasFactory;
    public $timestamps=false;
    public  function  Master()
    {
        return $this->belongsTo(Universite::class,'id_univ','id');
    }
    public  function  Filiere()
    {
        return $this->hasMany('Filiere','id_etab','id_f');
    }
}
