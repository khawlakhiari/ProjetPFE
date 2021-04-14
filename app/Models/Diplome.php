<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diplome extends Model
{
    use HasFactory;
    protected  $table='diplomes';
    protected $fillable = [
        'id',
        'nom',
        'mention',
        'date',
        'img_dip',
        'pays',
        'etud_id',


    ];
    public $timestamps=false;
    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class,'etud_id');
    }
}
