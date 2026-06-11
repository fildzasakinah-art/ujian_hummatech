<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Daftar — Buat Akun Baru</title>
  <link rel="stylesheet" href="../style.css" />
  <link rel="icon" type="image/png" href="../img/logo.png">
</head>
<body>

  <div class="layout">

    <!-- KIRIIII: Gambarrr -->
    <div class="panel-image">
      <div class="dots-bg"></div>
      <div class="image-overlay"></div>
      <div class="brand-content">
        <div class="brand-logo">
          <span class="logo-name">CloudLaundry</span>
        </div>
        <div class="brand-tagline">
          <h1>Bergabunglah Dengan<br />Ribuan Pengguna CloudLaundry</h1>
          <p>Daftarkan akun Anda sekarang dan nikmati kemudahan layanan laundry online</p>
        </div>
        <div class="brand-dots">
          <span></span><span></span><span></span>
        </div>
      </div>
    </div>

    <!-- KANANNNN: Card Formmmm -->
    <div class="panel-form">
      <div class="card">
        <div class="card-accent"></div>

        <div class="card-header">
          <h2>Buat Akun Baru</h2>
          <p>Daftar untuk Memulai Pemesanan</p>
        </div>

        <form id="signupForm" class="form-body" novalidate>

          <div class="field">
            <label for="nama">Nama Lengkap</label>
            <div class="input-wrap">
              <input type="text" id="nama" placeholder="John Doe" autocomplete="name" />
            </div>
          </div>

          <div class="field">
            <label for="email">Email</label>
            <div class="input-wrap">
              <input type="email" id="email" placeholder="nama@email.com" autocomplete="email" />
            </div>
          </div>

          <div class="field">
            <label for="password">Password</label>
            <div class="input-wrap">
              <input type="password" id="password" placeholder="Minimal 8 karakter" autocomplete="new-password" />
              <button type="button" class="toggle-pw" aria-label="Tampilkan kata sandi">Tampilkan</button>
            </div>
          </div>

          <div class="field">
            <label for="confirm">Konfirmasi Password</label>
            <div class="input-wrap">
              <input type="password" id="confirm" placeholder="Ketik ulang password" autocomplete="new-password" />
              <button type="button" class="toggle-pw" aria-label="Tampilkan kata sandi">Tampilkan</button>
            </div>
          </div>

          <button class="btn-login" type="submit">
            <span>Daftar</span>
          </button>

          <div class="divider"><span>atau</span></div>
        </form>

        <p class="signup-prompt">
          Sudah punya akun?
          <a href="login.php">Masuk sekarang</a>
        </p>
      </div>
    </div>

  </div>
  </section>

  <script src="../script.js"></script>
</body>
</html>
