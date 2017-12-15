@extends('layouts.master')

@section('title', 'Panel de control')

@section('content')

    <div class="grid">
        <div class="card">
            <div class="sensor">
                <div class="icon">
                    <i class="material-icons">lightbulb_outline</i>
                </div>
                <div class="info">
                    <h2 class="heading">Luces</h2>
                    <span class="value"><arduino-sensor sensor-id="2"></arduino-sensor>%</span>
                </div>
            </div>

            <automatic-control switch-id="bulb" slider-id="bulb-brightness" actuator-id="0">
                Brillo:
            </automatic-control>

        </div>

        <div class="card lift-up">

            <div class="sensor">
                <div class="icon thermometer">
                    <i class="fa fa-thermometer-half" aria-hidden="true"></i>
                </div>
                <div class="info">
                    <h2 class="heading">Temperatura</h2>
                    <span class="value"> <arduino-sensor sensor-id="1"></arduino-sensor> ºC </span>
                </div>
            </div>

            <automatic-control switch-id="temperature" slider-id="temperature-power" actuator-id="1">
                Ventilación:
            </automatic-control>

        </div>
        <div class="card">
            <div class="sensor">
                <div class="icon food">
                    <i class="material-icons">pets</i>
                </div>
                <div class="info">
                    <h2 class="heading">Comida</h2>
                    <span class="value"><arduino-sensor sensor-id="0"></arduino-sensor>g</span>
                </div>
            </div>
            <div class="control">
                <toggle-switch id="food"></toggle-switch>
                <br>
                <refill-button actuator-id="2">Rellenar</refill-button>
            </div>
        </div>
        <div class="card lift-up">
            <div class="sensor">
                <div class="icon water">
                    <i class="fa fa-tint" aria-hidden="true"></i>
                </div>
                <div class="info">
                    <h2 class="heading">Agua</h2>
                    <span class="value"><arduino-sensor sensor-id="3"></arduino-sensor> %</span>
                </div>
            </div>
            <div class="control">
                <toggle-switch id="water"></toggle-switch>
                <br>
                <refill-button actuator-id="3">Rellenar</refill-button>
            </div>
        </div>
        <div class="card">
            <div class="sensor">
                <div class="icon waste">
                    <i class="material-icons">panorama_vertical</i>
                </div>
                <div class="info">
                    <h2 class="heading">Purines</h2>
                    <span class="value"><arduino-sensor sensor-id="4"></arduino-sensor>%</span>
                </div>
            </div>
            <div class="control">
                <toggle-switch id="text"></toggle-switch>
                <br>
                <refill-button actuator-id="8">Vaciar</refill-button>
            </div>
        </div>

    </div>

@endsection

@section('footer')

@endsection