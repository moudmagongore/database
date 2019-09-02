<?php

namespace App\Http\Controllers;


use App\Http\Requests\TopicFormRequest;
use Illuminate\Http\Request;
use App\Topic;
use App\Type;
use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\Auth;


class TopicsController extends Controller
{
     public function index()
    { 

        $topics = Topic::all();
        return view('topics.index', compact('topics'));
    }



     public function formulaire()
    {
        $types = Type::all();
        return view('topics.create', compact('types'));
    }

    

    public function traitement(TopicFormRequest $request)
    {
    	 $file     = $request->file('contenu_fichier');

        if($file)
        {   
             $fileName = $file->getClientOriginalName();
             $path     = public_path('contenu_fichier');
             $file->move($path, $fileName);

        }else{

            $fileName = '';
        }
             $user = Auth::user();

            /* dd($user->id);*/

             Topic::create(['titre' => $request->titre, 'type_id' => $request->type, 'contenu_lien' => $request->contenu_lien, 'contenu_fichier' =>$fileName,'utilisateur_id' =>$user->id, 'mot_cle' => $request->mot_cle]);

              Flashy('Topic créer avec succès!');

             return redirect('/topics'); 
    }


}
