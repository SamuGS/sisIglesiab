<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Aplicación Laravel')</title>
    
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    
</head>
<body>

    <header id="main-header">
        <button id="sidebar-toggle">☰</button>
        <h1>@yield('header-title', 'Dashboard Principal')</h1>
        <div class="user-info">
            @yield('header-info', 'Usuario Invitado')
        </div>
    </header>