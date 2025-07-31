<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Glowysa</title>

<!-- menggunakan AOS (Animate On Scroll) dan feather icons 
agar tampilan lebih hidup dan menarik di berbagai perangkat -->
  <script src="https://unpkg.com/feather-icons"></script>
  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
  <script src="https://unpkg.com/feather-icons"></script>
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />
  <link rel="stylesheet" href="./css/style.css" />
</head>
<body>
<!-- ========= NAVBAR ========= -->
<nav class="navbar flex" data-aos="fade-down">
  <div class="logo">
  <img src="/img/logo.png" alt="Logo" class="w-10 h-10 rounded-full border-2 border-yellow-500">
    <span>Glowysa</span>
  </div>

  <!-- Hamburger untuk mobile -->
  <label for="nav-toggle" class="hamburger" aria-label="Toggle navigation">
    <i data-feather="menu" class="icon-menu"></i>
  </label>
  <input type="checkbox" id="nav-toggle" hidden />

  <!-- Link Navigasi -->
  <ul class="nav-links">
    <li><a href="#home">Home</a></li>
    <li><a href="#about">About</a></li>
    <li><a href="#brand">Brand</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>

  <a href="{{ route('login') }}" class="btn">Login</a>
</nav>

<!-- ========= HERO ========= -->
<header id="home", class="hero-section">
  <section class="hero-content">
    <div class="hero-text" data-aos="fade-right">
      <h1>
      Stok Barang Terkontrol,<br />
        <span class="highlight">Bisnis Siap Melesat.</span>
      </h1>
      <p class="subtitle">
      Kelola dan pantau stok dari gudang secara gratis,
      terintregasi dengan laporan keuangan dan invoice sehingga,
      tercatat otomatis dan akurat.</p>
      <div class="hero-buttons">
        <a href="#products" class="btn btn-outline">Coba Sekarang</a>
      </div>
    </div>
  </section>
</header>

<!-- ========= benefit ========= -->
<section id="about" class="benefit-section">
  <h2 class="ben-title" data-aos="zoom-in">
    <span>Kelola Produk & Gudang Kosmetik Lebih Praktis</span>
  </h2>
  <div class="benefit-grid">
    
    <div class="benefit-item">
      <div class="icon-circle">
        <img src="img/a.png" alt="Ikon Ekosistem" />
      </div>
      <h3 class="benefit-title">Bukan Sekadar Stok<br>Tapi Ekosistem Penjualan</h3>
      <p class="benefit-desc">
        Manfaatkan gudang kami sebagai pusat distribusi produk Anda. Jual ke reseller, distributor, hingga toko online dengan lebih cepat dan terstruktur.
      </p>
    </div>

    <div class="benefit-item">
      <div class="icon-circle">
        <img src="img/b.png" alt="Ikon Terintegrasi" />
      </div>
      <h3 class="benefit-title">Semua Dapat 
        <br>Terintegrasi</h3>
      <p class="benefit-desc">
        Pantau pergerakan barang, kelola varian produk, dan atur pengiriman ke banyak tujuan — cukup dalam satu sistem.
      </p>
    </div>

    <div class="benefit-item">
      <div class="icon-circle">
        <img src="img/c.png" alt="Ikon Ekspansi" />
      </div>
      <h3 class="benefit-title">Siap Ekspansi Bisnis Kosmetik Anda</h3>
      <p class="benefit-desc">
        Dengan sistem gudang & penjualan yang efisien, Anda bisa fokus pada pengembangan produk dan memperluas jangkauan pasar.
      </p>
    </div>

  </div>
</section>

<!-- ========= Brand ========= -->
<section id="brand" class="products-section">
  <h2 class="section-title" data-aos="zoom-in">
    Brand
    <span class="underline"></span>
  </h2>
  <div class="products-scroll" data-aos="fade-up">
    <!-- Produk 1 -->
    <label for="modal-brightening" class="product-card cursor-pointer">
      <div class="image-wrapper">
        <img class="img1" src="{{ asset('img/wardahlogo.jpg') }}" alt="Brightening Serum" />
      </div>
      <div class="product-content">
        <h3>Wardah</h3>
      </div>
    </label>

    <!-- Produk 2 -->
    <label for="modal-hydra" class="product-card cursor-pointer">
      <div class="image-wrapper">
        <img class="img1" src="{{ asset('img/pinkflash.jpg') }}" alt="Hydra Moist Gel" />
      </div>
      <div class="product-content">
        <h3>PinkFlash</h3>
      </div>
    </label>

    <!-- Produk 3 -->
    <label for="modal-sunscreen" class="product-card cursor-pointer">
      <div class="image-wrapper">
        <img class="img1" src="{{ asset('img/omg.jpg') }}" alt="Sunscreen SPF 30" />
      </div>
      <div class="product-content">
        <h3>OMG</h3>
      </div>
    </label>

    <!-- Produk 4 -->
    <label for="modal-repair" class="product-card cursor-pointer">
      <div class="image-wrapper">
        <img class="img1" src="{{ asset('img/you.jpg') }}" alt="Night Repair Cream" />
      </div>
      <div class="product-content">
        <h3>YOU</h3>
      </div>
    </label>
  </div>
