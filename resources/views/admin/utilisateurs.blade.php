@extends('layouts.master')

@section('container')

	<h1>Les utilisateurs</h1>

	<ul>
		@foreach ($utilisateurs as $utilisateur)
			
			<li> {{$utilisateur->email}} </li>

		@endforeach
	</ul>

@stop