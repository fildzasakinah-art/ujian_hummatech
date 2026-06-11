<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login — Masuk ke Akun</title>
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
          <h1>Pekerjaan Banyak<br />Butuh Mengurangi Beban PekerjaanMu ?</h1>
          <p>CloudLoundry disini membantu mengurangi </p>
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
          <h2>Selamat Datang</h2>
          <p>Masuk Agar Bisa Memesan</p>
        </div>

        <div class="form-body">

          <div class="field">
            <label for="email">Email</label>
            <div class="input-wrap">
              <input type="email" id="email" placeholder="kicaw.mania@email.com" autocomplete="email" />
            </div>
          </div>

          <div class="field">
            <div class="input-wrap">
              <input type="password" id="password" placeholder="cukingkucinglucu" autocomplete="current-password" />
              <button type="button" class="toggle-pw" aria-label="Tampilkan kata sandi">
              </button>
            </div>
          </div>

          <button class="btn-login" type="button">
            <span>Login</span>
          </button>

          <div class="divider"><span>atau</span></div>
        </div>

        <p class="signup-prompt">
          Belum punya akun?
          <a href="singin.php">Daftar sekarang</a>
        </p>
      </div>
    </div>

  </div>
  <script src="../script.js"></script>
</body>
</html>
