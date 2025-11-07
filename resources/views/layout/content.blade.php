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