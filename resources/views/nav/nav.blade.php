<nav style="position: relative; z-index: 1000"
    class="row p-2 shadow bg-white animate_animated animatefadeIn animate_faster">
    <div class="col-md-12 d-flex align-items-center justify-content-between">
        {{-- Navbar icons --}}
        <div class="d-flex gap-2">
            <button class="btn btn-nav-search"><i class="fas fa-search"></i></button>

            {{-- Chart button menu --}}
            <button class="btn btn-nav-chart" data-bs-toggle="dropdown" aria-expanded="false"><i
                    class="fas fa-chart-bar"></i></button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Indicadores de proceso</a></li>
                <li><a class="dropdown-item" href="#">Indicadores de tiempo natural</a></li>
                <li><a class="dropdown-item" href="#">Indicadores de tiempo laboral</a></li>
                <li><a class="dropdown-item" href="#">Indicadores por departamento</a></li>
            </ul>

            {{-- Travel expenses button menu --}}
            <button type="button" class="btn btn-nav-travelExpenses" data-bs-toggle="dropdown" aria-expanded="false"><i
                    class="fas fa-book"></i></button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="">Solicitud de víaticos</a></li>
                <li><a class="dropdown-item" href="">Solicitud de extension de
                        víaticos</a></li>
                <li><a class="dropdown-item" href="">Comprobación de
                        víaticos</a></li>
            </ul>

            {{-- Transparency button menu --}}
            <button class="btn btn-nav-transparencyReport" data-bs-toggle="dropdown" aria-expanded="false"><i
                    class="fas fa-glasses"></i></button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Reporte de transparencia</a></li>
            </ul>

            {{-- Settings button menu --}}
            <button class="btn btn-nav-settings" data-bs-toggle="dropdown" aria-expanded="false"><i
                    class="fas fa-cog"></i></button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Catalogo ciclos</a></li>
                <li><a class="dropdown-item" href="#">Catalogo calendario</a></li>
                <li><a class="dropdown-item" href="#">Catalogo centro de costos</a></li>
                <li><a class="dropdown-item" href="#">Catalogo de puestos</a></li>
                <li><a class="dropdown-item" href="#">Catalogo usuarios</a></li>
                <li><a class="dropdown-item" href="#">Configuracion montos</a></li>
                <li><a class="dropdown-item" href="#">Configuracion firmas</a></li>
                <li><a class="dropdown-item" href="#">Configuracion menu</a></li>
                <li><a class="dropdown-item" href="#">Configuracion de rutas </a></li>
                <li><a class="dropdown-item" href="#">Bitacora</a></li>
            </ul>
            {{-- Logout button --}}
            <button class="btn btn-nav-logout" onclick="logout()"><i class="fas fa-sign-out-alt"></i></button>
            
        </div>

        <img style="background: transparent;" src="{{ asset('img/mangolineal.png') }}" width="20%" />
    </div>
</nav>

<script>
    const logout = async () => {
        // URL to LOGOUT
        const url = route('logout');
        // Set method and headers
        const init = {
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': $('#csrf').attr('content'),
                Accept: 'application/json'
            }
        }
        // Send the request to the backend
        const req = await fetch(url, init);
        // Check if the request returned a 200 status code
        if (req.ok) {
            window.location.href = route('login');
            return;
        }

        // Show a toast alert
        $.toast({
            heading: 'Error',
            text: 'Ha ocurrido un error',
            position: 'bottom-right',
            showHideTransition: 'slide',
            icon: 'error'
        });
    }
</script>