<!DOCTYPE html>
<html lang="pt-BR">
<head>

  <!-- Meta -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home | JubartData</title>
  <meta name="description" content="Entre em contato com a JubartData para estudos, dashboards e diagnósticos estratégicos baseados em dados.">

  <!-- Google Tag -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17490337789"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'AW-17490337789');
  </script>

  <!-- CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/custom.css">

</head>

<body>

<!-- ================= NAVBAR ================= -->

<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">

    <a class="navbar-brand" href="{{ route('inicio') }}">
      <img src="imagens/logo_jubart.png" alt="Logo JubartData" width="100">
    </a>

    <button 
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Abrir menu"
    >
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

        <li class="nav-item">
          <button class="btn btn-outline-light me-2">Login</button>
        </li>

        <li class="nav-item">
          <button class="btn btn-outline-light">EN/PT</button>
        </li>
        

      </ul>

    </div>

  </div>
</nav>
</header>

<main>

<!-- HERO -->
<section class="py-5 bg-light">
  <div class="container">

    <div class="row align-items-center">

      <div class="col-lg-6">

        <h1 class="section-title mb-3">
          Inteligência de Dados para Decisões Estratégicas
        </h1>

        <p class="lead lead-muted">
          A JubartData transforma dados em diagnósticos econômicos,
          estudos de mercado e dashboards estratégicos para empresas,
          associações e instituições públicas.
        </p>

        <a href="{{ route('servicos') }}" class="btn btn-primary btn-lg me-2">
Conheça nossos serviços
</a>

        <a href="{{ route('contato') }}" class="btn btn-outline-exec btn-lg">
          Fale conosco
        </a>

      </div>

      <div class="col-lg-6 text-center">

        <img
          src="imagens/mapa2.png"
          class="img-fluid"
          alt="Dashboard de dados"
        >

      </div>

    </div>

  </div>
</section>


<!-- O QUE FAZEMOS -->

<section class="py-5">
  <div class="container text-center">

    <h2 class="section-title mb-4">
      Como ajudamos organizações
    </h2>

    <div class="row g-4">

      <div class="col-md-4">

        <div class="card-soft p-4 h-100">

          <h4>Estudos Econômicos</h4>

          <p class="lead-muted">
            Análises aprofundadas sobre mercados, cadeias produtivas
            e tendências econômicas.
          </p>

        </div>

      </div>

      <div class="col-md-4">

        <div class="card-soft p-4 h-100">

          <h4>Dashboards Estratégicos</h4>

          <p class="lead-muted">
            Painéis interativos que transformam dados complexos
            em informações claras para tomada de decisão.
          </p>

        </div>

      </div>

      <div class="col-md-4">

        <div class="card-soft p-4 h-100">

          <h4>Diagnósticos de Mercado</h4>

          <p class="lead-muted">
            Avaliação estratégica de setores, oportunidades
            e riscos de mercado.
          </p>

        </div>

      </div>

    </div>

  </div>
</section>


<!-- CTA -->

<section class="py-5 bg-light">
  <div class="container text-center">

    <h2 class="section-title mb-3">
      Precisa de inteligência de dados para sua organização?
    </h2>

    <p class="lead lead-muted">
      Entre em contato com a JubartData e descubra como
      podemos apoiar sua tomada de decisão.
    </p>

    <a
      href="https://wa.me/5561993553849"
      class="btn btn-success btn-lg mt-3"
      target="_blank"
    >
      Falar no WhatsApp
    </a>

  </div>
</section>

</main>

  <!-- Clientes -->

  <section class="block-soft p-4 mt-5">

    <h2 class="mb-3">Clientes e Parceiros</h2>

    <p>
      Atuamos com entidades do setor produtivo, associações,
      projetos públicos e empresas privadas. Entre os públicos
      que já atendemos:
    </p>

    <ul class="mt-3">

      <li>Associações do agronegócio e setor de pescados</li>

      <li>Empresas de consultoria e inteligência de mercado</li>

      <li>Instituições públicas interessadas em diagnósticos econômicos</li>

      <li>Distribuidores, importadores e profissionais da cadeia alimentar</li>

    </ul>

    <p class="mt-4">
      <em>
        Deseja se tornar um parceiro da Jubart?
        Estamos prontos para ouvir sua demanda.
      </em>
    </p>

  </section>

</main>

<!-- ================= FOOTER ================= -->

<footer class="bg-dark text-white text-center py-4 mt-5">

  <div class="container">

    <p class="mb-0">
      © 2025 JubartData. Todos os direitos reservados.
    </p>

  </div>

</footer>

<!-- JS -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>