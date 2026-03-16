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
  <title>Contact | JubartData</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="/css/custom.css">
  <style>
    :root { --amarelo: #f0b900; --amarelo-light: #fff8e1; }
    .hero-contato { background: #0f172a; padding: 80px 0 70px; border-bottom: 4px solid var(--amarelo); }
    .hero-badge { display: inline-block; background: var(--amarelo); color: #0f172a; font-size: 11px; font-weight: 700; letter-spacing: 2px; text-transform: uppercase; padding: 5px 14px; border-radius: 4px; margin-bottom: 20px; }
    .contato-card { border: 1px solid var(--line); border-top: 4px solid var(--amarelo); border-radius: 16px; padding: 32px 28px; background: #fff; height: 100%; transition: box-shadow 0.25s, transform 0.25s; }
    .contato-card:hover { box-shadow: 0 8px 32px rgba(0,0,0,0.08); transform: translateY(-4px); }
    .contato-icon { width: 48px; height: 48px; background: var(--amarelo-light); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 16px; }
    .contato-icon i { font-size: 22px; color: #0f172a; }
    .contato-card h5 { font-weight: 700; color: var(--ink); margin-bottom: 8px; }
    .contato-card p { font-size: 0.9rem; color: var(--muted); line-height: 1.7; margin-bottom: 20px; }
    .btn-acessar { background: #0f172a; color: #fff; font-size: 0.85rem; font-weight: 600; padding: 8px 20px; border-radius: 6px; text-decoration: none; display: inline-flex; align-items: center; gap: 6px; transition: all 0.2s; }
    .btn-acessar:hover { background: #1e293b; color: #fff; transform: translateY(-1px); }
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
<section class="hero-contato">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <div class="hero-badge">Contact</div>
        <h1 class="section-title text-white mb-3">
          Let's turn your <span style="color: var(--amarelo);">challenge into data</span>
        </h1>
        <p class="lead" style="color: rgba(255,255,255,0.6);">
          Need a study, dashboard or strategic diagnostic? Talk to Jubart. We'll understand your needs and propose solutions based on data, listening and method.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- CONTACT CHANNELS -->
<section class="py-5" style="background: var(--panel);">
  <div class="container">
    <h2 class="section-title mb-2">Get in touch</h2>
    <p class="lead-muted mb-5">Choose your preferred channel</p>
    <div class="row g-4">

      <div class="col-md-4">
        <div class="contato-card">
          <div class="contato-icon"><i class="bi bi-whatsapp"></i></div>
          <h5>WhatsApp</h5>
          <p>Fast and direct service. Ideal for first contact and questions about our services.</p>
          <a class="btn-acessar" href="https://wa.me/5561993553849" target="_blank" rel="noopener">
            Chat on WhatsApp <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contato-card">
          <div class="contato-icon"><i class="bi bi-envelope"></i></div>
          <h5>E-mail</h5>
          <p>For formal proposals, document submissions and detailed requests. We respond within 24h.</p>
          <a class="btn-acessar" href="mailto:contato@jubartdata.com.br">
            Send e-mail <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contato-card">
          <div class="contato-icon"><i class="bi bi-card-checklist"></i></div>
          <h5>Contact Form</h5>
          <p>Describe your needs in detail. We'll reach out to better understand your project.</p>
          <a class="btn-acessar" href="https://docs.google.com/forms/d/e/SEU_ID_DO_FORMULARIO/viewform" target="_blank" rel="noopener">
            Fill out form <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- CLIENTS & PARTNERS -->
<section class="clientes-section">
  <div class="container">
    <div class="row align-items-start">
      <div class="col-lg-4 mb-5 mb-lg-0">
        <h2 class="section-title text-white mb-3">Clients and Partners</h2>
        <p style="color: rgba(255,255,255,0.5); font-size: 0.9rem; line-height: 1.8;">
          We work with productive sector entities, associations, public projects and private companies.
        </p>
        <p style="color: rgba(255,255,255,0.4); font-size: 0.85rem; font-style: italic; margin-top: 20px;">
          Want to become a Jubart partner? We are ready to hear your needs.
        </p>
      </div>
      <div class="col-lg-7 offset-lg-1">
        <div class="cliente-item"><div class="cliente-dot"></div><p>Agribusiness and seafood sector associations</p></div>
        <div class="cliente-item"><div class="cliente-dot"></div><p>Consulting and market intelligence companies</p></div>
        <div class="cliente-item"><div class="cliente-dot"></div><p>Public institutions interested in economic diagnostics</p></div>
        <div class="cliente-item"><div class="cliente-dot"></div><p>Distributors, importers and food chain professionals</p></div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-section text-center">
  <div class="container">
    <h2 class="section-title mb-3">Ready to get started?</h2>
    <p class="lead-muted mb-4">We turn complexity into clarity. Talk to JubartData.</p>
    <a href="https://wa.me/5561993553849" target="_blank" class="btn btn-dark btn-lg me-2">WhatsApp</a>
    <a href="{{ route('servicos.en') }}" class="btn btn-outline-dark btn-lg">Our services</a>
  </div>
</section>

<footer class="bg-dark text-white text-center py-4">
  <div class="container"><p class="mb-0">&copy; 2025 JubartData. All rights reserved.</p></div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>