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
            <div class="control">
                @component('inc.automatic-switch')
                    bulb
                @endcomponent
                <br>
                @component('inc.slider')
                    @slot('id', 'bulb-brightness')
                    Brillo:
                @endcomponent
            </div>
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

            <div class="control">
                @component('inc.automatic-switch')
                    temperature
                @endcomponent

                <br>
                @component('inc.slider')
                    @slot('id', 'temperature-power')
                    Ventilación:
                @endcomponent
            </div>
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
                @component('inc.automatic-switch')
                    food
                @endcomponent
                <br>
                @component('inc.button')
                    Rellenar
                @endcomponent
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
                @component('inc.automatic-switch')
                    water
                @endcomponent
                <br>
                @component('inc.button')
                    Rellenar
                @endcomponent
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
                @component('inc.automatic-switch')
                    waste
                @endcomponent
                <br>
                @component('inc.button')
                    Rellenar
                @endcomponent
            </div>
        </div>

    </div>

@endsection

@section('footer')
    <script
            src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g="
            crossorigin="anonymous"></script>
    <script src="/js/ui.js"></script>
    <script src="/js/app.js"></script>
@endsection