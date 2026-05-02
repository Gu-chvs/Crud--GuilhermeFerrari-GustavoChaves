<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>@yield('titulo')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Fonts (Material Icons) -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Materialize CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <style>
        body { display: flex; min-height: 100vh; flex-direction: column; background: #f5f5f5; }
        main { flex: 1 0 auto; }
        nav .brand-logo { font-weight: 600; letter-spacing: 1px; }
        .card { border-radius: 8px; }
        .btn { border-radius: 4px; }
        .alert-success { background: #e8f5e9; border-left: 4px solid #4caf50; padding: 10px 16px; margin-bottom: 16px; border-radius: 4px; color: #2e7d32; }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="deep-orange darken-2">
        <div class="nav-wrapper container">
            <a href="{{ route('admin.cursos') }}" class="brand-logo">
                <i class="material-icons left">school</i>ProjCursos
            </a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger">
                <i class="material-icons">menu</i>
            </a>
            <ul class="right hide-on-med-and-down">
                <li><a href="{{ route('admin.cursos') }}">
                    <i class="material-icons left">list</i>Cursos
                </a></li>
                <li><a href="{{ route('admin.cursos.adicionar') }}">
                    <i class="material-icons left">add_circle</i>Novo Curso
                </a></li>
            </ul>
        </div>
    </nav>

    <!-- Sidenav mobile -->
    <ul class="sidenav" id="mobile-demo">
        <li><a href="{{ route('admin.cursos') }}">
            <i class="material-icons left">list</i>Cursos
        </a></li>
        <li><a href="{{ route('admin.cursos.adicionar') }}">
            <i class="material-icons left">add_circle</i>Novo Curso
        </a></li>
    </ul>

    <main>
        <div class="container" style="margin-top: 30px; margin-bottom: 30px;">
