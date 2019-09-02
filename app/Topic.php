<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable =['titre', 'type_id', 'contenu_lien', 'contenu_fichier','utilisateur_id', 'mot_cle'];


    public function type()
	{
		return $this->belongsTo('App\Type');
	}

	public function utilisateur()
	{
		return $this->belongsTo('App\Utilisateur');
	}
}


