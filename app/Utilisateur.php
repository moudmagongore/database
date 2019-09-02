<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;

class Utilisateur extends Model implements Authenticatable
{
	//Authenticatable : Pour Authentifier la classe Utilisateur
	use BasicAuthenticatable;

    protected $fillable = ['email', 'nom', 'prenom', 'mot_de_passe'];


    public function topics()
    {
        return $this->hasMany('App\Topic');
    }



     /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->mot_de_passe ;
    }


    /**
     * Get the column name for the "remember me" token.
     *
     * @return string
     */
    public function getRememberTokenName()
    {
        return '';
    }

}
