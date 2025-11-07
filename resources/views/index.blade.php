@extends('layout.app')

@section('title', 'Inicio - Dashboard')

@section('header-info')
    <a href="/logout">Salir</a>
@endsection

@section('content')
    <h2>Bienvenido</h2>
    <p>Tu aplicación Laravel está funcionando correctamente.</p>
    <p>Puedes usar el botón ☰ para plegar o expandir el menú lateral.</p>
    <br>
    <br>
@endsection