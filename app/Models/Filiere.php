<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    use HasFactory;
    protected  $table='filieres';
    protected $fillable = [
        'id_f',
        'filere',
        'id_etab',


    ];
    public $timestamps=false;
    public  function  Etablissement()
    {
        return $this->belongsTo('App\Models\Etablissement','id_etab','id_f');
    }
}
