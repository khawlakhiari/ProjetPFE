<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parcour_annuelle extends Model
{
    use HasFactory;
    protected  $table='parcours_annuelle';
    protected $fillable = [
        'id',
        'annee',

        'session',
        'resultat',
        'moyenne',


    ];

    public $timestamps=false;
    public  function  universite()
    {
        return $this->belongsTo(Universite::class,'parcour_id','id');
    }
    public function  parcour(){
        return $this->belongsToMany(Etudiant::class,'etudiants_parcours_annuelle','parcour_id','etud_id');}
}
