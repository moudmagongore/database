<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnexionController extends Controller
{
    public function formulaire()
    {
    	return view('connexions.connexion');

    }

    public function traitement()
    {

    	request()->validate([

    		'email' => ['required', 'email'],
    		'password' => ['required', ],

    	]);



    	$resultat = auth()->attempt([

    		'email' => request('email'),
    		'password' => request('password'),  /*password car c'est un mot clé au lieu de mot_de_passe*/
    	]);

    	if($resultat)
    	{
            Flashy('Vous êtes connecté avec succès!');
    		return redirect('/topics');

    	}

    	/*return redirect('/connexion');*/

    	return back()->withInput()->withErrors([

    		'email' => 'Vos identifiants sont incorrects',

    	]);
    }
}
