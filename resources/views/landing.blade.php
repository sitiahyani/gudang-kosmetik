<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
<<<<<<< HEAD
  <title>Glowysa</title>
=======
  <title>Beauty Cosmetics</title>
>>>>>>> cab39bc68a50668f8b649c55133273738230cbd2

<!-- menggunakan AOS (Animate On Scroll) dan feather icons 
agar tampilan lebih hidup dan menarik di berbagai perangkat -->
  <script src="https://unpkg.com/feather-icons"></script>
  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<<<<<<< HEAD
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
  <script src="https://unpkg.com/feather-icons"></script>
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />
  <link rel="stylesheet" href="./css/style.css" />
=======
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css" />
>>>>>>> cab39bc68a50668f8b649c55133273738230cbd2
</head>
<body>
<!-- ========= NAVBAR ========= -->
<nav class="navbar flex" data-aos="fade-down">
  <div class="logo">
<<<<<<< HEAD
  <img src="/img/logo.png" alt="Logo" class="w-10 h-10 rounded-full border-2 border-yellow-500">
    <span>Glowysa</span>
=======
    <img src="{{ asset('images/logo-bc.png') }}" alt="Logo" class="logo-img" />
    <span>Beauty <strong>Cosmetics</strong></span>
>>>>>>> cab39bc68a50668f8b649c55133273738230cbd2
  </div>

  <!-- Hamburger untuk mobile -->
  <label for="nav-toggle" class="hamburger" aria-label="Toggle navigation">
    <i data-feather="menu" class="icon-menu"></i>
  </label>
  <input type="checkbox" id="nav-toggle" hidden />

  <!-- Link Navigasi -->
  <ul class="nav-links">
    <li><a href="#home">Home</a></li>
<<<<<<< HEAD
    <li><a href="#about">About</a></li>
    <li><a href="#brand">Brand</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>

  <a href="{{ route('login') }}" class="btn">Login</a>
=======
    <li><a href="#features">Tentang</a></li>
    <li><a href="#products">Produk</a></li>
    <li><a href="#testimonials">Testimoni</a></li>
    <li><a href="#contact">Kontak</a></li>
  </ul>

  <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
>>>>>>> cab39bc68a50668f8b649c55133273738230cbd2
</nav>

<!-- ========= HERO ========= -->
<header id="home", class="hero-section">
  <section class="hero-content">
    <div class="hero-text" data-aos="fade-right">
<<<<<<< HEAD
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
=======
      <span class="badge">✨ Baru! Vegan Formula</span>
      <h1>
        Kulit Cerah<br />
        <span class="highlight">Tanpa Ribet.</span>
      </h1>
      <p class="subtitle">
        Rangkaian skincare berkualitas, diformulasikan oleh ahli dermatologi untuk
        kulit sehat, segar, dan bercahaya. Cocok untuk semua jenis kulit tropis.
      </p>
      <div class="hero-buttons">
        <a href="#products" class="btn btn-outline">Lihat Produk</a>
>>>>>>> cab39bc68a50668f8b649c55133273738230cbd2
      </div>
    </div>
  </section>
</header>

<<<<<<< HEAD
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
=======
<!-- ========= FEATURES ========= -->
<section id="features">
  <h2 class="features-title" data-aos="zoom-in">
    Kenapa <span>Beauty Cosmetics?</span>
  </h2>

  <div class="features-grid">
    <div class="feature-card" data-aos="fade-up">
      <div class="icon-circle"><i data-feather="sun"></i></div>
      <h3>SPF 30+</h3>
      <p>Perlindungan optimal dari sinar UV untuk iklim tropis.</p>
    </div>

    <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
      <div class="icon-circle"><i data-feather="droplet"></i></div>
      <h3>Ultra Hydration</h3>
      <p>Memberikan kelembapan ekstra sepanjang hari.</p>
    </div>

    <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
      <div class="icon-circle"><i data-feather="feather"></i></div>
      <h3>Ringan di Kulit</h3>
      <p>Tekstur cepat meresap tanpa rasa lengket.</p>
    </div>

    <div class="feature-card" data-aos="fade-up" data-aos-delay="300">
      <div class="icon-circle"><i data-feather="award"></i></div>
      <h3>Dermatology Tested</h3>
      <p>Teruji aman oleh ahli kulit bersertifikat.</p>
    </div>
  </div>
