<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dossier extends Model
{
    use HasFactory;
    protected  $table='dossiers';
    protected $fillable = [
        'id',
        'bac',
        'anne_bac',
        'img_bac',
        'redouble',
        'reoriente',
        'img_etudiant',
  'id_etud',
 ];
    public $timestamps=false;
    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class,'id_etud');
    }
}