</section>

<!-- ===== MODAL ===== -->
  <!-- wardah -->
  <input type="checkbox" id="modal-brightening" class="modal-toggle" hidden />
  <div class="modal">
    <label for="modal-brightening" class="modal-bg"></label>
    <div class="modal-box">
      <label for="modal-brightening" class="close-btn">&times;</label>
      <img src="{{ asset('img/wardahlogo.jpg') }}" class="modal-img" alt="Brightening Serum">
      <h3>Wardah</h3>
      <p>Wardah merupakan brand yang mengusung nilai-nilai halal, aman, dan berkualitas, dengan target pasar utama perempuan Muslim yang menginginkan produk kecantikan yang sesuai syariat namun tetap modern dan inovatif.
        <br>Wardah berfokus pada kebutuhan kecantikan wanita Indonesia dengan menghadirkan berbagai produk kosmetik seperti foundation, bedak, lipstik, blush on, eyeshadow, hingga eyeliner dan maskara.</p>
    </div>
  </div>

  <!-- Pinkflash -->
  <input type="checkbox" id="modal-hydra" class="modal-toggle" hidden />
  <div class="modal">
    <label for="modal-hydra" class="modal-bg"></label>
    <div class="modal-box">
      <label for="modal-hydra" class="close-btn">&times;</label>
      <img src="{{ asset('img/pinkflash.jpg') }}" class="modal-img" alt="Hydra Moist Gel">
      <h3>PinkFlash</h3>
      <p>Pinkflash adalah merek kosmetik yang dikenal dengan konsep "Beauty on Budget", menawarkan produk-produk makeup dengan desain menarik, warna-warna tren, dan harga yang sangat terjangkau.
        <br>Merek ini populer di kalangan remaja dan pemula yang ingin mencoba berbagai riasan tanpa mengeluarkan biaya besar. Produk unggulannya meliputi lip cream, eyeshadow palette, dan cushion foundation dengan tampilan feminin dan playful.
      </p>
    </div>
  </div>

  <!-- OMG -->
  <input type="checkbox" id="modal-sunscreen" class="modal-toggle" hidden />
  <div class="modal">
    <label for="modal-sunscreen" class="modal-bg"></label>
    <div class="modal-box">
      <label for="modal-sunscreen" class="close-btn">&times;</label>
      <img src="{{ asset('img/omg.jpg') }}" class="modal-img" alt="Sunscreen SPF 30">
      <h3>OMG</h3>
      <p>OMG (Oh My Glam) merupakan brand lokal Indonesia yang menghadirkan kosmetik sehari-hari yang praktis dan stylish.
        <br>Produk OMG dirancang untuk wanita aktif yang menginginkan makeup simpel, tahan lama, dan tetap terjangkau. Di antara produknya yang terkenal adalah lip cream matte, eyebrow pencil, dan blush on yang cocok untuk tampilan kasual maupun glamor.</p>
    </div>
  </div>

  <!-- YOU -->
  <input type="checkbox" id="modal-repair" class="modal-toggle" hidden />
  <div class="modal">
    <label for="modal-repair" class="modal-bg"></label>
    <div class="modal-box">
      <label for="modal-repair" class="close-btn">&times;</label>
      <img src="{{ asset('img/you.jpg') }}" class="modal-img" alt="Night Repair Cream">
      <h3>YOU</h3>
      <p>YOU adalah merek kosmetik lokal dengan positioning lebih premium dan fokus pada inovasi serta daya tahan produk.
        <br>Brand ini menargetkan wanita muda modern yang menginginkan makeup berkualitas tinggi, tahan lama, dan tetap ramah di kulit. Produk YOU meliputi cushion foundation, compact powder, lip tint, serta eyeliner dan mascara yang terkenal tahan lama dan waterproof.</p>
    </div>
  </div>


