@extends('layouts.app')

@section('container')
 <div class="container col-md-8 col-md-offset-2 col-xs-12">
 	
 
	<form method="post">

		{{csrf_field()}}

		<div class="form-group  {{$errors->has('email') ? 'has-error' : '' }}">

			<label for="email" class="control-label">Email</label>	
			<input type="email" name="email" placeholder="Email" class="form-control" value="{{old('email')}}">
			{!! $errors->first('email', '<p class="error">:message</p>')!!}


			<label for="nom" class="control-label  {{$errors->has('nom') ? 'has-error' : '' }}">Nom</label>	
			<input type="nom" name="nom" placeholder="Nom" class="form-control" value="{{old('nom')}}">
			{!! $errors->first('nom', '<p class="error">:message</p>')!!}

			<label for="prenom" class="control-label  {{$errors->has('prenom') ? 'has-error' : '' }}">Prenom</label>	
			<input type="prenom" name="prenom" placeholder="Prenom" class="form-control" value="{{old('prenom')}}">
			{!! $errors->first('prenom', '<p class="error">:message</p>')!!}


			<label for="password" class="control-label  {{$errors->has('password') ? 'has-error' : '' }}">Password</label>	
			<input type="password" name="password" placeholder="Mot de passe" class="form-control" value="{{old('password')}}">
			{!! $errors->first('password', '<p class="error">:message</p>')!!}


			<label for="password_confirmation" class="control-label  {{$errors->has('password_confirmation') ? 'has-error' : '' }}">Mot de passe de confirmation</label>	
			<input type="password" name="password_confirmation" placeholder="Mot de passe de confirmation" class="form-control" value="{{old('password_confirmation')}}">
			{!! $errors->first('password_confirmation', '<p class="error">:message</p>')!!}

		</div>

		<div class="form-group">
			<input type="submit" name="S'inscrire" value="S'inscrire" class="btn btn-primary">
		</div>
	</form>

</div>

@endsection