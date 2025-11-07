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

    <div id="main-container">
        
        <aside id="main-sidebar">
            @section('sidebar')
                <nav>
                    <ul>
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Ajustes</a></li>
                        <li><a href="#">Reportes</a></li>
                    </ul>
                </nav>
            @show
        </aside>

        <main id="main-content">
            @yield('content')
        </main>

    </div>

    <script>
        document.getElementById('sidebar-toggle').onclick = function() {
            document.getElementById('main-sidebar').classList.toggle('collapsed');
            document.getElementById('main-content').classList.toggle('expanded');
        };
    </script>
</body>
</html>