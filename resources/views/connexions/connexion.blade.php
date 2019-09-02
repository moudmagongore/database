@extends('layouts.app')

@section('container')

<div class="container col-md-8 col-md-offset-2 col-xs-12">
		<form action="/connexion" method="post">

			{{csrf_field()}}

			<div class="form-group  {{$errors->has('email') ? 'has-error' : '' }}">
			<label for="email" class="control-label">Email</label>	
				<input type="email" name="email" placeholder="Email" class="form-control" value="{{old('email')}}">
				{!! $errors->first('email', '<p class="error">:message</p>')!!}


				<label for="password" class="control-label  {{$errors->has('password') ? 'has-error' : '' }}">Password</label>	
				<input type="password" name="password" placeholder="Mot de passe" class="form-control" value="{{old('password')}}">
				{!! $errors->first('password', '<p class="error">:message</p>')!!}


			</div>

			<div class="form-group">
				<input type="submit" name="Connexion" value="Connexion" class="btn btn-primary">
			</div>
		</form>

</div>

@endsection