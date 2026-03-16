<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home | JubartData</title>
  <meta name="description" content="A JubartData transforma dados em diagnósticos econômicos, estudos de mercado e dashboards estratégicos.">
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17490337789"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'AW-17490337789');
  </script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="/css/custom.css">
  <style>
    :root { --amarelo: #f0b900; --amarelo-light: #fff8e1; }
    .hero-home { background: #0f172a; padding: 90px 0 80px; border-bottom: 4px solid var(--amarelo); }
    .hero-badge { display: inline-block; background: var(--amarelo); color: #0f172a; font-size: 11px; font-weight: 700; letter-spacing: 2px; text-transform: uppercase; padding: 5px 14px; border-radius: 4px; margin-bottom: 20px; }
    .servico-card { border: 1px solid var(--line); border-top: 4px solid var(--amarelo); border-radius: 16px; padding: 32px 28px; height: 100%; background: #fff; transition: box-shadow 0.25s, transform 0.25s; }
    .servico-card:hover { box-shadow: 0 8px 32px rgba(0,0,0,0.08); transform: translateY(-4px); }
    .servico-icon { width: 48px; height: 48px; background: var(--amarelo-light); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 16px; }
    .servico-icon i { font-size: 22px; color: #0f172a; }
    .clientes-section { background: #0f172a; padding: 80px 0; }
    .cliente-item { display: flex; gap: 16px; align-items: flex-start; margin-bottom: 20px; }
    .cliente-item:last-child { margin-bottom: 0; }
    .cliente-dot { flex-shrink: 0; width: 10px; height: 10px; border-radius: 50%; background: var(--amarelo); margin-top: 6px; }
    .cliente-item p { font-size: 0.95rem; color: rgba(255,255,255,0.65); line-height: 1.6; margin: 0; }
    .cta-section { background: var(--amarelo); padding: 80px 0; }
  </style>
</head>
<body>

<x-headerEn />

<!-- HERO -->
<section class="hero-home">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="hero-badge">JubartData</div>
        <h1 class="section-title text-white mb-3">
          Data Intelligence for <span style="color: var(--amarelo);">Strategic Decisions</span>
        </h1>
        <p class="lead mb-4" style="color: rgba(255,255,255,0.6);">
          JubartData transforms data into economic diagnostics, market studies, and strategic dashboards for companies, associations, and public institutions.
        </p>
        <a href="{{ route('servicos') }}" class="btn btn-warning btn-lg me-2 fw-bold" style="color: #0f172a;">
          Explore our services
        </a>
        <a href="{{ route('contato') }}" class="btn btn-outline-light btn-lg">
          Contact Us
        </a>
      </div>
      <div class="col-lg-6 text-center">
        <img src="/imagens/mapa2.png" class="img-fluid" alt="Dashboard de dados" style="max-height: 400px;">
      </div>
    </div>
  </div>
</section>

<!-- O QUE FAZEMOS -->
<section class="py-5" style="background: var(--panel);">
  <div class="container">
    <h2 class="section-title text-center mb-2">How We Help Organizations</h2>
    <p class="lead-muted text-center mb-5">Solutions based on data, listening, and methodology</p>
    <div class="row g-4">

      <div class="col-md-4">
        <div class="servico-card">
          <div class="servico-icon"><i class="bi bi-bar-chart-line"></i></div>
          <h5 class="fw-bold mb-2">Economic Studies</h5>
          <p class="lead-muted" style="font-size: 0.9rem;">In-depth analyses of markets, production chains, and economic trends.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="servico-card">
          <div class="servico-icon"><i class="bi bi-grid-1x2"></i></div>
          <h5 class="fw-bold mb-2">Strategic Dashboards</h5>
          <p class="lead-muted" style="font-size: 0.9rem;">Interactive dashboards that transform complex data into clear information for decision-making.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="servico-card">
          <div class="servico-icon"><i class="bi bi-search"></i></div>
          <h5 class="fw-bold mb-2">Market Diagnostics</h5>
          <p class="lead-muted" style="font-size: 0.9rem;">Strategic evaluation of sectors, opportunities, and market risks.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- CLIENTES E PARCEIROS -->
<section class="clientes-section">
  <div class="container">
    <div class="row align-items-start">
      <div class="col-lg-4 mb-5 mb-lg-0">
        <h2 class="section-title text-white mb-3">Clients and Partners</h2>
        <p style="color: rgba(255,255,255,0.5); font-size: 0.9rem; line-height: 1.8;">
          We work with entities from the productive sector, associations, public projects, and private companies.
        </p>
        <p style="color: rgba(255,255,255,0.4); font-size: 0.85rem; font-style: italic; margin-top: 20px;">
          Want to become a partner of Jubart? We are ready to listen to your needs.
        </p>
      </div>
      <div class="col-lg-7 offset-lg-1">
        <div class="cliente-item"><div class="cliente-dot"></div><p>Associations in the agribusiness sector and fishing industry</p></div>
        <div class="cliente-item"><div class="cliente-dot"></div><p>Consulting companies and market intelligence firms</p></div>
        <div class="cliente-item"><div class="cliente-dot"></div><p>Public institutions interested in economic diagnostics</p></div>
        <div class="cliente-item"><div class="cliente-dot"></div><p>Distributors, importers, and professionals in the food supply chain</p></div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-section text-center">
  <div class="container">
    <h2 class="section-title mb-3">Need data intelligence for your organization?</h2>
    <p class="lead-muted mb-4">Get in touch and discover how we can support your decision-making.</p>
    <a href="https://wa.me/5561993553849" target="_blank" class="btn btn-dark btn-lg me-2">Contact on WhatsApp</a>
    <a href="{{ route('contato') }}" class="btn btn-outline-dark btn-lg">Send Message</a>
  </div>
</section>

<footer class="bg-dark text-white text-center py-4">
  <div class="container"><p class="mb-0">&copy; 2025 JubartData. Todos os direitos reservados.</p></div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
