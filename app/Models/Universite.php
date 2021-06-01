<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Universite extends Model
{

    use HasFactory;
    public  function  parcour()
    {
        return $this->belongsTo(Parcour_annuelle::class,'parcour_id','id');
    }
    public  function  Etudiant()
    {
        return $this->hasMany(Etablissement::class,'id_univ','id');
    }
}
