<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Agrotech</title>

    <link rel="shortcut icon" href="/img/favicon.ico">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    
    <div class="wrapper">
        <aside class="sidebar">
            <h1>Agrotech</h1>
            <input type="checkbox" id="menu-checkbox">

            <label for="menu-checkbox" class="menu-btn"><i class="material-icons">menu</i></label>

            <nav>
                <a class="active" href="#"><i class="material-icons">dashboard</i> Panel de control</a>
                <a href="#"><i class="material-icons">assessment</i> Estadísticas</a>
                <a href="#"><i class="material-icons">settings</i> Ajustes</a>
            </nav>
        </aside>
        <main>
            <nav>
                <h1>Panel de control</h1>
            </nav>

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
                        <div class="form-group">
                            <input type="checkbox" class="switch-check" id="bulb-automatic">
                            <label class="switch toggle-slider" for="bulb-automatic">Automático:</label>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="bulb-brightness">Brillo:</label>
                            <input class="slider-range" type="range" id="bulb-brightness">
                            <div class="slider">
                                <div class="slider-fill"></div>
                                <div class="slider-handle"></div>
                            </div>
                        </div>
                </div>
                </div>
                <div class="card lift-up">

                    <div class="sensor">
                        <div class="icon thermometer">
                            <i class="fa fa-thermometer-half" aria-hidden="true"></i>
                            <!--<i class="material-icons">lightbulb_outline</i>-->

                        </div>
                        <div class="info">
                            <h2 class="heading">Temperatura</h2>
                            <span class="value">25ºC</span>
                        </div>
                    </div>

                    <div class="control">
                        <div class="form-group">
                            <input type="checkbox" class="switch-check" id="temperature-automatic">
                            <label class="switch toggle-slider" for="temperature-automatic">Automático:</label>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="temperature-brightness">Ventilación:</label>
                            <input class="slider-range" type="range" id="temperature-brightness">
                            <div class="slider">
                                <div class="slider-fill"></div>
                                <div class="slider-handle"></div>
                            </div>
                        </div>
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
                        <div class="form-group">
                            <input type="checkbox" class="switch-check" id="food-automatic">
                            <label class="switch" for="food-automatic">Automático:</label>
                        </div>
                        <br>
                        <div class="form-group">
                            <button class="btn">Rellenar</button>
                        </div>
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
                        <div class="form-group">
                            <input type="checkbox" class="switch-check" id="water-automatic">
                            <label class="switch" for="water-automatic">Automático:</label>
                        </div>
                        <br>
                        <div class="form-group">
                            <button class="btn">Rellenar</button>
                        </div>
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
                        <div class="form-group">
                            <input type="checkbox" class="switch-check" id="waste-automatic">
                            <label class="switch" for="waste-automatic">Automático:</label>
                        </div>
                        <br>
                        <div class="form-group">
                            <button class="btn">Avisar</button>
                        </div>
                    </div>
                </div>

            </div>

        </main>
    </div>

    <!-- Scripts -->
    <script
            src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g="
            crossorigin="anonymous"></script>
    <script src="/js/ui.js"></script>
    <script src="/js/app.js"></script>

</body>
</html>
