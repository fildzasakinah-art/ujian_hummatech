const hamburger = document.getElementById('hamburger');
const navLinks = document.querySelector('.nav-links');
if (hamburger && navLinks) {
  hamburger.addEventListener('click', () => {
    navLinks.classList.toggle('nav-open');
  });
}

const toggleBtn = document.querySelector('.toggle-pw');
const pwInput = document.getElementById('password');
if (toggleBtn && pwInput) {
  toggleBtn.addEventListener('click', () => {
    const isHidden = pwInput.type === 'password';
    pwInput.type = isHidden ? 'text' : 'password';
    toggleBtn.style.color = isHidden ? 'var(--indigo)' : '';
  });
}

//LAyanannnnnnn

// BUATT INISIALISASI DATA PESAN 
let pesananList = [];

function resetPesananState() {
  pesananList = [];
  const dataTable = document.getElementById('dataTable');
  if (dataTable) {
    dataTable.innerHTML = '';
  }
}

// Inisialisasi saat halaman dibuka
document.addEventListener('DOMContentLoaded', function() {
  resetPesananState();

  const btnPesan = document.getElementById('btnPesan');
  if (btnPesan) {
    btnPesan.addEventListener('click', handlePesan);
  }

  const signupForm = document.getElementById('signupForm');
  if (signupForm) {
    signupForm.addEventListener('submit', handleSignup);
  }

  initLayananModals();
});

window.addEventListener('pageshow', function(event) {
  if (event.persisted) {
    resetPesananState();
  }
});

// ===== HANDLE FORM SUBMISSION =====
function handlePesan() {
  const namaPemesan = document.getElementById('nama_pemesan').value.trim();
  const kategoriLaundry = document.getElementById('kategori_laundry').value;
  const kategoriPengantaran = document.getElementById('kategori_pengantaran').value;
  const kategoriLayanan = document.getElementById('kategori_layanan').value;
  const waktuPengambilan = document.getElementById('waktu_pengambilan').value;
  const catatan = document.getElementById('catatan').value.trim();

  // ===== VALIDASI =====
  if (!namaPemesan) {
    alert('Nama pemesan harus diisi!');
    return;
  }
  if (!kategoriLaundry) {
    alert('Pilih kategori laundry!');
    return;
  }
  if (!kategoriPengantaran) {
    alert('Pilih kategori pengantaran!');
    return;
  }
  if (!kategoriLayanan) {
    alert('Pilih kategori layanan!');
    return;
  }
  if (!waktuPengambilan) {
    alert('Pilih waktu pengambilan!');
    return;
  }

  // ===== BUAT OBJECT PESANAN =====
  const pesanan = {
    id: Date.now(),
    namaPemesan: namaPemesan,
    kategoriLaundry: kategoriLaundry,
    kategoriPengantaran: kategoriPengantaran,
    kategoriLayanan: kategoriLayanan,
    waktuPengambilan: waktuPengambilan,
    catatan: catatan,
    tanggalPesan: new Date().toLocaleString('id-ID'),
    status: 'Menunggu Konfirmasi'
  };

  // jadiin simpan array
  pesananList.push(pesanan);

  // resett
  resetFormPesan();

  // nampilinn buktinya
  showBukti(pesanan);

  // up update datanyah
  displayData();

  alert('Pesanan berhasil dibuat! Silakan lihat bukti pemesanan.');
}

// resett
function resetFormPesan() {
  document.getElementById('nama_pemesan').value = '';
  document.getElementById('kategori_laundry').value = '';
  document.getElementById('kategori_pengantaran').value = '';
  document.getElementById('kategori_layanan').value = '';
  document.getElementById('waktu_pengambilan').value = '';
  document.getElementById('catatan').value = '';
}

//biar datanya muncul ditabel
function displayData() {
  const tbody = document.getElementById('dataTable');
  if (!tbody) return;
  
  tbody.innerHTML = '';

  pesananList.forEach((pesanan, index) => {
    const row = document.createElement('tr');
    row.innerHTML = `
      <td>${index + 1}</td>
      <td>${pesanan.namaPemesan}</td>
      <td>${getKategoriLabel(pesanan.kategoriLaundry)}</td>
      <td>${getLayananLabel(pesanan.kategoriLayanan)}</td>
      <td>${new Date(pesanan.waktuPengambilan).toLocaleString('id-ID')}</td>
      <td><span class="status-badge">${pesanan.status}</span></td>
    `;
    tbody.appendChild(row);
  });
}

// kategori ke label
function getKategoriLabel(value) {
  const labels = {
    'cuci_baju': 'Cuci Baju',
    'cuci_kering_lipat': 'Cuci Kering Lipat',
    'cuci_setrika': 'Cuci Setrika',
    'cuci_putih': 'Cuci Baju Putih',
    'laundry_satuan': 'Laundry Satuan',
    'cuci_sepatu': 'Cuci Sepatu',
    'cuci_khusus': 'Cuci Khusus',
    'cuci_karpet': 'Cuci Karpet',
    'cuci_helm': 'Cuci Helm'
  };
  return labels[value] || value;
}

