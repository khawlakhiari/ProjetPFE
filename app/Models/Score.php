<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;
    protected  $table='scores';
    protected $fillable = [
        'id',
        'score',
        'id_etud',
    ];
    public $timestamps=false;
    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class,'id_etud');
    }
}
