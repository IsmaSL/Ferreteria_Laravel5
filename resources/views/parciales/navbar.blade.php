<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark primary-color">
  <a class="navbar-brand" href="{{ route('home') }}">Ferreteria<i class="fas fa-wrench ml-3 mr-3"></i>Guevara</a>
    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">
    <!-- Links -->
    <ul></ul>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
          <a class="nav-link" href="{{ route('ventas.index') }}"><i class="fas fa-file-invoice-dollar fa-lg mr-3"></i>Movimientos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('almacen.index') }}"><i class="fas fa-clipboard-list fa-lg mr-3"></i>Almacen</a>
        </li>
      <li class="nav-item">
            <a class="nav-link" href="{{ route('contactos.index') }}"><i class="fas fa-user fa-lg mr-3"></i>Clientes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('proveedores.index') }}"><i class="fas fa-user-tie fa-lg mr-3"></i>Proveedores</a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}">{{Auth::user()->name}}<i class="fas fa-door-open fa-lg mr-3 ml-3"></i>Salir</a>
      </li>
    </ul>
  </div>
  <!-- Collapsible content -->
</nav>
<!--/.Navbar-->