</section>

<!-- ========= PRODUCTS ========= -->
<section id="products" class="products-section">
  <h2 class="section-title" data-aos="zoom-in">
    Produk Unggulan
    <span class="underline"></span>
  </h2>

  <!-- Tombol panah -->
  <button class="arrow-btn arrow-left" onclick="scrollProducts(-1)">
    <i data-feather="chevron-left"></i>
  </button>
  <button class="arrow-btn arrow-right" onclick="scrollProducts(1)">
    <i data-feather="chevron-right"></i>
  </button>

>>>>>>> cab39bc68a50668f8b649c55133273738230cbd2
  <div class="products-scroll" data-aos="fade-up">
    <!-- Produk 1 -->
    <label for="modal-brightening" class="product-card cursor-pointer">
      <div class="image-wrapper">
<<<<<<< HEAD
        <img class="img1" src="{{ asset('img/wardahlogo.jpg') }}" alt="Brightening Serum" />
      </div>
      <div class="product-content">
        <h3>Wardah</h3>
=======
        <img class="img1" src="{{ asset('images/Brightening Serum.jpg') }}" alt="Brightening Serum" />
        <span class="tag">New</span>
      </div>
      <div class="product-content">
        <h3>Brightening Serum</h3>
        <p>Mencerahkan dan meratakan warna kulit wajah.</p>
        <span class="price">Rp149 k</span>
>>>>>>> cab39bc68a50668f8b649c55133273738230cbd2
      </div>
    </label>

    <!-- Produk 2 -->
    <label for="modal-hydra" class="product-card cursor-pointer">
      <div class="image-wrapper">
<<<<<<< HEAD
        <img class="img1" src="{{ asset('img/pinkflash.jpg') }}" alt="Hydra Moist Gel" />
      </div>
      <div class="product-content">
        <h3>PinkFlash</h3>
=======
        <img class="img1" src="{{ asset('images/Hydra Moist Gel.jpg') }}" alt="Hydra Moist Gel" />
        <span class="tag">Best Seller</span>
      </div>
      <div class="product-content">
        <h3>Hydra Moist Gel</h3>
        <p>Memberikan hidrasi maksimal untuk kulit sensitif.</p>
        <span class="price">Rp129 k</span>
>>>>>>> cab39bc68a50668f8b649c55133273738230cbd2
      </div>
    </label>

    <!-- Produk 3 -->
    <label for="modal-sunscreen" class="product-card cursor-pointer">
      <div class="image-wrapper">
<<<<<<< HEAD
        <img class="img1" src="{{ asset('img/omg.jpg') }}" alt="Sunscreen SPF 30" />
      </div>
      <div class="product-content">
        <h3>OMG</h3>
=======
        <img class="img1" src="{{ asset('images/Sunscreen.jpg') }}" alt="Sunscreen SPF 30" />
      </div>
      <div class="product-content">
        <h3>Sunscreen SPF 30</h3>
        <p>Perlindungan harian dari sinar UV tanpa rasa lengket.</p>
        <span class="price">Rp99 k</span>
>>>>>>> cab39bc68a50668f8b649c55133273738230cbd2
      </div>
    </label>

    <!-- Produk 4 -->
    <label for="modal-repair" class="product-card cursor-pointer">
      <div class="image-wrapper">
<<<<<<< HEAD
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
=======
        <img class="img1" src="{{ asset('images/Repair.jpg') }}" alt="Night Repair Cream" />
      </div>
      <div class="product-content">
        <h3>Night Repair Cream</h3>
        <p>Menutrisi kulit saat tidur agar tampak segar di pagi hari.</p>
        <span class="price">Rp165 k</span>
      </div>
    </label>

    <!-- Produk 5 -->
    <label for="modal-toner" class="product-card cursor-pointer">
      <div class="image-wrapper">
        <img class="img1" src="{{ asset('images/Toner.jpg') }}" alt="Vitamin C Toner" />
        <span class="tag">Best Seller</span>
      </div>
      <div class="product-content">
        <h3>Vitamin C Toner</h3>
        <p>Membantu menyegarkan dan mengurangi noda hitam.</p>
        <span class="price">Rp89 k</span>
      </div>
    </label>

    <!-- Produk 6 -->
    <label for="modal-lipstik" class="product-card cursor-pointer">
      <div class="image-wrapper">
        <img class="img1" src="{{ asset('images/Lipstik.jpg') }}" alt="Lip Matte Lipstick" />
        <span class="tag">Favorite</span>
      </div>
      <div class="product-content">
        <h3>Lip Matte Lipstick</h3>
        <p>Warna tahan lama dengan hasil akhir matte yang lembut di bibir.</p>
        <span class="price">Rp59 k</span>
      </div>
    </label>
  </div>

  <!-- ===== MODAL ===== -->

  <!-- Brightening -->
