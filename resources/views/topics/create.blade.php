@extends('layouts.master')

@section('container')

	<div class="container col-md-8 col-md-offset-2 col-xs-12">
		
			<h1>Créer un topic</h1>

			<form action=" {{route('traitement')}} " method="POST" 
			enctype="multipart/form-data">

				{{csrf_field()}}



				<div class="form-group {{$errors->has('titre') ? 'has-error' : '' }}">
					<label for="titre" class="control-label">Titre</label>

					<input type="text" name="titre" id="titre" value=" {{old('titre')}}" class="form-control">

					{!! $errors->first('titre', '<p class="error">:message</p>')!!}
				</div>




				<div class="form-group">
					<label class="control-label">Type</label>
					<select class="form-control" name="type" id="type">
						@foreach($types as $type)
						<option value="{{ $type->id }}"> {{ $type->nom }} </option>
						@endforeach
					</select>
				</div>



				<div class="form-group {{$errors->has('contenu_lien') ? 'has-error' : '' }}" id="contenu_liens">
					<label for="contenu_lien" class="control-label">Contenu lien</label>

					<input type="text" name="contenu_lien" id="contenu_lien" value=" {{old('contenu_lien') }}" class="form-control">
					
					{!! $errors->first('contenu_lien', '<p class="error">:message</p>')!!}
				</div>

				<div class="form-group {{$errors->has('contenu_fichier') ? 'has-error' : '' }}" id="contenu_fichiers" style="display: none">
					<label for="contenu_fichier" class="control-label">Contenu fichier</label>

					<input type="file" name="contenu_fichier" id="contenu_fichier" value=" {{old('contenu_fichier') }}" class="form-control">
					
					{!! $errors->first('contenu_fichier', '<p class="error">:message</p>')!!}
				</div>



				<div class="form-group" id="descriptions" style="display: none">
						<label for="message" class="control-label {{-- sr-only --}}">
							Description
						</label>
						<textarea class="form-control {{$errors->has('description') ? 'has-error' : '' }}" rows="10" cols="10" name="description" id="description">{{old('description')}}</textarea>

						 {!!$errors->first('description', '<p class="error">:message</p>')!!}
					</div>




				<div class="form-group {{$errors->has('mot_cle') ? 'has-error' : '' }}">
					<label for="mot_cle" class="control-label">Mot cle</label>

					<input type="text" name="mot_cle" id="mot_cle" value=" {{old('mot_cle') }}" class="form-control">
					
					{!! $errors->first('mot_cle', '<p class="error">:message</p>')!!}
				</div>


				
				<div class="form-group" style="margin-bottom: -4%;">
					<input type="submit" name="Valider" value="Valider &raquo;" class="btn btn-primary btn-block">
				</div>

{{-- 
				<div style="text-align: right; margin-bottom: -4%;">
		              <button type="reset" class="btn btn-primary" name="annuler">Cancel</button>
		         </div> --}}
				
			</form>

	</div>
	<script type="text/javascript">
		const type = document.querySelector('#type');
		const lien = document.querySelector('#contenu_liens');
		const fichier = document.querySelector('#contenu_fichiers');
		const description = document.querySelector('#descriptions')

		type.addEventListener('change', event => {
			const selected = Number(type.value);
			
			if(selected === 1) { // Lien: selected
				fichier.style.display = "none";
				description.style.display = "none";
				lien.style.removeProperty('display');
			}
			else if(selected === 2) { // Fichier: selected
				lien.style.display = "none";
				description.style.display = "none";
				fichier.style.removeProperty('display');
			}
			else if(selected === 3) { // Fichier: selected
				lien.style.display = "none";
				fichier.style.display = "none";
				description.style.removeProperty('display');
			}
		})
	</script>

@stop