<!-- ========= Promo ========= -->
<section class="section-promo">
<div class="promo-banner">
  <div class="promo-text">
    <h2>Satu Sistem untuk Pengelolaan<br>Stok dan Gudang Anda</h2>
    <p>Lebih praktis, lebih cepat, lebih tenang.</p>
    <a href="#" class="cta-button">Coba Sekarang</a>
  </div>
  <div class="promo-image">
    <img src="img/telent.png" alt="laptop">
  </div>
</div>
</section>


<!-- FAQ Section -->
<section id="FAQ", class="faq-section" id="faq">
  <h2>Beberapa pertanyaan yang sering ditanyakan</h2>
  <div class="faq-container">
    <details>
      <summary>Apakah produk di gudang selalu tersedia (ready stock)?</summary>
      <p>Kami berupaya memastikan ketersediaan produk secara real-time melalui sistem manajemen stok kami. Namun, ketersediaan bisa berubah sewaktu-waktu tergantung pada permintaan pasar.</p>
    </details>
    <details>
      <summary> Bisakah saya melihat katalog produk lengkap dan harganya?</summary>
      <p>Tentu. Anda dapat mengaksesnya melewati kode-qr produk yang ada di website ini.</p>
    </details>
    <details>
      <summary>Bagaimana sistem pembayaran untuk supplier?</summary>
      <p>Sistem pembayaran dilakukan berdasarkan kesepakatan awal melalui sistem pembayaran langsung. Detail pembayaran akan dibahas dalam perjanjian kerja sama dan disesuaikan dengan skala serta frekuensi pengadaan.</p>
    </details>
    <details>
      <summary>Apakah ada sistem kontrak atau MoU bagi supplier?</summary>
      <p>Ya, setiap kerja sama akan dilengkapi dengan Memorandum of Understanding (MoU) atau kontrak kerja sama resmi untuk menjamin transparansi dan keamanan kedua belah pihak, termasuk mengenai harga, volume pasokan, pengiriman, dan garansi produk.</p>
    </details>
  </div>
</section>

<!-- ========= FOOTER ========= -->
<footer id="contact", class="footer-section">
  <div class="footer-container">
    <!-- Kolom Logo dan Deskripsi -->
    <div class="footer-col about">
    <p>Beauty Cosmetics adalah perusahaan kecantikan yang berkomitmen menghadirkan produk skincare berkualitas tinggi, diformulasikan secara aman dan inovatif untuk semua jenis kulit. Kami terus berkembang untuk menjadi mitra terpercaya dalam merawat kecantikan alami Anda.</p>
      <ul class="footer-contact">
        <li><i data-feather="phone"></i> +62 812-1122-1122</li>
        <li><i data-feather="map-pin"></i>Banyuwangi, Indonesia</li>
        <li><i data-feather="mail"></i>support@glowsya.id</li>
      </ul>
    </div>

    <!-- Kolom Menu -->
    <div class="footer-col">
      <h4>Menu</h4>
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#features">About</a></li>
        <li><a href="#products">Brand</a></li>
        <li><a href="#FAQ">FAQ</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>

    <!-- Kolom Service -->
    <div class="footer-col">
      <h4>Service</h4>
      <ul>
        <li>Order</li>
        <li>Booked</li>
        <li>Payment</li>
        <li>Delivery</li>
      </ul>
    </div>

    <!-- Kolom Support -->
    <div class="footer-col">
      <h4>Support</h4>
      <ul>
        <li>Chat Online</li>
        <li>Copyright</li>
      </ul>
    </div>
  </div>

  <!-- Bottom Footer -->
  <div class="footer-bottom">
    <div class="left-links">
      <a href="#contact">Kebijakan Privasi</a>
      <a href="#contact">Syarat & Ketentuan</a>
      <a href="#contact">Kontak</a>
    </div>
    <div class="copyright">
      &copy; Glowsya 2025
    </div>
  </div>
</footer>

<!-- ========= JS ========= -->
  <script>
    feather.replace();
    AOS.init({ once:true, duration:800, offset:120 });

    /* Toggle menu di mobile */
    const navToggle = document.getElementById('nav-toggle');
    const navLinks  = document.querySelector('nav ul');
    navToggle.addEventListener('change', () => {
      navLinks.classList.toggle('open');
    });
  </script>
<script>
  function scrollProducts(direction) {
    const scrollContainer = document.querySelector('.products-scroll');
    const scrollAmount = 400;

    if (scrollContainer) {
      scrollContainer.scrollBy({
        left: direction * scrollAmount,
        behavior: 'smooth'
      });
    }
  }
</script>
</body>
</html>