>>>>>>> cab39bc68a50668f8b649c55133273738230cbd2
  <input type="checkbox" id="modal-brightening" class="modal-toggle" hidden />
  <div class="modal">
    <label for="modal-brightening" class="modal-bg"></label>
    <div class="modal-box">
      <label for="modal-brightening" class="close-btn">&times;</label>
<<<<<<< HEAD
      <img src="{{ asset('img/wardahlogo.jpg') }}" class="modal-img" alt="Brightening Serum">
      <h3>Wardah</h3>
      <p>Wardah merupakan brand yang mengusung nilai-nilai halal, aman, dan berkualitas, dengan target pasar utama perempuan Muslim yang menginginkan produk kecantikan yang sesuai syariat namun tetap modern dan inovatif.
        <br>Wardah berfokus pada kebutuhan kecantikan wanita Indonesia dengan menghadirkan berbagai produk kosmetik seperti foundation, bedak, lipstik, blush on, eyeshadow, hingga eyeliner dan maskara.</p>
    </div>
  </div>

  <!-- Pinkflash -->
=======
      <img src="{{ asset('images/Brightening Serum.jpg') }}" class="modal-img" alt="Brightening Serum">
      <h3>Brightening Serum</h3>
      <p>Mencerahkan dan meratakan warna kulit wajah. Tekstur ringan dan cepat meresap.</p>
      <span class="price">Rp149 k</span>
    </div>
  </div>

  <!-- Hydra -->
>>>>>>> cab39bc68a50668f8b649c55133273738230cbd2
  <input type="checkbox" id="modal-hydra" class="modal-toggle" hidden />
  <div class="modal">
    <label for="modal-hydra" class="modal-bg"></label>
    <div class="modal-box">
      <label for="modal-hydra" class="close-btn">&times;</label>
<<<<<<< HEAD
      <img src="{{ asset('img/pinkflash.jpg') }}" class="modal-img" alt="Hydra Moist Gel">
      <h3>PinkFlash</h3>
      <p>Pinkflash adalah merek kosmetik yang dikenal dengan konsep "Beauty on Budget", menawarkan produk-produk makeup dengan desain menarik, warna-warna tren, dan harga yang sangat terjangkau.
        <br>Merek ini populer di kalangan remaja dan pemula yang ingin mencoba berbagai riasan tanpa mengeluarkan biaya besar. Produk unggulannya meliputi lip cream, eyeshadow palette, dan cushion foundation dengan tampilan feminin dan playful.
      </p>
    </div>
  </div>

  <!-- OMG -->
=======
      <img src="{{ asset('images/Hydra Moist Gel.jpg') }}" class="modal-img" alt="Hydra Moist Gel">
      <h3>Hydra Moist Gel</h3>
      <p>Memberikan hidrasi maksimal, cocok untuk kulit sensitif dan kering.</p>
      <span class="price">Rp129 k</span>
    </div>
  </div>

  <!-- Sunscreen -->
>>>>>>> cab39bc68a50668f8b649c55133273738230cbd2
  <input type="checkbox" id="modal-sunscreen" class="modal-toggle" hidden />
  <div class="modal">
    <label for="modal-sunscreen" class="modal-bg"></label>
    <div class="modal-box">
      <label for="modal-sunscreen" class="close-btn">&times;</label>
<<<<<<< HEAD
      <img src="{{ asset('img/omg.jpg') }}" class="modal-img" alt="Sunscreen SPF 30">
      <h3>OMG</h3>
      <p>OMG (Oh My Glam) merupakan brand lokal Indonesia yang menghadirkan kosmetik sehari-hari yang praktis dan stylish.
        <br>Produk OMG dirancang untuk wanita aktif yang menginginkan makeup simpel, tahan lama, dan tetap terjangkau. Di antara produknya yang terkenal adalah lip cream matte, eyebrow pencil, dan blush on yang cocok untuk tampilan kasual maupun glamor.</p>
    </div>
  </div>

  <!-- YOU -->
