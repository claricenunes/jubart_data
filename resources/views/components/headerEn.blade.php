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

      <ul class="navbar-nav align-items-center gap-2">

        @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle d-flex align-items-center gap-2" href="#" role="button" data-bs-toggle="dropdown">
              <div style="width:34px;height:34px;border-radius:50%;background:#f0b900;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:0.85rem;color:#111;">
                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
              </div>
              <span class="text-white" style="font-size:0.9rem;">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="{{ route('profile.edit') }}">My Profile</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <button type="submit" class="dropdown-item">Sign out</button>
                </form>
              </li>
            </ul>
          </li>
        @else
          @if (!request()->routeIs('login.en') && !request()->routeIs('register.en'))
            <li class="nav-item">
              <a href="{{ route('login.en') }}" class="btn btn-outline-light me-2">Login</a>
            </li>
          @endif
        @endauth

        <li class="nav-item lang-switch-nav">
          @if (request()->routeIs('servicos.en'))
            <a href="{{ route('servicos') }}" class="btn btn-outline-light">PT</a>
          @elseif (request()->routeIs('dashboards.en'))
            <a href="{{ route('dashboards') }}" class="btn btn-outline-light">PT</a>
          @elseif (request()->routeIs('contato.en'))
            <a href="{{ route('contato') }}" class="btn btn-outline-light">PT</a>
          @elseif (request()->routeIs('login.en'))
            <a href="{{ route('login') }}" class="btn btn-outline-light">PT</a>
          @elseif (request()->routeIs('register.en'))
            <a href="{{ route('register') }}" class="btn btn-outline-light">PT</a>
          @elseif (request()->routeIs('password.request.en'))
    <a href="{{ route('password.request') }}" class="btn btn-outline-light">PT</a>
          @else
            <a href="{{ route('inicio') }}" class="btn btn-outline-light">PT</a>
          @endif
        </li>

      </ul>
    </div>
  </div>
</nav>
</header>