<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TopicFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            /*'contenu_fichier' => ['required', 'file'],*/
            'titre' => 'required|min:2',
            'mot_cle' => 'required|min:2',
           /* 'contenu_lien' => 'required|min:2'*/
        ];
    }


    public function messages()
    {
        return[

            'titre.required' => 'Vous devez entrez un titre',
            'titre.min' =>'Vous devez entrez un titre au minimum de :min caractères',

            'mot_cle.required' => 'Vous devez entrez un mot cle',
            'mot_cle.min' =>'Vous devez entrez un mot cle au minimum de :min caractères',

            /*'contenu_lien.required' => 'Vous devez entrez un contenu lien',
            'contenu_lien.min' =>'Vous devez entrez un contenu lien au minimum de :min caractères',
*/
/*
            'contenu_fichier.required' => 'Vous devez entrez un contenu fichier',*/
           
        ];
        
    }
}
