<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
    use HasFactory;
    protected  $table='enseignants';
    protected $fillable = [
        'id',
        'nom',
        'prenom',
        'email',
        'telephone',
        'password',
        'master_id',

    ];
    public $timestamps=false;
    public  function  Master()
    {
        return $this->belongsTo('App\Models\Master','master_id','id');
    }
    public  function  Critere_score()
    {
        return $this->hasMany('App\Models\Critere_score','enseignant_id','id');
    }
}
