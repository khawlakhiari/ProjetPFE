<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;

class Etudiant extends Model implements Authenticatable
{
    use BasicAuthenticatable;
protected  $table='etudiants';


    protected $fillable = [
        'id',
        'email',
        'nom',
        'prenom',
        'email_verified',
        'password',
        'telephone',
        'cin',
        'master',
        'date_nais',
        'lieu',
        'ville',
        'codepostal',
        'profession',
        'societe',
        'adresse'

    ];
    public $timestamps=false;
   ///// begin relations ////

    public  function  Master()
    {
        return $this->belongsTo('App\Models\Master','master_id','id');
    }
    public function  dossier(){
        return $this->hasOne(Dossier::class,'etud_id','id');
    }
    public function  diplome(){
        return $this->hasOne(Diplome::class,'etud_id');
    }
    public function  Score(){
        return $this->hasOne(Score::class);
    }
    public function  parcour(){
        return $this->belongsToMany(Parcour_annuelle::class,'etudiants_parcours_annuelle','etud_id','parcour_id');}
    public function  Annes(){
        return $this->belongsToMany(Annes_universitaire::class,'etudiants_annes_univ','etud_id','annee_id');}



    /// end relations////

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->password;
    }

    /**
     * Get the token value for the "remember me" session.
     *
     * @return string|null
     */
    public function getRememberToken()
    {
        return '';
    }



}

