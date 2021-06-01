<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annes_universitaire extends Model
{
    use HasFactory;
    protected  $table='annee_universitaire';
    public function  Annes(){
        return $this->belongsToMany(Etudiant::class,'etudiants_annes_univ','annee_id','etud_id');}

}
