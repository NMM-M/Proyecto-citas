<!-- Navigation -->
<!-- Heading -->
<h6 class="navbar-heading text-muted">Gestionar Datos</h6>
<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="/home">
            <i class="ni ni-tv-2 text-primary"></i> Dashboard
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('Specialty')}}">
            <i class="ni ni-planet text-blue"></i>Especialidades
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/doctors">
            <i class="ni ni-single-02 text-blue"></i> Medicos
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/patients">
            <i class="ni ni-satisfied text-blue"></i> Pacientes
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="./examples/tables.html">
            <i class="ni ni-bullet-list-67 text-blue"></i> Horarios
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('formLogout').submit();">
            <i class="ni ni-circle-08 text-red"></i> Cerrar sesion
        </a>
        <form id="formLogout" action="{{route('logout')}}" method="POST" style="display: none;">
            @csrf
        </form>
    </li>
</ul>
<!-- Divider -->
<hr class="my-3">
<!-- Heading -->
<h6 class="navbar-heading text-muted">Reportes</h6>
<!-- Navigation -->
<ul class="navbar-nav mb-md-3">
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="ni ni-chart-bar-32"></i> Frecuencia de citas
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="ni ni-palette"></i> Medicos mas activos
        </a>
    </li>
</ul>