=======
      <img src="{{ asset('images/Sunscreen.jpg') }}" class="modal-img" alt="Sunscreen SPF 30">
      <h3>Sunscreen SPF 30</h3>
      <p>Melindungi dari sinar UV, ringan di kulit dan tidak lengket.</p>
      <span class="price">Rp99 k</span>
    </div>
  </div>

  <!-- Night Repair -->
>>>>>>> cab39bc68a50668f8b649c55133273738230cbd2
  <input type="checkbox" id="modal-repair" class="modal-toggle" hidden />
  <div class="modal">
    <label for="modal-repair" class="modal-bg"></label>
    <div class="modal-box">
      <label for="modal-repair" class="close-btn">&times;</label>
<<<<<<< HEAD
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
=======
      <img src="{{ asset('images/Repair.jpg') }}" class="modal-img" alt="Night Repair Cream">
      <h3>Night Repair Cream</h3>
      <p>Menutrisi kulit saat malam hari. Bangun dengan kulit segar & kenyal.</p>
      <span class="price">Rp165 k</span>
    </div>
  </div>

  <!-- Toner -->
  <input type="checkbox" id="modal-toner" class="modal-toggle" hidden />
  <div class="modal">
    <label for="modal-toner" class="modal-bg"></label>
    <div class="modal-box">
      <label for="modal-toner" class="close-btn">&times;</label>
      <img src="{{ asset('images/Toner.jpg') }}" class="modal-img" alt="Vitamin C Toner">
      <h3>Vitamin C Toner</h3>
      <p>Membantu menyegarkan kulit dan mengurangi noda hitam membandel.</p>
      <span class="price">Rp89 k</span>
    </div>
  </div>

  <!-- Lipstik -->
  <input type="checkbox" id="modal-lipstik" class="modal-toggle" hidden />
  <div class="modal">
    <label for="modal-lipstik" class="modal-bg"></label>
    <div class="modal-box">
      <label for="modal-lipstik" class="close-btn">&times;</label>
      <img src="{{ asset('images/Lipstik.jpg') }}" class="modal-img" alt="Lip Matte Lipstick">
      <h3>Lip Matte Lipstick</h3>
      <p>Warna tahan lama dengan hasil akhir matte yang lembut di bibir.</p>
      <span class="price">Rp59 k</span>
    </div>
  </div>
</section>

<!-- ========= TESTIMONIALS ========= -->
<section id="testimonials", class="testimonial-section">
  <h2 class="section-title">Apa Kata Mereka</h2>
  <div class="testimonial-grid">

    <div class="testimonial-item">
      <img src="{{ asset('images/avatar-ayu.jpg') }}" alt="Ayu Permata" class="avatar-img">
      <h3>AYU PERMATA <span>, 24 Tahun</span></h3>
      <p class="quote">“Kulitku jauh lebih cerah hanya dalam 2 minggu! Teksturnya ringan dan harum lembut.”</p>
    </div>

    <div class="testimonial-item">
      <img src="{{ asset('images/avatar-rina.jpg') }}" alt="Rina Oktaviani" class="avatar-img">
      <h3>RINA OKTAVIANI <span>, 27 Tahun</span></h3>
      <p class="quote">“Awalnya ragu, tapi setelah 1 bulan, jerawatku jauh berkurang dan kulitku terasa lebih kenyal.”</p>
    </div>

    <div class="testimonial-item">
      <img src="{{ asset('images/avatar-diah.jpg') }}" alt="Diah Prameswari" class="avatar-img">
      <h3>DIAH PRAMESWARI <span>, 22 Tahun</span></h3>
      <p class="quote">“Aku suka banget teksturnya! Nggak lengket dan cepat meresap. Cocok banget buat kulit sensitif kayak aku.”</p>
    </div>

    <div class="testimonial-item">
      <img src="{{ asset('images/avatar-maya.jpg') }}" alt="Maya Sari" class="avatar-img">
      <h3>MAYA SARI <span>, 30 Tahun</span></h3>
      <p class="quote">“Kulit terasa lembap seharian. Nggak nyangka bisa cocok di kulitku yang sensitif.”</p>
    </div>

    <div class="testimonial-item">
      <img src="{{ asset('images/avatar-lina.jpg') }}" alt="Lina Marthina" class="avatar-img">
      <h3>LINA MARTHINA <span>, 28 Tahun</span></h3>
      <p class="quote">“Baru pakai 1 minggu, jerawat mulai kalem dan kulitku jadi glowing alami!”</p>
    </div>
  </div>