function getLayananLabel(value) {
  const labels = {
    'laundry_kilat': 'Kilat (1-3 jam)',
    'laundry_express': 'Express (4-6 jam)',
    'laundry_reguler': 'Reguler (1-2 hari)'
  };
  return labels[value] || value;
}

// output bukti pemesanan
function showBukti(pesanan) {
  const buktiSection = document.getElementById('bukti-pesan');
  const buktiContent = document.getElementById('bukti-content');

  if (!buktiSection || !buktiContent) return;

  const tanggalPesan = new Date(pesanan.tanggalPesan).toLocaleString('id-ID');
  const waktuAmbil = new Date(pesanan.waktuPengambilan).toLocaleString('id-ID');

  buktiContent.innerHTML = `
    <div style="padding: 20px; border: 2px solid #5B7FFF; border-radius: 8px; margin: 15px 0;">
      <table style="width: 100%; font-size: 14px;">
        <tr>
          <td><strong>No. Pesanan</strong></td>
          <td>: ${pesanan.id}</td>
        </tr>
        <tr>
          <td><strong>Nama Pemesan</strong></td>
          <td>: ${pesanan.namaPemesan}</td>
        </tr>
        <tr>
          <td><strong>Tanggal Pesan</strong></td>
          <td>: ${tanggalPesan}</td>
        </tr>
        <tr>
          <td style="vertical-align: top;"><strong>Kategori Laundry</strong></td>
          <td>: ${getKategoriLabel(pesanan.kategoriLaundry)}</td>
        </tr>
        <tr>
          <td><strong>Pengantaran</strong></td>
          <td>: ${pesanan.kategoriPengantaran}</td>
        </tr>
        <tr>
          <td><strong>Kategori Layanan</strong></td>
          <td>: ${getLayananLabel(pesanan.kategoriLayanan)}</td>
        </tr>
        <tr>
          <td><strong>Waktu Pengambilan</strong></td>
          <td>: ${waktuAmbil}</td>
        </tr>
        <tr>
          <td style="vertical-align: top;"><strong>Catatan</strong></td>
          <td>: ${pesanan.catatan || '(Tidak ada catatan)'}</td>
        </tr>
        <tr>
          <td><strong>Status</strong></td>
          <td>: <span style="color: #FF6B6B; font-weight: bold;">${pesanan.status}</span></td>
        </tr>
      </table>
      <hr style="margin: 15px 0;">
      <p style="text-align: center; font-size: 12px; color: #666;">
        Simpan bukti pemesanan ini. Anda bisa melacak status pesanan melalui halaman tracking.
      </p>
    </div>
  `;

  // Scroll ke bukti pemesanan
  buktiSection.style.display = 'block';
  buktiSection.scrollIntoView({ behavior: 'smooth' });
};

function initLayananModals() {
  const modalOverlay = document.getElementById('layananModalOverlay');
  const modalClose = document.getElementById('layananModalClose');
  const modalImage = document.getElementById('layananModalImage');
  const modalTitle = document.getElementById('layananModalTitle');
  const modalDescription = document.getElementById('layananModalDescription');

  if (!modalOverlay || !modalClose || !modalImage || !modalTitle || !modalDescription) {
    return;
  }

  const cards = document.querySelectorAll('.layanan .card');
  cards.forEach(card => {
    card.addEventListener('click', () => {
      const img = card.querySelector('img');
      const title = card.querySelector('h4');
      const description = card.querySelector('p');

      modalImage.src = img ? img.src : '';
      modalImage.alt = title ? title.textContent : 'Gambar layanan';
      modalTitle.textContent = title ? title.textContent : 'Detail Layanan';
      modalDescription.textContent = description ? description.textContent : '';

      modalOverlay.classList.add('active');
    });
  });

  modalClose.addEventListener('click', () => modalOverlay.classList.remove('active'));
  modalOverlay.addEventListener('click', event => {
    if (event.target === modalOverlay) {
      modalOverlay.classList.remove('active');
    }
  });
}

// Login button ripple + simple validation feedback
const loginBtn = document.querySelector('.btn-login');
if (loginBtn) {
  loginBtn.addEventListener('click', () => {
    const email = document.getElementById('email').value;
    const pw = document.getElementById('password').value;
    if (!email || !pw) {
      alert('Semua data harus terisi!')
      animationBtn(loginBtn);
      alert('Semua data harus terisi!');
    } else {
      loginBtn.classList.add('loading');
      loginBtn.querySelector('span').textContent = 'Memproses...';
      setTimeout(() => {
        loginBtn.classList.remove('loading');
        loginBtn.querySelector('span').textContent = 'Masuk';
      }, 1800);

      setTimeout(() => {
        window.location.href = '../index.php'; 
      }, 1800);
    }
  });
}

let nomor = 1;

function handleSignup(event) {
  event.preventDefault();

  const nama = document.getElementById('nama').value.trim();
  const email = document.getElementById('email').value.trim();
  const password = document.getElementById('password').value;
  const confirm = document.getElementById('confirm').value;

  if (!nama || !email || !password || !confirm) {
    alert('Semua data pendaftaran harus diisi!');
    return;
  }

  if (password !== confirm) {
    alert('Password tidak sama!');
    return;
  }
};

