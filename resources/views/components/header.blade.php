<!-- ================= NAVBAR PT ================= -->
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="{{ route('inicio') }}">
      <img src="/imagens/logo_jubart.png" alt="Logo JubartData" width="100">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
      data-bs-target="#navbarNav" aria-controls="navbarNav"
      aria-expanded="false" aria-label="Abrir menu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('inicio') ? 'active' : '' }}" href="{{ route('inicio') }}">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('servicos') ? 'active' : '' }}" href="{{ route('servicos') }}">Serviços</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('dashboards') ? 'active' : '' }}" href="{{ route('dashboards') }}">Dashboards</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('contato') ? 'active' : '' }}" href="{{ route('contato') }}">Contato</a>
        </li>
      </ul>
      <ul class="navbar-nav">
        @if (!request()->routeIs('login'))
        <li class="nav-item">
          <a href="{{ route('login') }}" class="btn btn-outline-light me-2">Login</a>
        </li>
        @endif
        <li class="nav-item lang-switch-nav">
          @if (request()->routeIs('servicos'))
            <a href="{{ route('servicos.en') }}" class="btn btn-outline-light">EN</a>
          @elseif (request()->routeIs('dashboards'))
            <a href="{{ route('dashboards.en') }}" class="btn btn-outline-light">EN</a>
          @elseif (request()->routeIs('contato'))
            <a href="{{ route('contato.en') }}" class="btn btn-outline-light">EN</a>
          @else
            <a href="{{ route('inicio.en') }}" class="btn btn-outline-light">EN</a>
          @endif
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>