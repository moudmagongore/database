<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utilisateur;

class InscriptionsController extends Controller
{
    public function formulaire()
    {
    	return view('admin.inscription');
    }

    public function traitement()
    {

    	request()->validate([

			'email' => ['required', 'email'],
			'nom' => ['required', 'min:2'],
			'prenom' => ['required', 'min:2'],
			'password' => ['required', 'confirmed', 'min:8'],
			'password_confirmation' => ['required'],

		], [

			'password.min' => 'Pour des raison de securité, votre mot de passe doit comporter au moins :min caractères'
		]);


	    $utilisateur = Utilisateur::create([

			'email' => request('email'),
			'nom' => request('nom'),
			'prenom' => request('prenom'),
			'mot_de_passe' => bcrypt(request('password')),
		]);

	    return redirect('/connexion');
    }
}
