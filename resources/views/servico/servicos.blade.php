<!DOCTYPE html>
<html lang="pt-br">
<head>

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17490337789"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'AW-17490337789');
  </script>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Serviços | JubartData</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
<a class="nav-link {{ request()->routeIs('servicos') ? 'active' : '' }}" aria-current="page" href="{{ route('servicos') }}">Serviços</a>
</li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('dashboards') }}">Dashboards</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('contato') }}">Contato</a>
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

<!-- Conteúdo Principal -->
<main class="container py-5">
  <section class="mb-5">
    <h2 class="mb-3">Nossos Serviços</h2>
    <p>
      Na JubartData, transformamos dados em decisões estratégicas. Atuamos com inteligência artificial, automação e visualização interativa para apoiar instituições públicas, associações e empresas na leitura de mercados complexos. Nossos serviços combinam rigor técnico com acessibilidade e impacto visual.
    </p>
  </section>

  <section class="mb-5">
    <h4>📊 Dashboards Interativos</h4>
    <p>Criamos painéis sob medida para monitoramento de preços, comércio exterior, desempenho econômico e comportamento do mercado. Utilizamos ferramentas como Python, Plotly e integração com bancos de dados para garantir visualizações dinâmicas, seguras e responsivas.</p>
    
    <h4>⚙️ Coleta Automatizada de Dados</h4>
    <p>Automatizamos a captura de dados em fontes públicas e privadas, com foco em confiabilidade e frequência. Nossas soluções eliminam a necessidade de trabalho manual em planilhas, economizando tempo e reduzindo erros. Coletamos dados de portais governamentais, mercados online, APIs e notícias.</p>

    <h4>📈 Estudos de Mercado e Análises Setoriais</h4>
    <p>Produzimos relatórios personalizados com base em dados reais, voltados para o entendimento de mercados específicos: pescado, laticínios, carnes, alimentos e bebidas. Avaliamos volumes, preços, sazonalidade, comportamento de consumo, estrutura de mercado e oportunidades estratégicas.</p>

    <h4>🧠 Modelagem sob Demanda</h4>
    <p>Desenvolvemos rotinas analíticas adaptadas à maturidade digital do cliente. Utilizamos inteligência artificial para gerar resumos, classificar conteúdos, enriquecer dashboards e destacar informações relevantes. A IA é usada com responsabilidade, clareza e alinhada aos objetivos do projeto.</p>
  </section>

  <section class="mb-5">
    <h3>Bases de Dados Utilizadas</h3>

    <h5 class="mt-4">🇧🇷 Bases Nacionais</h5>
    <ul>
      <li><strong>ComexStat (MDIC):</strong> Dados oficiais de exportações e importações do Brasil</li>
      <li><strong>Banco Central do Brasil (BACEN):</strong> Indicadores macroeconômicos: câmbio, juros, risco país</li>
      <li><strong>IBGE:</strong> IPCA, produção industrial, agropecuária, dados populacionais</li>
      <li><strong>MAPA / CEAGESP / Conab:</strong> Preços agrícolas, abastecimento, oferta e demanda</li>
      <li><strong>Sites de Varejo:</strong> Dados coletados automaticamente de supermercados e e-commerces</li>
    </ul>

    <h5 class="mt-4">🌍 Bases Internacionais</h5>
    <ul>
      <li><strong>COMTRADE (ONU):</strong> Comércio internacional detalhado por código de produto</li>
      <li><strong>World Bank:</strong> Indicadores sociais e econômicos globais</li>
      <li><strong>FAS-GATS (USDA):</strong> Exportações agrícolas dos EUA por país e produto</li>
      <li><strong>ODEPA (Chile):</strong> Indicadores agropecuários do mercado chileno</li>
      <li><strong>FishStat (FAO):</strong> Estatísticas globais de produção e comércio de pescados</li>
    </ul>
  </section>

  <section class="mb-5">
    <h3>Nossa Metodologia</h3>
    <p>
      Na JubartData, a análise de mercado vai além dos números. Atuamos com uma <strong>metodologia própria baseada na Sociologia Econômica e na Análise do Discurso</strong>, o que nos permite interpretar os dados dentro de seus contextos sociais, políticos e simbólicos.
    </p>
    <p>
      Cada projeto começa com uma <strong>escuta ativa do cliente</strong>, onde identificamos os objetivos estratégicos e as percepções que orientam sua atuação. A partir daí, realizamos entrevistas exploratórias com atores do mercado — fornecedores, compradores, associações, agentes públicos e demais tomadores de decisão — para compreender não apenas os fluxos econômicos, mas os sentidos atribuídos a eles.
    </p>
    <p>
      Essa base empírica e teórica sustenta a definição de estratégias mais sólidas, ancoradas em dados objetivos e em compreensões compartilhadas pelos agentes do setor. <strong>Nosso compromisso é entregar conhecimento que faça sentido para quem decide.</strong>
    </p>
  </section>

  <section class="text-center mt-5">
    <h5>Pronto para transformar seus dados em decisões?</h5>
    <p>Fale com a Jubart. Transformamos complexidade em clareza.</p>
  </section>
</main>

<!-- Rodapé -->
<footer class="bg-dark text-white text-center py-4 mt-5">
  <div class="container">
    <p class="mb-0">&copy; 2025 JubartData. Todos os direitos reservados.</p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
