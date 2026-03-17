<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Meu Perfil | JubartData</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="/css/custom.css">
  <style>
    :root { --amarelo: #f0b900; --amarelo-light: #fff8e1; }

    .hero-perfil {
      background: #0f172a;
      padding: 60px 0 50px;
      border-bottom: 4px solid var(--amarelo);
    }

    .avatar-circle {
      width: 72px;
      height: 72px;
      border-radius: 50%;
      background: var(--amarelo);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 2rem;
      font-weight: 800;
      color: #0f172a;
      flex-shrink: 0;
    }

    .perfil-card {
      border: 1px solid var(--line);
      border-top: 4px solid var(--amarelo);
      border-radius: 16px;
      padding: 32px;
      background: #fff;
      margin-bottom: 24px;
    }

    .perfil-card h5 {
      font-weight: 700;
      color: var(--ink);
      margin-bottom: 4px;
    }

    .perfil-card .card-desc {
      font-size: 0.88rem;
      color: var(--muted);
      margin-bottom: 24px;
      padding-bottom: 20px;
      border-bottom: 1px solid var(--line);
    }

    .form-label {
      font-weight: 600;
      font-size: 0.88rem;
      color: var(--ink);
    }

    .form-control {
      border: 1.5px solid var(--line);
      border-radius: 8px;
      padding: 10px 14px;
      font-size: 0.95rem;
      transition: border-color 0.2s, box-shadow 0.2s;
    }

    .form-control:focus {
      border-color: var(--amarelo);
      box-shadow: 0 0 0 3px rgba(240,185,0,0.15);
    }

    .btn-salvar {
      background: #0f172a;
      color: #fff;
      font-weight: 700;
      padding: 10px 24px;
      border-radius: 8px;
      border: none;
      font-size: 0.9rem;
      transition: all 0.2s;
    }

    .btn-salvar:hover { background: #1e293b; color: #fff; }

    .btn-danger-custom {
      background: transparent;
      color: #dc2626;
      font-weight: 700;
      padding: 10px 24px;
      border-radius: 8px;
      border: 1.5px solid #dc2626;
      font-size: 0.9rem;
      transition: all 0.2s;
    }

    .btn-danger-custom:hover { background: #dc2626; color: #fff; }

    .alert-success-custom {
      background: #f0fdf4;
      border: 1.5px solid #86efac;
      border-radius: 8px;
      color: #166534;
      font-size: 0.88rem;
      padding: 10px 16px;
      margin-bottom: 16px;
    }
  </style>
</head>
<body style="background: #f5f5f5;">

<x-header />

<!-- HERO -->
<section class="hero-perfil">
  <div class="container">
    <div class="d-flex align-items-center gap-4">
      <div class="avatar-circle">
        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
      </div>
      <div>
        <h1 class="section-title text-white mb-1">{{ Auth::user()->name }}</h1>
        <p class="mb-0" style="color: rgba(255,255,255,0.5); font-size: 0.9rem;">{{ Auth::user()->email }}</p>
      </div>
    </div>
  </div>
</section>

<!-- CONTEÚDO -->
<section class="py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-7">

        <!-- INFORMAÇÕES DO PERFIL -->
        <div class="perfil-card">
          <h5><i class="bi bi-person me-2" style="color: var(--amarelo);"></i>Informações do Perfil</h5>
          <p class="card-desc">Atualize seu nome e endereço de e-mail.</p>

          @if (session('status') === 'profile-updated')
            <div class="alert-success-custom">
              <i class="bi bi-check-circle-fill me-2"></i> Perfil atualizado com sucesso!
            </div>
          @endif

          <form method="POST" action="{{ route('profile.update') }}">
            @csrf
            @method('patch')

            <div class="mb-3">
              <label for="name" class="form-label">Nome</label>
              <input type="text" id="name" name="name"
                class="form-control @error('name') is-invalid @enderror"
                value="{{ old('name', Auth::user()->name) }}" required>
              @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-4">
              <label for="email" class="form-label">E-mail</label>
              <input type="email" id="email" name="email"
                class="form-control @error('email') is-invalid @enderror"
                value="{{ old('email', Auth::user()->email) }}" required>
              @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <button type="submit" class="btn-salvar">
              <i class="bi bi-check2 me-1"></i> Salvar alterações
            </button>
          </form>
        </div>

        <!-- ALTERAR SENHA -->
        <div class="perfil-card">
          <h5><i class="bi bi-lock me-2" style="color: var(--amarelo);"></i>Alterar Senha</h5>
          <p class="card-desc">Use uma senha forte com pelo menos 8 caracteres.</p>

          @if (session('status') === 'password-updated')
            <div class="alert-success-custom">
              <i class="bi bi-check-circle-fill me-2"></i> Senha atualizada com sucesso!
            </div>
          @endif

          <form method="POST" action="{{ route('password.update') }}">
            @csrf
            @method('put')

            <div class="mb-3">
              <label for="current_password" class="form-label">Senha atual</label>
              <input type="password" id="current_password" name="current_password"
                class="form-control @error('current_password') is-invalid @enderror">
              @error('current_password')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="password" class="form-label">Nova senha</label>
              <input type="password" id="password" name="password"
                class="form-control @error('password') is-invalid @enderror">
              @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-4">
              <label for="password_confirmation" class="form-label">Confirmar nova senha</label>
              <input type="password" id="password_confirmation" name="password_confirmation"
                class="form-control">
            </div>

            <button type="submit" class="btn-salvar">
              <i class="bi bi-shield-check me-1"></i> Atualizar senha
            </button>
          </form>
        </div>

        <!-- EXCLUIR CONTA -->
        <div class="perfil-card" style="border-top-color: #dc2626;">
          <h5><i class="bi bi-trash me-2" style="color: #dc2626;"></i>Excluir Conta</h5>
          <p class="card-desc">Ao excluir sua conta, todos os dados serão permanentemente removidos.</p>

          <button type="button" class="btn-danger-custom" data-bs-toggle="modal" data-bs-target="#modalExcluir">
            <i class="bi bi-trash me-1"></i> Excluir minha conta
          </button>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- MODAL EXCLUIR -->
<div class="modal fade" id="modalExcluir" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content" style="border-radius: 16px; border-top: 4px solid #dc2626;">
      <div class="modal-body p-4">
        <h5 class="fw-bold mb-2">Tem certeza?</h5>
        <p style="font-size: 0.9rem; color: var(--muted);" class="mb-4">
          Esta ação é irreversível. Todos os seus dados serão permanentemente excluídos.
        </p>
        <form method="POST" action="{{ route('profile.destroy') }}">
          @csrf
          @method('delete')
          <div class="mb-3">
            <label class="form-label">Confirme sua senha para continuar</label>
            <input type="password" name="password"
              class="form-control @error('password', 'userDeletion') is-invalid @enderror"
              placeholder="Sua senha atual">
            @error('password', 'userDeletion')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="d-flex gap-2">
            <button type="button" class="btn btn-outline-secondary flex-fill" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-danger flex-fill fw-bold">Excluir conta</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<footer class="bg-dark text-white text-center py-4">
  <div class="container">
    <p class="mb-0">&copy; 2025 JubartData. Todos os direitos reservados.</p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>