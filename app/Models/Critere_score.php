<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Critere_score extends Model
{
    use HasFactory;
    protected  $table='criteres_score';
    protected $fillable = [
        'id',
        'critere',
        'coefficient',
        'master_id',
        'enseignant_id',


    ];
    public  function  Master()
    {
        return $this->belongsTo('App\Models\Master','master_id','id');
    }
    public  function  Enseignant()
    {
        return $this->belongsTo('App\Models\Enseignant','enseignant_id','id');
    }

}
