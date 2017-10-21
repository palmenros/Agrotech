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
                    <span class="value">100%</span>
                </div>
            </div>

            <automatic-control switch-id="bulb" slider-id="bulb-brightness">
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
                    <span class="value">25ºC</span>
                </div>
            </div>

            <automatic-control switch-id="temperature" slider-id="temperature-power">
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
                    <span class="value">575 g</span>
                </div>
            </div>
            <div class="control">
                <toggle-switch id="food"></toggle-switch>
                <br>
                <refill-button>Rellenar</refill-button>
            </div>
        </div>
        <div class="card lift-up">
            <div class="sensor">
                <div class="icon water">
                    <i class="fa fa-tint" aria-hidden="true"></i>
                </div>
                <div class="info">
                    <h2 class="heading">Agua</h2>
                    <span class="value">670 ml</span>
                </div>
            </div>
            <div class="control">
                <toggle-switch id="water"></toggle-switch>
                <br>
                <refill-button>Rellenar</refill-button>
            </div>
        </div>
        <div class="card">
            <div class="sensor">
                <div class="icon waste">
                    <i class="material-icons">panorama_vertical</i>
                </div>
                <div class="info">
                    <h2 class="heading">Purines</h2>
                    <span class="value">43%</span>
                </div>
            </div>
            <div class="control">
                <toggle-switch id="text"></toggle-switch>
                <br>
                <refill-button>Vaciar</refill-button>
            </div>
        </div>

    </div>

@endsection

@section('footer')

@endsection