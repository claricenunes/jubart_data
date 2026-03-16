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
  <title>Services | JubartData</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="/css/custom.css">
  <style>
    :root { --amarelo: #f0b900; --amarelo-light: #fff8e1; }
    .hero-servicos { background: #0f172a; padding: 80px 0 70px; border-bottom: 4px solid var(--amarelo); }
    .hero-badge { display: inline-block; background: var(--amarelo); color: #0f172a; font-size: 11px; font-weight: 700; letter-spacing: 2px; text-transform: uppercase; padding: 5px 14px; border-radius: 4px; margin-bottom: 20px; }
    .servico-card { border: 1px solid var(--line); border-top: 4px solid var(--amarelo); border-radius: 16px; padding: 32px 28px; height: 100%; background: #fff; transition: box-shadow 0.25s, transform 0.25s; }
    .servico-card:hover { box-shadow: 0 8px 32px rgba(0,0,0,0.08); transform: translateY(-4px); }
    .servico-icon { width: 48px; height: 48px; background: var(--amarelo-light); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 16px; }
    .servico-icon i { font-size: 22px; color: #0f172a; }
    .base-group { background: var(--panel); border: 1px solid var(--line); border-radius: 16px; padding: 28px; height: 100%; }
    .base-group-title { font-weight: 800; color: var(--ink); margin-bottom: 16px; padding-bottom: 12px; border-bottom: 2px solid var(--amarelo); display: flex; align-items: center; gap: 10px; }
    .badge-pais { background: #0f172a; color: #fff; font-size: 10px; font-weight: 600; padding: 3px 8px; border-radius: 4px; letter-spacing: 1px; }
    .base-item { padding: 10px 0; border-bottom: 1px solid var(--line); }
    .base-item:last-child { border-bottom: none; padding-bottom: 0; }
    .base-item strong { display: block; font-size: 0.88rem; font-weight: 700; color: var(--ink); margin-bottom: 2px; }
    .base-item span { font-size: 0.82rem; color: var(--muted); }
    .metodologia-section { background: #0f172a; padding: 80px 0; }
    .metodo-step { display: flex; gap: 20px; margin-bottom: 32px; }
    .metodo-step:last-child { margin-bottom: 0; }
    .metodo-number { flex-shrink: 0; width: 42px; height: 42px; border-radius: 50%; background: var(--amarelo); display: flex; align-items: center; justify-content: center; font-size: 0.85rem; font-weight: 800; color: #0f172a; }
    .metodo-content h5 { font-weight: 700; color: #fff; margin-bottom: 6px; }
    .metodo-content p { font-size: 0.9rem; color: rgba(255,255,255,0.5); line-height: 1.75; margin: 0; }
    .cta-section { background: var(--amarelo); padding: 80px 0; }
  </style>
</head>
<body>

<x-headerEn />

<!-- HERO -->
<section class="hero-servicos">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <div class="hero-badge">Our Services</div>
        <h1 class="section-title text-white mb-3">
          Data that drives <span style="color: var(--amarelo);">strategic decisions</span>
        </h1>
        <p class="lead" style="color: rgba(255,255,255,0.6);">
          We combine automation, analysis and interactive visualization to turn complex data into actionable knowledge.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- SERVICES -->
<section class="py-5" style="background: var(--panel);">
  <div class="container">
    <h2 class="section-title mb-2">Tailored solutions</h2>
    <p class="lead-muted mb-5">What we offer for each challenge</p>
    <div class="row g-4">

      <div class="col-md-6 col-lg-3">
        <div class="servico-card">
          <div class="servico-icon"><i class="bi bi-grid-1x2"></i></div>
          <h5 class="fw-bold mb-2">Interactive Dashboards</h5>
          <p class="lead-muted" style="font-size: 0.9rem;">Custom panels for monitoring prices, foreign trade and economic performance with dynamic visualizations.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="servico-card">
          <div class="servico-icon"><i class="bi bi-cpu"></i></div>
          <h5 class="fw-bold mb-2">Automated Data Collection</h5>
          <p class="lead-muted" style="font-size: 0.9rem;">Automated capture from public and private sources, eliminating manual work and reducing operational errors.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="servico-card">
          <div class="servico-icon"><i class="bi bi-bar-chart-line"></i></div>
          <h5 class="fw-bold mb-2">Market Studies</h5>
          <p class="lead-muted" style="font-size: 0.9rem;">Custom reports with seasonality, volume and sector trend analysis for seafood, dairy, meat and food markets.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="servico-card">
          <div class="servico-icon"><i class="bi bi-diagram-3"></i></div>
          <h5 class="fw-bold mb-2">AI Modeling</h5>
          <p class="lead-muted" style="font-size: 0.9rem;">Analytical routines with artificial intelligence for classification, summaries and data enrichment.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- DATA SOURCES -->
<section class="py-5">
  <div class="container">
    <h2 class="section-title mb-2">Data sources we use</h2>
    <p class="lead-muted mb-5">National and international high-reliability databases</p>
    <div class="row g-4">

      <div class="col-md-6">
        <div class="base-group">
          <div class="base-group-title">National Databases <span class="badge-pais">BR</span></div>
          <div class="base-item"><strong>ComexStat (MDIC)</strong><span>Official Brazilian exports and imports data</span></div>
          <div class="base-item"><strong>Central Bank of Brazil (BACEN)</strong><span>Exchange rates, interest and macroeconomic indicators</span></div>
          <div class="base-item"><strong>IBGE</strong><span>CPI, industrial production and population data</span></div>
          <div class="base-item"><strong>MAPA / CEAGESP / Conab</strong><span>Agricultural prices, supply and demand</span></div>
          <div class="base-item"><strong>Retail Websites</strong><span>Data collected from supermarkets and e-commerce</span></div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="base-group">
          <div class="base-group-title">International Databases <span class="badge-pais">GLOBAL</span></div>
          <div class="base-item"><strong>COMTRADE (UN)</strong><span>International trade by product code</span></div>
          <div class="base-item"><strong>World Bank</strong><span>Global social and economic indicators</span></div>
          <div class="base-item"><strong>FAS-GATS (USDA)</strong><span>US agricultural exports by country and product</span></div>
          <div class="base-item"><strong>ODEPA (Chile)</strong><span>Agricultural indicators for the Chilean market</span></div>
          <div class="base-item"><strong>FishStat (FAO)</strong><span>Global seafood production and trade statistics</span></div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- METHODOLOGY -->
<section class="metodologia-section">
  <div class="container">
    <div class="row align-items-start">
      <div class="col-lg-4 mb-5 mb-lg-0">
        <h2 class="section-title text-white mb-3">Our own differentiated methodology</h2>
        <p style="color: rgba(255,255,255,0.5); font-size: 0.9rem; line-height: 1.8;">
          Grounded in Economic Sociology and Discourse Analysis, we interpret data within their social, political and symbolic contexts.
        </p>
      </div>
      <div class="col-lg-7 offset-lg-1">
        <div class="metodo-step"><div class="metodo-number">01</div><div class="metodo-content"><h5>Active listening</h5><p>We identify strategic objectives and perceptions that guide the organization before any analysis.</p></div></div>
        <div class="metodo-step"><div class="metodo-number">02</div><div class="metodo-content"><h5>Exploratory interviews</h5><p>Conversations with market actors to understand economic flows and the meanings attributed to them.</p></div></div>
        <div class="metodo-step"><div class="metodo-number">03</div><div class="metodo-content"><h5>Data analysis and modeling</h5><p>Cross-referencing national and international databases with custom analytical models for each project.</p></div></div>
        <div class="metodo-step"><div class="metodo-number">04</div><div class="metodo-content"><h5>Decision-oriented delivery</h5><p>Reports and dashboards that translate complexity into actionable knowledge for decision-makers.</p></div></div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-section text-center">
  <div class="container">
    <h2 class="section-title mb-3">Ready to transform your data?</h2>
    <p class="lead-muted mb-4">Talk to JubartData. We turn complexity into clarity.</p>
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