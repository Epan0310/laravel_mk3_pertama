<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exclusive Automotive</title>

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/css/style.css') }}">
  </head>

  <body>
    <nav class="nav">
      <div class="nav-logo"><span>EXCLUSIVE</span> AUTOMOTIVE</div>
      <div class="nav-icons">
        <i class="fas fa-search"></i>
        <i class="fas fa-bars"></i>
      </div>
    </nav>

    <div class="hero-container">
      <video autoplay loop class="hero-video">
        <source src="{{ asset('image/vid.mp4') }}" type="video/mp4" />
      </video>
      <div class="hero-content">
        <div>
          <h1 class="hero-title">REVUELTO</h1>
          <p class="hero-subtitle">
            V12 hybrid HPEV pertama yang ada di Indonesia dari Exclusive
            Automotive
          </p>
          <div class="hero-buttons">
            <button class="hero-btn hero-btn-red">TEMUKAN</button>
            <button class="hero-btn hero-btn-white">BELI SEKARANG</button>
          </div>
        </div>
      </div>
      <div class="scroll-indicator">
        <i class="fas fa-chevron-down"></i>
      </div>
    </div>

    <section class="section bg-black">
      <div class="container">
        <h2 class="section-title">PRODUK TERLARIS</h2>
        <div class="product-grid">
          <div class="model-slide">
            <div class="relative">
              <img src="{{ asset('image/revuelto.png') }}" alt="Revuelto supercar" />
              <div class="model-slide-info">
                <h3>REVUELTO</h3>
                <div class="model-details">
                  <span class="new">NEW</span>
                  <span>IDR 22.500.000.000</span>
                  <span>1,001 HP</span>
                </div>
              </div>
            </div>
          </div>

          <div class="model-slide">
            <div class="relative">
              <img src="{{ asset('image/huracan.png') }}" alt="Huracan supercar" />
              <div class="model-slide-info">
                <h3>HURACAN</h3>
                <div class="model-details">
                  <span>IDR 6.000.000.000</span>
                  <span>640 HP</span>
                </div>
              </div>
            </div>
          </div>

          <div class="model-slide">
            <div class="relative">
              <img src="{{ asset('image/aventador.png') }}" alt="Aventador supercar" />
              <div class="model-slide-info">
                <h3>AVENTADOR SVJ</h3>
                <div class="model-details">
                  <span>IDR 22.000.000.000</span>
                  <span>759 HP</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="btn-view-all">
          <button>VIEW ALL MODELS</button>
        </div>
      </div>
    </section>

    <!-- Modal View All Models -->
    <div id="modelsModal" class="modal">
      <div class="modal-content">
        <span class="close-modal">&times;</span>
        <h2>All Exclusive Automotive Models</h2>
        <div class="models-container">
          <!-- Models akan diisi oleh JavaScript -->
        </div>
      </div>
    </div>

    <section class="section bg-gradient-bottom">
      <div class="container">
        <h2 class="section-title">PEFORMA HEWAN BUAS</h2>
        <div class="performance-grid">
          <div>
            <img src="{{ asset('image/revuelto.png') }}" alt="Revuelto engine" style="width: 100%" />
          </div>
          <div class="specs-info">
            <div class="specs-grid">
              <div class="performance-item">
                <div class="performance-number">6.5L</div>
                <div class="performance-text">NATURALLY ASPIRATED V12</div>
              </div>
              <div class="performance-item">
                <div class="performance-number">3.0s</div>
                <div class="performance-text">0-100 KM/H</div>
              </div>
              <div class="performance-item">
                <div class="performance-number">&gt;350</div>
                <div class="performance-text">TOP SPEED (KM/H)</div>
              </div>
              <div class="performance-item">
                <div class="performance-number">1,001</div>
                <div class="performance-text">TOTAL POWER (HP)</div>
              </div>
            </div>
            <div style="margin-top: 2rem">
              <p>
                Revuelto adalah mobil sport hibrida plug-in pertama dari
                Lamborghini, menggabungkan mesin V12 bertenaga tinggi dengan
                tiga motor listrik. Revuelto secara resmi menggantikan Aventador
                sebagai model flagship Lamborghini, menandai era baru bagi
                supercar Italia ini.
              </p>
              <button id="openSpecsBtn">SPESIFIKASI</button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section bg-black">
      <div class="container">
        <div class="collection-header">
          <h2>KOLEKSI</h2>
          <button>
            LIHAT SEMUA
            <i class="fas fa-arrow-right"></i>
          </button>
        </div>

        <div class="collection-grid">
          <div class="hover-scale">
            <img src="{{ asset('image/Porsche_600x400.png') }}" alt="Porsche GT3 RS" />
          </div>
          <div class="hover-scale">
            <img src="{{ asset('image/Lamborghini_Aventador_600x400.png') }}" alt="Lamborghini Aventador" />
          </div>
          <div class="hover-scale">
            <img src="{{ asset('image/Mclaren_Senna_600x400.png') }}" alt="McLaren Senna" />
          </div>
          <div class="hover-scale">
            <img src="{{ asset('image/McLaren_P1_GTR_2015_600x400.png') }}" alt="McLaren P1 GTR" />
          </div>
          <div class="hover-scale">
            <img src="{{ asset('image/Porsche_600x400.png') }}" alt="Classic Porsche" />
          </div>
          <div class="hover-scale">
            <img src="{{ asset('image/Porsche_Boxster_600x400.png') }}" alt="Porsche Boxster" />
          </div>
        </div>
      </div>
    </section>

    <section class="section bg-gradient-right">
      <div class="container">
        <h2 class="section-title">PENGALAMAN EKSKLUSIF ANDA</h2>
        <div class="exclusive-section-content">
          <div class="contact">
            <h2>Hubungi Kami</h2>
            <form id="contactForm">
              <input type="text" id="name" name="name" placeholder="Nama" required />
              <input type="email" id="email" name="email" placeholder="Email" required />
              <textarea id="message" name="message" rows="5" placeholder="Pesan Kamu" required></textarea>
              <button type="submit">Kirim Pesan</button>
            </form>
            <p id="formMessage"></p>
          </div>

          <div class="exclusive-info">
            <h3>TEMUKAN SHOWROOM TERDEKAT ANDA</h3>
            <p>
              Kunjungi dealer resmi Exclusive Automotive untuk merasakan model
              kami secara langsung dan berbicara dengan spesialis produk kami
              tentang opsi penyesuaian, pembiayaan, dan program kepemilikan.
            </p>
            <div class="exclusive-features">
              <div>
                <i class="fas fa-map-marker-alt"></i>
                <span>Jaringan Internasional</span>
              </div>
              <div>
                <i class="fas fa-cogs"></i>
                <span>Kustomisasi Lengkap</span>
              </div>
              <div>
                <i class="fas fa-trophy"></i>
                <span>Manfaat Kepemilikan Eksklusif</span>
              </div>
            </div>
            <button class="exclusive-btn-showroom" onclick="cariShowroomTerdekat()">
              LOKASI SHOWROOM
            </button>

            <div id="maps-container" class="maps-container hidden">
              <h2 id="showroom-name"></h2>
              <iframe id="maps-frame" class="maps" loading="lazy" allowfullscreen></iframe>
              <p><a id="directions-link" href="#" target="_blank"></a></p>
            </div>
            <p id="error-msg" class="error-msg"></p>
          </div>
        </div>
      </div>
    </section>

    <!-- Modal Spesifikasi -->
    <div id="specsModal" class="modal" aria-hidden="true" role="dialog" aria-labelledby="specsTitle">
      <div class="modal-content specs-modal-content" role="document">
        <button class="close-modal close-specs" aria-label="Close">&times;</button>
        <h2 id="specsTitle">Spesifikasi</h2>
        <div id="specsContainer" class="specs-modal-body">
          <!-- Konten spesifikasi diisi oleh JavaScript -->
        </div>
      </div>
    </div>

    <footer class="footer">
      <div class="container">
        <div class="footer-grid">
          <div class="footer-column">
            <h4>PRODUK</h4>
            <ul>
              <li><a href="#">Lamborghini</a></li>
              <li><a href="#">Mclaren</a></li>
              <li><a href="#">Porsche</a></li>
              <li><a href="#">Limited Editions</a></li>
            </ul>
          </div>

          <div class="footer-column">
            <h4>KEPEMILIKAN</h4>
            <ul>
              <li><a href="#">Services</a></li>
              <li><a href="#">Garansi</a></li>
              <li><a href="#">Spare Parts</a></li>
              <li><a href="#">Layanan Keuangan</a></li>
            </ul>
          </div>

          <div class="footer-column">
            <h4>MOTORSPORT</h4>
            <ul>
              <li><a href="#">GT3</a></li>
              <li><a href="#">Super Trofeo</a></li>
              <li><a href="#">GT2</a></li>
              <li><a href="#">Driving Academy</a></li>
            </ul>
          </div>

          <div class="footer-column">
            <h4>PERUSAHAAN</h4>
            <ul>
              <li><a href="#">Tentang Kami</a></li>
              <li><a href="#">Karier</a></li>
              <li><a href="#">Keberlanjutan</a></li>
              <li><a href="#">Kontak</a></li>
            </ul>
          </div>
        </div>

        <div class="footer-bottom">
          <div class="footer-brand">
            <div class="logo"><span>EXCLUSIVE</span> AUTOMOTIVE</div>
            <div class="social-icons">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>

          <div class="footer-copyright">
            <div>© 2025 Exclusive Automotive. All Rights Reserved.</div>
            <div class="footer-links">
              <a href="#">Privacy Policy</a>
              <a href="#">Terms of Use</a>
              <a href="#">Cookies</a>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/jw.js') }}"></script>
  </body>
</html>
