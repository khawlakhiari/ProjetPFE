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
protected $primaryKey='id';

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
   ///// begin relations ////
    public function  dossier(){
        return $this->hasOne(Dossier::class);
    }
    public function  diplome(){
        return $this->hasOne(Diplome::class);
    }
    public function  Score(){
        return $this->hasOne(Score::class);
    }
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

