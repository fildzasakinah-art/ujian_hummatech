<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pesan Laundry — Form Pemesanan</title>
  <link rel="stylesheet" href="/ujian_hummatech/style.css" />
  <link rel="icon" type="image/png" href="/ujian_hummatech/img/logo.png">
</head>
<body>
 
  <?php include '../header.php'; ?>
 
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
          <h1>Pesan Laundry<br />Kapan Saja Dimana Saja</h1>
          <p>Isi form pemesanan dengan lengkap dan kami akan memproses pesanan Anda dengan cepat dan profesional</p>
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
          <h2>Form Pemesanan</h2>
          <p>Isi Data Pesanan Anda</p>
        </div>
 
        <div class="form-body">
 
          <div class="field">
            <label for="nama_pemesan">Nama Pemesan</label>
            <div class="input-wrap">
              <input type="text" id="nama_pemesan" placeholder="John Doe" required />
            </div>
          </div>
 
          <div class="field">
            <label for="kategori_laundry">Kategori Laundry</label>
            <div class="input-wrap">
              <select id="kategori_laundry" required>
                <option value="">-- Pilih Kategori --</option>
                <option value="cuci_baju">Cuci Baju</option>
                <option value="cuci_kering_lipat">Cuci Kering Lipat</option>
                <option value="cuci_setrika">Cuci Setrika</option>
                <option value="cuci_putih">Cuci Khusus Baju Putih</option>
                <option value="laundry_satuan">Laundry Satuan (Selimut, Gorden, Boneka)</option>
                <option value="cuci_sepatu">Cuci Sepatu (Snekers, Kain, Kulit)</option>
                <option value="cuci_khusus">Cuci Khusus (Sutra, Woll, Linen Premium, Rayon)</option>
                <option value="cuci_karpet">Cuci Karpet</option>
                <option value="cuci_helm">Cuci Helm</option>
              </select>
            </div>
          </div>
 
          <div class="field">
            <label for="kategori_pengantaran">Pengantaran</label>
            <div class="input-wrap">
              <select id="kategori_pengantaran" required>
                <option value="">-- Pilih Pengantaran --</option>
                <option value="diantar_diambil">Diantar dan Diambil</option>
                <option value="diantar_saja">Diantar Saja</option>
                <option value="diambil_saja">Diambil Saja</option>
                <option value="tidak_keduanya">Tidak Keduanya</option>
              </select>
            </div>
          </div>
 
          <div class="field">
            <label for="kategori_layanan">Kategori Layanan</label>
            <div class="input-wrap">
              <select id="kategori_layanan" required>
                <option value="">-- Pilih Layanan --</option>
                <option value="laundry_kilat">Laundry Kilat (1-3 jam)</option>
                <option value="laundry_express">Laundry Express (4-6 jam)</option>
                <option value="laundry_reguler">Laundry Reguler (1-2 hari)</option>
              </select>
            </div>
          </div>
 
          <div class="field">
            <label for="waktu_pengambilan">Waktu Pengambilan</label>
            <div class="input-wrap">
              <input type="datetime-local" id="waktu_pengambilan" required />
            </div>
          </div>
 
          <div class="field">
            <label for="catatan">Catatan Tambahan</label>
            <textarea id="catatan" placeholder="Tulis catatan khusus untuk pesanan Anda..." style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ddd; font-family: inherit; font-size: 14px;" rows="3"></textarea>
          </div>
 
          <button class="btn-login" type="button" id="btnPesan">
            <span>Pesan Sekarang</span>
          </button>
 
          <div class="divider"><span>atau</span></div>
        </div>
 
        <p class="signup-prompt">
          Ingin melihat status pesanan?
          <a href="tracking.php">Lacak pesanan</a>
        </p>
      </div>
    </div>
 
  </div>
 
  <!-- DATA TABLE (BELOW LAYOUT) -->
  <section class="data-section">
    <div class="container">
      <h2>Data Pemesanan</h2>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Pemesan</th>
              <th>Kategori</th>
              <th>Layanan</th>
              <th>Waktu Pengambilan</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody id="dataTable">
          </tbody>
        </table>
      </div>
    </div>
  </section>
 
  <!-- BUKTI PEMESANAN (MODAL/PRINTABLE) -->
  <section id="bukti-pesan" class="bukti-pesanan" style="display: none;">
    <div class="container">
      <div class="bukti-card">
        <h3>Bukti Pemesanan Anda</h3>
        <div id="bukti-content"></div>
        <button onclick="window.print()" class="btn-print">Cetak / Download</button>
      </div>
    </div>
  </section>
 
  <?php include '../footer.php'; ?>
</body>
</html>