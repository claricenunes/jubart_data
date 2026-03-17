<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - JubartData</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="/css/custom.css">
  <style>
    :root { --amarelo: #f0b900; }
    body { background: #f5f5f5; }
    .login-wrapper { min-height: 85vh; display: flex; align-items: center; justify-content: center; padding: 40px 16px; }
    .login-card { background: #fff; border: 1px solid var(--line); border-top: 4px solid var(--amarelo); border-radius: 16px; padding: 40px 36px; width: 100%; max-width: 420px; box-shadow: 0 4px 24px rgba(0,0,0,0.06); }
    .login-logo { display: block; margin: 0 auto 24px; max-width: 120px; }
    .login-card h4 { font-weight: 800; color: var(--ink); text-align: center; margin-bottom: 6px; }
    .login-subtitle { text-align: center; color: var(--muted); font-size: 0.9rem; margin-bottom: 28px; }
    .form-label { font-weight: 600; font-size: 0.88rem; color: var(--ink); }
    .form-control { border: 1.5px solid var(--line); border-radius: 8px; padding: 10px 14px; font-size: 0.95rem; transition: border-color 0.2s, box-shadow 0.2s; }
    .form-control:focus { border-color: var(--amarelo); box-shadow: 0 0 0 3px rgba(240,185,0,0.15); }
    .btn-login { background: #0f172a; color: #fff; font-weight: 700; padding: 11px; border-radius: 8px; border: none; width: 100%; font-size: 0.95rem; transition: all 0.2s; }
    .btn-login:hover { background: #1e293b; color: #fff; }
    .divider { display: flex; align-items: center; gap: 12px; margin: 20px 0; color: var(--muted); font-size: 0.82rem; }
    .divider::before, .divider::after { content: ''; flex: 1; height: 1px; background: var(--line); }
    .btn-register { display: block; text-align: center; background: transparent; color: #0f172a; font-weight: 700; padding: 11px; border-radius: 8px; border: 1.5px solid #0f172a; width: 100%; font-size: 0.95rem; text-decoration: none; transition: all 0.2s; }
    .btn-register:hover { background: #0f172a; color: #fff; }
  </style>
</head>
<body>

  <x-headerEn />

  <div class="login-wrapper">
    <div class="login-card">

      <img src="/imagens/logo_jubart.png" alt="JubartData Logo" class="login-logo">

      <h4>Welcome back</h4>
      <p class="login-subtitle">Sign in to your account to continue</p>

       <x-auth-session-status class="mb-3" :status="session('status')" />

      <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-3">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" id="email" name="email"
            class="form-control @error('email') is-invalid @enderror"
            value="{{ old('email') }}" required autofocus>
          @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <div class="d-flex justify-content-between align-items-center mb-1">
            <label for="password" class="form-label mb-0">Password</label>
            @if (Route::has('password.request'))
              <a href="{{ route('password.request') }}" class="small" style="color: var(--muted); font-size: 0.82rem;">
                Forgot your password?
              </a>
            @endif
          </div>
          <input type="password" id="password" name="password"
            class="form-control @error('password') is-invalid @enderror" required>
          @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-4 form-check">
          <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
          <label class="form-check-label" for="remember_me" style="font-size: 0.88rem;">Remember me</label>
        </div>

        <button type="submit" class="btn-login">Sign in</button>

      </form>

      <div class="divider">or</div>

      @if (Route::has('register'))
        <a href="{{ route('register') }}" class="btn-register">
          <i class="bi bi-person-plus me-1"></i> Create an account
        </a>
      @endif

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>