</section>

<!-- ========= (Ajakan) ========= -->
<section class="cta-section" data-aos="zoom-in">
  <div class="cta-container">
    <h2>Mulai Perjalanan Kulit Sehatmu Hari Ini!</h2>
    <p>
      Sudah ribuan wanita merasakan perubahan nyata bersama Beauty Cosmetics. 
      Saatnya kamu tampil lebih percaya diri dengan kulit cerah dan sehat alami.
    </p>
    <a href="#products" class="btn btn-primary">Coba Sekarang</a>
  </div>
</section>

<a href="https://wa.me/6281211221122" class="wa-float" target="_blank" aria-label="Chat via WhatsApp">
  <img src="https://img.icons8.com/color/48/whatsapp--v1.png" alt="Chat WhatsApp">
</a>

<!-- FAQ Section -->
<section id="FAQ", class="faq-section" id="faq">
  <h2>Pertanyaan Umum (FAQ)</h2>
  <div class="faq-container">
    <details>
      <summary>Apakah produk ini aman untuk ibu hamil dan menyusui?</summary>
      <p>Ya, semua produk kami telah melalui uji dermatologi dan aman digunakan oleh ibu hamil dan menyusui.</p>
    </details>
    <details>
      <summary>Apakah tersedia metode pembayaran COD?</summary>
      <p>Ya, kami menyediakan layanan Cash on Delivery (COD) untuk wilayah tertentu.</p>
    </details>
    <details>
      <summary>Berapa lama pengiriman produk?</summary>
      <p>Waktu pengiriman berkisar antara 2-5 hari kerja tergantung lokasi Anda.</p>
    </details>
    <details>
      <summary>Apakah produk ini vegan dan cruelty-free?</summary>
      <p>Produk Beauty Cosmetics dijamin 100% vegan dan tidak diuji pada hewan.</p>
>>>>>>> cab39bc68a50668f8b649c55133273738230cbd2
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
<<<<<<< HEAD
        <li><i data-feather="mail"></i>support@glowsya.id</li>
=======
        <li><i data-feather="mail"></i>support@beautycosmetics.id</li>
>>>>>>> cab39bc68a50668f8b649c55133273738230cbd2
      </ul>
    </div>

    <!-- Kolom Menu -->
    <div class="footer-col">
      <h4>Menu</h4>
      <ul>
        <li><a href="#home">Home</a></li>
<<<<<<< HEAD
        <li><a href="#features">About</a></li>
        <li><a href="#products">Brand</a></li>
        <li><a href="#FAQ">FAQ</a></li>
        <li><a href="#contact">Contact</a></li>
=======
        <li><a href="#features">Tentang</a></li>
        <li><a href="#products">Produk</a></li>
        <li><a href="#testimonials">Testimoni</a></li>
        <li><a href="#FAQ">FAQ</a></li>
        <li><a href="#contact">Kontak</a></li>
      </ul>
    </div>

    <!-- Kolom Product -->
    <div class="footer-col">
      <h4>Product</h4>
      <ul>
        <li>Brightening Serum</li>
        <li>Hydra Moist Gel</li>
        <li>Sunscreen SPF 30</li>
        <li>Night Repair Cream</li>
        <li>Vitamin C Toner</li>
        <li>Lip Matte Lipstick</li>
>>>>>>> cab39bc68a50668f8b649c55133273738230cbd2
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
<<<<<<< HEAD
      &copy; Glowsya 2025
=======
      &copy; 2021-2025, Beauty Cosmetics
>>>>>>> cab39bc68a50668f8b649c55133273738230cbd2
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
<<<<<<< HEAD
</html>
=======
</html>


>>>>>>> cab39bc68a50668f8b649c55133273738230cbd2
