<!DOCTYPE html>
<html lang="en">
<head>
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17490337789"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'AW-17490337789');
  </script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboards | JubartData</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="/css/custom.css">
  <style>
    :root { --amarelo: #f0b900; --amarelo-light: #fff8e1; }
    html { scroll-behavior: smooth; }
    .hero-dashboards { background: #0f172a; padding: 80px 0 70px; border-bottom: 4px solid var(--amarelo); }
    .hero-badge { display: inline-block; background: var(--amarelo); color: #0f172a; font-size: 11px; font-weight: 700; letter-spacing: 2px; text-transform: uppercase; padding: 5px 14px; border-radius: 4px; margin-bottom: 20px; }
    .nav-filtros .btn { border-radius: 100px; font-size: 0.88rem; font-weight: 600; padding: 8px 20px; border: 1.5px solid #0f172a; color: #0f172a; background: transparent; transition: all 0.2s; }
    .nav-filtros .btn:hover, .nav-filtros .btn.active { background: #0f172a; color: #fff; }
    .secao-label { display: inline-block; background: var(--amarelo); color: #0f172a; font-size: 10px; font-weight: 700; letter-spacing: 2px; text-transform: uppercase; padding: 4px 12px; border-radius: 4px; margin-bottom: 12px; }
    .dash-card { border: 1px solid var(--line); border-top: 4px solid var(--amarelo); border-radius: 16px; overflow: hidden; background: #fff; height: 100%; transition: transform 0.2s, box-shadow 0.2s; }
    .dash-card:hover { transform: translateY(-4px); box-shadow: 0 8px 32px rgba(0,0,0,0.08); }
    .dash-img { width: 100%; height: 200px; object-fit: cover; display: block; background: var(--panel); }
    .dash-img--reduced { object-fit: contain; padding: 12px; }
    .dash-card .card-body { padding: 24px; }
    .dash-card h5 { font-weight: 700; color: var(--ink); margin-bottom: 8px; font-size: 1rem; }
    .dash-card p { font-size: 0.88rem; color: var(--muted); line-height: 1.7; margin-bottom: 20px; }
    .btn-acessar { background: #0f172a; color: #fff; font-size: 0.85rem; font-weight: 600; padding: 8px 20px; border-radius: 6px; text-decoration: none; display: inline-flex; align-items: center; gap: 6px; transition: all 0.2s; }
    .btn-acessar:hover { background: #1e293b; color: #fff; transform: translateY(-1px); }
    .section-sep { border: none; border-top: 2px solid var(--line); margin: 3rem 0; }
    .cta-section { background: var(--amarelo); padding: 80px 0; }
  </style>
</head>
<body>

<x-headerEn />

<!-- HERO -->
<section class="hero-dashboards">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <div class="hero-badge">Dashboards</div>
        <h1 class="section-title text-white mb-3">
          Interactive panels for <span style="color: var(--amarelo);">real-time decisions</span>
        </h1>
        <p class="lead" style="color: rgba(255,255,255,0.6);">
          JubartData builds market monitoring panels, price analysis and foreign trade visualizations with dynamic charts.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- CONTENT -->
<section class="py-5" style="background: var(--panel);">
  <div class="container">

    <div class="nav-filtros d-flex gap-2 flex-wrap mb-5">
      <a href="#national-market" class="btn active">National Market</a>
      <a href="#foreign-trade" class="btn">Foreign Trade</a>
    </div>

    <!-- BLOCK 1 -->
    <div class="secao-label">National Market</div>
    <h2 id="national-market" class="section-title mb-2">National Market Monitoring</h2>
    <p class="lead-muted mb-4">Price monitoring and trends in the domestic market</p>

    <div class="row g-4 mb-5">

      <div class="col-md-6">
        <article class="dash-card">
          <img class="dash-img dash-img--reduced" src="/imagens/tela_car_diversos_produtos.png" alt="Daily panel by store">
          <div class="card-body">
            <h5>Daily Panel by Store</h5>
            <p>Daily price monitoring by store, mobile-optimized with focus on key product categories.</p>
            <a class="btn-acessar" href="{{ route('painel.diario') }}" target="_blank" rel="noopener">
              Access panel <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </article>
      </div>

      <div class="col-md-6">
        <article class="dash-card">
          <img class="dash-img" src="/imagens/tela_monitor_geografico_precos.png" alt="Geographic price monitor">
          <div class="card-body">
            <h5>Geographic Price Monitor</h5>
            <p>View prices by product, city and region. Analyses based on the 3 P's: Product, Place and Price.</p>
            <a class="btn-acessar" href="https://monitor-precos.fly.dev" target="_blank" rel="noopener">
              Access monitor <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </article>
      </div>

    </div>

    <hr class="section-sep">

    <!-- BLOCK 2 -->
    <div class="secao-label">Foreign Trade</div>
    <h2 id="foreign-trade" class="section-title mb-2">Foreign Trade Data</h2>
    <p class="lead-muted mb-4">Interactive visualizations of exports and imports</p>

    <div class="row g-4">

      <div class="col-md-6">
        <article class="dash-card">
          <img class="dash-img" src="/imagens/tela_dashboard_comex.png" alt="Seafood foreign trade dashboard">
          <div class="card-body">
            <h5>Seafood Foreign Trade</h5>
            <p>Interactive visualization connected to the database with dynamic filters and Plotly charts.</p>
            <a class="btn-acessar" href="https://jubart-dashboard.fly.dev" target="_blank" rel="noopener">
              Access dashboard <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </article>
      </div>

      <div class="col-md-6">
        <article class="dash-card">
          <img class="dash-img dash-img--reduced" src="/imagens/tela_painel_tilapia_US.png" alt="US tilapia imports panel">
          <div class="card-body">
            <h5>US Tilapia Imports</h5>
            <p>Indicators and visualizations of US imports with continuous updates and trend focus.</p>
            <a class="btn-acessar" href="outputs/painel_tilapia_us/painel_tilapia_us.html" target="_blank" rel="noopener">
              Access panel <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </article>
      </div>

    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-section text-center">
  <div class="container">
    <h2 class="section-title mb-3">Need a custom dashboard?</h2>
    <p class="lead-muted mb-4">We build tailored panels for your organization.</p>
    <a href="https://wa.me/5561993553849" target="_blank" class="btn btn-dark btn-lg me-2">WhatsApp</a>
    <a href="{{ route('contato.en') }}" class="btn btn-outline-dark btn-lg">Contact us</a>
  </div>
</section>

<footer class="bg-dark text-white text-center py-4">
  <div class="container"><p class="mb-0">&copy; 2025 JubartData. All rights reserved.</p></div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>