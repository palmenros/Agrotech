@extends('layouts.master')
@section('title', 'Estadísticas')

@section('content')
	
	<line-chart chart-data='{!! $waterData !!}'></line-chart>

@endsection

@section('footer')
@endsection