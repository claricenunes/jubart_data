<!DOCTYPE html>
<html lang="pt-BR">
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
  <title>Painel de Preços | JubartData</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="/css/custom.css">
  <style>
    :root { --amarelo: #f0b900; --amarelo-light: #fff8e1; }

    .hero-painel {
      background: #0f172a;
      padding: 50px 0 40px;
      border-bottom: 4px solid var(--amarelo);
    }

    .hero-badge {
      display: inline-block;
      background: var(--amarelo);
      color: #0f172a;
      font-size: 11px;
      font-weight: 700;
      letter-spacing: 2px;
      text-transform: uppercase;
      padding: 5px 14px;
      border-radius: 4px;
      margin-bottom: 16px;
    }

    .selector-section {
      background: var(--panel);
      padding: 40px 0;
      border-bottom: 1px solid var(--line);
    }

    .produto-select {
      appearance: none;
      background: #fff url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%23111' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E") no-repeat right 16px center;
      border: 1.5px solid var(--line);
      border-radius: 10px;
      padding: 14px 48px 14px 18px;
      font-size: 1rem;
      font-weight: 600;
      color: var(--ink);
      width: 100%;
      max-width: 480px;
      cursor: pointer;
      transition: border-color 0.2s, box-shadow 0.2s;
    }

    .produto-select:focus {
      outline: none;
      border-color: var(--amarelo);
      box-shadow: 0 0 0 3px rgba(240, 185, 0, 0.2);
    }

    .produto-select:hover { border-color: #999; }

    .painel-section { padding: 40px 0 60px; }

    .product-block { display: none; }
    .product-block.ativo { display: block; }

    .product-block img {
      width: 100%;
      max-width: 600px;
      height: auto;
      border-radius: 16px;
      border: 1px solid var(--line);
      box-shadow: 0 4px 20px rgba(0,0,0,0.06);
      display: block;
      margin: 0 auto;
    }

    .empty-state {
      text-align: center;
      padding: 60px 20px;
      color: var(--muted);
    }

    .empty-state i {
      font-size: 48px;
      color: var(--amarelo);
      margin-bottom: 16px;
      display: block;
    }

    .btn-voltar {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      color: rgba(255,255,255,0.7);
      font-size: 0.88rem;
      text-decoration: none;
      transition: color 0.2s;
    }

    .btn-voltar:hover { color: #fff; }
  </style>
</head>
<body>

<x-header />

<!-- HERO -->
<section class="hero-painel">
  <div class="container">
    <a href="{{ route('dashboards') }}" class="btn-voltar mb-3 d-inline-flex">
      <i class="bi bi-arrow-left"></i> Voltar aos Dashboards
    </a>
    <div class="hero-badge">Painel Diário</div>
    <h1 class="section-title text-white mb-2">
      Painel de <span style="color: var(--amarelo);">Preços por Loja</span>
    </h1>

  </div>
</section>

<!-- SELETOR -->
<section class="selector-section">
  <div class="container">
    <label class="fw-bold mb-2 d-block" style="color: var(--ink);">Selecione a categoria de produto</label>
    <select id="selector" class="produto-select">
      <option value="">— Escolha um produto —</option>
      <option value="frango">Frango</option>
      <option value="picanha">Picanha</option>
      <option value="tilapia">Tilápia</option>
      <option value="camarao">Camarão</option>
      <option value="salmao">Salmão</option>
      <option value="bacalhau">Bacalhau</option>
      <option value="merluza">Merluza</option>
      <option value="ovos">Ovos</option>
      <option value="leite">Leite</option>
      <option value="azeite">Azeite</option>
      <option value="cafe">Café</option>
    </select>
  </div>
</section>

<!-- PAINÉIS -->
<section class="painel-section">
  <div class="container">

    <!-- Estado vazio -->
    <div id="empty-state" class="empty-state">
      <i class="bi bi-bar-chart-line"></i>
      <h5 class="fw-bold mb-2">Selecione um produto acima</h5>
      <p>Escolha uma categoria para visualizar o painel de preços.</p>
    </div>

    <div id="frango" class="product-block"><img src="/imagens/imagens_car_mor_sp_varios_produtos/frango.png" alt="Painel de preços - Frango"></div>
    <div id="picanha" class="product-block"><img src="/imagens/imagens_car_mor_sp_varios_produtos/picanha.png" alt="Painel de preços - Picanha"></div>
    <div id="tilapia" class="product-block"><img src="/imagens/imagens_car_mor_sp_varios_produtos/tilápia.png" alt="Painel de preços - Tilápia"></div>
    <div id="camarao" class="product-block"><img src="/imagens/imagens_car_mor_sp_varios_produtos/camarão.png" alt="Painel de preços - Camarão"></div>
    <div id="salmao" class="product-block"><img src="/imagens/imagens_car_mor_sp_varios_produtos/salmão.png" alt="Painel de preços - Salmão"></div>
    <div id="bacalhau" class="product-block"><img src="/imagens/imagens_car_mor_sp_varios_produtos/bacalhau.png" alt="Painel de preços - Bacalhau"></div>
    <div id="merluza" class="product-block"><img src="/imagens/imagens_car_mor_sp_varios_produtos/merluza.png" alt="Painel de preços - Merluza"></div>
    <div id="ovos" class="product-block"><img src="/imagens/imagens_car_mor_sp_varios_produtos/ovos.png" alt="Painel de preços - Ovos"></div>
    <div id="leite" class="product-block"><img src="/imagens/imagens_car_mor_sp_varios_produtos/leite.png" alt="Painel de preços - Leite"></div>
    <div id="azeite" class="product-block"><img src="/imagens/imagens_car_mor_sp_varios_produtos/azeite.png" alt="Painel de preços - Azeite"></div>
    <div id="cafe" class="product-block"><img src="/imagens/imagens_car_mor_sp_varios_produtos/café.png" alt="Painel de preços - Café"></div>

  </div>
</section>

<footer class="bg-dark text-white text-center py-4">
  <div class="container">
    <p class="mb-0">&copy; 2025 JubartData. Todos os direitos reservados.</p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  const produtos = ["frango","picanha","tilapia","camarao","salmao","bacalhau","merluza","ovos","leite","azeite","cafe"];

  document.getElementById("selector").addEventListener("change", function () {
    produtos.forEach(p => {
      const el = document.getElementById(p);
      if (el) el.classList.remove("ativo");
    });

    const emptyState = document.getElementById("empty-state");

    if (this.value) {
      emptyState.style.display = "none";
      const bloco = document.getElementById(this.value);
      if (bloco) bloco.classList.add("ativo");
    } else {
      emptyState.style.display = "block";
    }
  });
</script>
</body>
</html>