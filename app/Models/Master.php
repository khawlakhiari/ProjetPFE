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
    public  function  Enseignant()
    {
        return $this->hasMany('App\Models\Enseignant','master_id','id');
    }
}
