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

      <ul class="navbar-nav align-items-center gap-2">

        @auth
          {{-- Usuário logado: mostra inicial do nome com dropdown --}}
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle d-flex align-items-center gap-2" href="#" role="button" data-bs-toggle="dropdown">
              <div style="width:34px;height:34px;border-radius:50%;background:#f0b900;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:0.85rem;color:#111;">
                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
              </div>
              <span class="text-white" style="font-size:0.9rem;">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Meu Perfil</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <button type="submit" class="dropdown-item">Sair</button>
                </form>
              </li>
            </ul>
          </li>
        @else
          {{-- Visitante: mostra botão Login --}}
          @if (!request()->routeIs('login') && !request()->routeIs('register'))
            <li class="nav-item">
              <a href="{{ route('login') }}" class="btn btn-outline-light me-2">Login</a>
            </li>
          @endif
        @endauth

        <li class="nav-item lang-switch-nav">
  @if (request()->routeIs('servicos'))
    <a href="{{ route('servicos.en') }}" class="btn btn-outline-light">EN</a>
  @elseif (request()->routeIs('dashboards'))
    <a href="{{ route('dashboards.en') }}" class="btn btn-outline-light">EN</a>
  @elseif (request()->routeIs('contato'))
    <a href="{{ route('contato.en') }}" class="btn btn-outline-light">EN</a>
  @elseif (request()->routeIs('login'))
    <a href="{{ route('login.en') }}" class="btn btn-outline-light">EN</a>
  @elseif (request()->routeIs('register'))
    <a href="{{ route('register.en') }}" class="btn btn-outline-light">EN</a>
  @elseif (request()->routeIs('password.request'))
    <a href="{{ route('password.request.en') }}" class="btn btn-outline-light">EN</a>
  @else
    <a href="{{ route('inicio.en') }}" class="btn btn-outline-light">EN</a>
  @endif
</li>

      </ul>
    </div>
  </div>
</nav>
</header>