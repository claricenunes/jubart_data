<!-- ================= NAVBAR EN ================= -->
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="{{ route('inicio.en') }}">
      <img src="/imagens/logo_jubart.png" alt="JubartData Logo" width="100">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
      data-bs-target="#navbarNav" aria-controls="navbarNav"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('inicio.en') ? 'active' : '' }}" href="{{ route('inicio.en') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('servicos.en') ? 'active' : '' }}" href="{{ route('servicos.en') }}">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('dashboards.en') ? 'active' : '' }}" href="{{ route('dashboards.en') }}">Dashboards</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('contato.en') ? 'active' : '' }}" href="{{ route('contato.en') }}">Contact</a>
        </li>
      </ul>
      <ul class="navbar-nav">
        @if (!request()->routeIs('login'))
        <li class="nav-item">
          <a href="{{ route('login') }}" class="btn btn-outline-light me-2">Login</a>
        </li>
        @endif
        <li class="nav-item lang-switch-nav">
          @if (request()->routeIs('servicos.en'))
            <a href="{{ route('servicos') }}" class="btn btn-outline-light">PT</a>
          @elseif (request()->routeIs('dashboards.en'))
            <a href="{{ route('dashboards') }}" class="btn btn-outline-light">PT</a>
          @elseif (request()->routeIs('contato.en'))
            <a href="{{ route('contato') }}" class="btn btn-outline-light">PT</a>
          @else
            <a href="{{ route('inicio') }}" class="btn btn-outline-light">PT</a>
          @endif
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>