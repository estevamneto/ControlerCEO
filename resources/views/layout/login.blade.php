<!DOCTYPE html>
<html lang="en">
<head>
    <title>Controle de Aquivo ICAP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap Core CSS -->
    <link href="{{ elixir('css/all.css') }}" rel="stylesheet">



</head>
<body>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header" id="menu">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Logo</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="fa fa-user fa-fw"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid text-center">
    <div class="row content">

        <div class="col-sm-8 text-left">

            @yield('content')

        </div>

    </div>
</div>

<footer class="container-fluid text-center">
    Departamento de Polícia Técnica<br>
        Avenida Centenário, s/n - Centenário<br>
        CEP 40100-180 - Salvador - Bahia
</footer>


<!-- js -->
<script src="{{ elixir('js/all.js') }}"></script>

</body>
</html>
