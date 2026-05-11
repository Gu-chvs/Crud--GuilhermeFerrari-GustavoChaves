<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>@yield('titulo')</title>

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body>

<nav>
    <div class="nav-wrapper blue">
        <div class="container">
            <a href="#" class="brand-logo">CRUD Cursos</a>

            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="/">Home</a></li>
                <li><a href="{{ route('admin.cursos') }}">Cursos</a></li>
            </ul>
        </div>
    </div>
</nav>