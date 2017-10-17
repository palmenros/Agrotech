@extends('layouts.master')

@section('title', 'Ajustes')

@section('content')

	<form class="settings">
		
		<div class="form-group">
			<input type="text" placeholder="Nombre completo">
			<input type="text" placeholder="Email del usuario">
			<input type="text" placeholder="Email de la recolectora">			
		</div>
	
		<div class="form-group">
			<input type="text" placeholder="Dirección">
		</div>

		<div class="form-group">
			<input type="text" placeholder="Ciudad">
			<input type="text" placeholder="Provincia">
			<input type="text" placeholder="Código Postal">
		</div>

		<textarea class="customized-data" name="" id="" cols="30" rows="10" placeholder="Correo personalizado.Use este espacia para especificar datos."></textarea>
		
		<div class="form-group button">
			<button class="btn">Enviar</button>
		</div>

	</form>

@endsection

@section('footer')

@endsection