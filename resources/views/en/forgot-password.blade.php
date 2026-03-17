<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot Password | JubartData</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="/css/custom.css">
  <style>
    :root { --amarelo: #f0b900; }
    body { background: #f5f5f5; }
    .wrapper { min-height: 85vh; display: flex; align-items: center; justify-content: center; padding: 40px 16px; }
    .card-custom { background: #fff; border: 1px solid var(--line); border-top: 4px solid var(--amarelo); border-radius: 16px; padding: 40px 36px; width: 100%; max-width: 420px; box-shadow: 0 4px 24px rgba(0,0,0,0.06); }
    .login-logo { display: block; margin: 0 auto 24px; max-width: 120px; }
    .card-custom h4 { font-weight: 800; color: var(--ink); text-align: center; margin-bottom: 6px; }
    .card-subtitle { text-align: center; color: var(--muted); font-size: 0.88rem; margin-bottom: 28px; line-height: 1.6; }
    .form-label { font-weight: 600; font-size: 0.88rem; color: var(--ink); }
    .form-control { border: 1.5px solid var(--line); border-radius: 8px; padding: 10px 14px; font-size: 0.95rem; transition: border-color 0.2s, box-shadow 0.2s; }
    .form-control:focus { border-color: var(--amarelo); box-shadow: 0 0 0 3px rgba(240,185,0,0.15); }
    .btn-enviar { background: #0f172a; color: #fff; font-weight: 700; padding: 11px; border-radius: 8px; border: none; width: 100%; font-size: 0.95rem; transition: all 0.2s; }
    .btn-enviar:hover { background: #1e293b; color: #fff; }
    .btn-voltar { display: block; text-align: center; color: var(--muted); font-size: 0.88rem; text-decoration: none; margin-top: 16px; transition: color 0.2s; }
    .btn-voltar:hover { color: var(--ink); }
  </style>
</head>
<body>

  <x-headerEn />

  @if (session('status'))
  <div style="position:fixed;top:24px;left:50%;transform:translateX(-50%);z-index:9999;background:#0f172a;color:#fff;padding:14px 24px;border-radius:100px;font-size:0.9rem;font-weight:600;display:flex;align-items:center;gap:10px;box-shadow:0 8px 24px rgba(0,0,0,0.2);animation:slideDown 0.4s ease,fadeOut 0.5s ease 3.5s forwards;">
    <span style="width:10px;height:10px;border-radius:50%;background:#f0b900;flex-shrink:0;"></span>
    {{ session('status') }}
  </div>
  <style>
    @keyframes slideDown { from{opacity:0;transform:translateX(-50%) translateY(-20px)} to{opacity:1;transform:translateX(-50%) translateY(0)} }
    @keyframes fadeOut { from{opacity:1} to{opacity:0;pointer-events:none} }
  </style>
  @endif

  <div class="wrapper">
    <div class="card-custom">

      <img src="/imagens/logo_jubart.png" alt="JubartData Logo" class="login-logo">

      <h4>Forgot your password?</h4>
      <p class="card-subtitle">
        No problem. Enter your email address and we'll send you a link to reset your password.
      </p>

      <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="mb-4">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" id="email" name="email"
            class="form-control @error('email') is-invalid @enderror"
            value="{{ old('email') }}" required autofocus>
          @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <button type="submit" class="btn-enviar">
          <i class="bi bi-envelope me-1"></i> Send reset link
        </button>

      </form>

      <a href="{{ route('login.en') }}" class="btn-voltar">
        <i class="bi bi-arrow-left me-1"></i> Back to login
      </a>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>