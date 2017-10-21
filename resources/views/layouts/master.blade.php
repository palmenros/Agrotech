<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Agrotech - @yield('title')</title>

    <link rel="shortcut icon" href="/img/favicon.ico">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <!-- Stylesheets -->
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>

<div class="wrapper">

    @include('layouts.sidebar')

    <main>
        <nav>
            <h1>@yield('title')</h1>
        </nav>

        <div id="app">
            @yield('content')
            <flash></flash>
        </div>
    </main>
</div>

@yield('footer')

<script src="/js/manifest.js"></script>
<script src="/js/vendor.js"></script>
<script src="/js/app.js"></script>

</body>
</html>
