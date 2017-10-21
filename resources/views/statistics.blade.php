@extends('layouts.master')
@section('title', 'Estadísticas')

@section('content')

	<div class="statistics-container">
		<div class="statistics-card temperature">
			<line-chart chart-data='{!! $temperatureData !!}'></line-chart>
		</div>

		<div class="statistics-card water">
			<line-chart chart-data='{!! $waterData !!}'></line-chart>	
		</div>

		<div class="statistics-card food">
			<line-chart chart-data='{!! $foodData !!}'></line-chart>	
		</div>

		<div class="statistics-card brightness">
			<line-chart chart-data='{!! $brightnessData !!}'></line-chart>	
		</div>

		<div class="statistics-card waste">
			<line-chart chart-data='{!! $wasteData !!}'></line-chart>	
		</div>


	</div>
	
@endsection

@section('footer')
@endsection