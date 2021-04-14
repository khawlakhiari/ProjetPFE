<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
    use HasFactory;
    protected  $table='masters';
    protected $fillable = [
        'id',
        'master',
        'type_m',
        'details'

    ];
    public $timestamps=false;
    ///relations////
    public  function  Enseignant()
    {
        return $this->hasMany('App\Models\Enseignant','master_id','id');
    }
    public  function  Etudiant()
    {
        return $this->hasMany('App\Models\Etudiant','master_id','id');
    }
    public  function  Critere_score()
    {
        return $this->hasMany('App\Models\Critere_score','master_id','id');
    }
    ///relations////
}
