<?php

namespace App\Http\Controllers;

use App\Topic;
use Illuminate\Http\Request;

class RechercheController extends Controller
{
    public function recherche(Request $request)
    {
    	$topics = Topic::where('mot_cle', 'like', '%' . $request->mot_cle . '%')->get();

		return response()->json([
		    'topics' => $topics
		]);
    }

    
}
