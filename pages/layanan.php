<?php include '../header.php'; ?>

<section class="layanan">
    <div class="heading">
        <h2>Layanan yang Kami Sediakan</h2>
    </div>
    <div class="card-warp">
        <div class="card">
            <img src="../img/gambar1.jpg">
            <h4>Cuci Baju</h4>
            <p>Dapat mencuci dengan bersih, wangi dan menjaga baju terlihat seperti baru.</p>
        </div>
        <div class="card">
            <img src="../img/Colorful_Laundry.jpg">
            <h4>Cuci Kering Lipat</h4>
            <p>Pakaian dicuci, dikeringkan, lalu dilipat rapi.</p>
        </div>
        <div class="card">
            <img src="https://i.pinimg.com/736x/c7/49/a8/c749a880f405390ca674c668c05187a1.jpg">
            <h4>Cuci Setrika</h4>
            <p>Dicuci dan disetrika hingga siap pakai.</p>
        </div>
        <div class="card">
            <img src="../img/cuci_putih.jpg">
            <h4>Cuci Khusus Baju Putih</h4>
            <p>Menjaga agar pakaian tetap putih bersih seperti baru.</p>
        </div>
        <div class="card">
            <img src="../img/siap_ambil2.jpg">
            <h4>Laundry Kilat</h4>
            <p>Selesai dalam 6-24 jam.</p>
        </div>
        <div class="card">
            <img src="../img/siap_ambil.jpg">
            <h4>Laundry Express</h4>
            <p>Selesai dalam hitungan jam.</p>
        </div>
        <div class="card">
            <img src="../img/cuci_selimut.jpg">
            <h4>Laundry Satuan</h4>
            <p>Selimut, boneka, Gorden, dll.</p>
        </div>
        <div class="card">
            <img src="../img/cuci_sepatu.jpg">
            <h4>Laundry Sepatu</h4>
            <p>Membersihkan sepatu kain maupun sneakers.</p>
        </div>
        <div class="card">
            <img src="../img/cuci_formal.jpg">
            <h4>Laundry Jaz atau Pakaian Formal</h4>
            <p>Untuk pakaian formal, jas, gaun pesta</p>
        </div>
        <div class="card">
            <img src="../img/cuci_karpet.jpg">
            <h4>Laundry Karpet</h4>
            <p>Karpet rumah atau kantor.</p>
        </div>
        <div class="card">
            <img src="../img/diantar.jpg">
            <h4>Antar dan Ambil di Tempat</h4>
            <p>Paket lengkap dan dapat diantar ke rumah Anda.</p>
        </div>
        <div class="card">
            <img src="../img/cuci_helm.jpg">
            <h4>Cuci Helm</h4>
            <p>Membuat helm menjadi lebih bersih dan wangi.</p>
        </div>
    </div>
</section>

<section class="layanan-cta">
    <div class="heading">
        <h2>Banyak kerjaan jadi ga sempet buat cuci baju ? Pesan aja sekarang ! bisa antar kerumah </h2>
    </div>
    <a href="../pages/pesan.php" class="btn-cta">Pesan Sekarang!</a>
</section>

<div class="layanan-modal-overlay" id="layananModalOverlay">
  <div class="layanan-modal" role="dialog" aria-modal="true" aria-labelledby="layananModalTitle">
    <button class="modal-close" id="layananModalClose" aria-label="Tutup informasi layanan">×</button>
    <div class="modal-left">
      <img src="" alt="Gambar layanan" id="layananModalImage" />
    </div>
    <div class="modal-right">
      <h4 id="layananModalTitle"></h4>
      <p id="layananModalDescription"></p>
      <p class="layanan-modal-info">Max berat: 10kg<br>Harga per-Kg: Rp.6.000</p>
    </div>
  </div>
</div>

<?php include '../footer.php'; ?>