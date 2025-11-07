<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Aplicación Laravel')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <!-- Bootstrap Icons CDN -->
    <link 
    rel="stylesheet" 
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>
<body>

    <!-- HEADER -->
    <header id="main-header">
        <div class="header-left">
            <button id="sidebar-toggle">☰</button>
            <h1>@yield('header-title', 'Dashboard Principal')</h1>
        </div>

        <div class="user-info">
            @yield('header-info')
        </div>
    </header>

    <!-- CONTENEDOR PRINCIPAL -->
    <div id="main-container">
        <!-- SIDEBAR -->
        <aside id="main-sidebar">
            @section('sidebar')
                <nav>
                    <ul>
                        <li> 
                            <a href="#"> 
                                <i class="bi bi-house"> </i> 
                                <span> | Inicio</span> 
                            </a> 
                        </li>
                        <li>
                            <a href="#"> 
                                <i class="bi bi-speedometer"></i>
                                <span> | Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="bi bi-gear-wide"></i>
                                <span> | Ajustes</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="bi bi-card-list"></i>
                                <span> | Reportes</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            @show
        </aside>

        <!-- CONTENIDO -->
        <main id="main-content">
            @yield('content')
        </main>
    </div>

    <!-- SCRIPT -->
    <script>
        document.getElementById('sidebar-toggle').onclick = function() {
            document.getElementById('main-sidebar').classList.toggle('collapsed');
            document.getElementById('main-content').classList.toggle('expanded');
        };
    </script>

</body>
</html>