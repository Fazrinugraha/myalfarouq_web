<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>MyAlfarouq - Web</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- Favicons -->
    <link href="assets/img/logo.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap"
      rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet" />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet" />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="assets/vendor/fontawesome-free/css/all.min.css"
      rel="stylesheet" />
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"></link>
    <style>
      body {
        font-family: 'Roboto', sans-serif;
      }
    </style>
  </head>

  <body class="services-page">
    <header id="header" class="header d-flex align-items-center fixed-top">
      <div class="container-fluid container-xl position-relative d-flex align-items-center">
        <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto">
          <img src="assets/img/logo.png" alt="" />
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="{{ url('/') }}" class="active">Home</a></li>
            <li><a href="{{ url('/opentrip') }}">Open Trip</a></li>
            <li><a href="{{ url('/privatetrip') }}">Private Trip</a></li>
            <li><a href="{{ url('/dokumen') }}">Artikel</a></li>
            <!-- <li><a href="{{ url('/opentrip') }}">Trip Saya</a></li> -->
            <li class="dropdown">
              <a href="#">
                <span>Profil</span>
                <i class="bi bi-chevron-down toggle-dropdown"></i>
              </a>
              <ul>
                <li><a href="{{ url('/profil-kami') }}">Profil Kami</a></li>
                <li><a href="{{ url('/tentang-kami') }}">Tentang Kami</a></li>
              </ul>
            </li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="btn-getstarted" href="{{ url('/login') }}">Login</a>
      </div>
    </header>

    <main class="main">
      <!-- Page Title -->
      <div
        class="page-title dark-background"
        data-aos="fade"
        style="background-image: url(assets/img/background.png)">
        <div class="container position-relative">
          <h1>PAKET OPEN TRIP</h1>
          <h2>Alfarouq Travel</h2>
          <nav class="breadcrumbs">
            <ol>
              <li><a href="index.html">Home</a></li>
              <li class="current">Open Trip</li>
            </ol>
          </nav>
        </div>
      </div>
    
      <div class="max-w-5xl mx-auto p-4">
        <div class="flex flex-col md:flex-row">
          <div class="md:w-1/2">
            <img alt="Group of people in front of Petronas Towers" class="rounded-lg shadow-md" height="400" src="assets/img/open2.jpg" width="600" />
            <div class="mt-4">
              <h2 class="text-lg font-semibold text-green-700">Include</h2>
              <ul class="list-disc list-inside text-sm text-gray-700 mt-2">
                <li>TIKET PESAWAT/KAPAL FERRY PULANG PERGI</li>
                <li>HOTEL BINTANG 3/4</li>
                <li>BUS PARIWISATA PREMIUM</li>
                <li>MAKAN 3X SEHARI & SARAPAN DIHOTEL</li>
                <li>DRIVER, MINYAK, TOL, dan PARKIR</li>
                <li>TOUR LEADER dan TOUR GUIDE PROFESIONAL</li>
                <li>PENGISIAN EAD MADC (Malaysia Digital Arrival Card)</li>
                <li>DIPANDU PENGISIAN MOBILE SINGAPURA</li>
                <li>FREE TIKET CABLE CAR GENTING HIGHLAND</li>
                <li>FREE MINERAL WATER SETIAP HARI</li>
                <li>FREE DOKUMENTASI FOTO dan VIDIO KONTEN</li>
              </ul>
            </div>
          </div>
          <div class="md:w-1/2 md:pl-8 mt-8 md:mt-0">
            <h1 class="text-2xl font-semibold text-green-700">Paket Open Trip 2 Negara</h1>
            <div class="flex items-center text-sm text-gray-600 mt-2">
                <i class="fas fa-map-marker-alt mr-2 text-[#276f5f]"></i>
                <span>Malaysia, Singapura</span>
                </div>
                <div class="flex items-center text-sm text-gray-600 mt-2">
                <i class="fas fa-calendar-alt mr-2 text-[#276f5f]"></i>
                <span>18 - 22 Oktober 2024</span>
                </div>
                <div class="flex items-center text-sm text-gray-600 mt-2">
                <i class="fas fa-clock mr-2 text-[#276f5f]"></i>
                <span>5 Hari</span>
                </div>

            <div class="mt-4">
              <h2 class="text-lg font-semibold text-green-700">Satuan</h2>
              <p class="text-xl font-bold text-gray-800">Rp 3.500.000</p>
            </div>
            <div class="mt-4 flex items-center">
              <button class="bg-gray-200 text-gray-600 px-2 py-1 rounded-l">-</button>
              <span class="bg-gray-100 text-gray-800 px-4 py-1">1</span>
              <button class="bg-gray-200 text-gray-600 px-2 py-1 rounded-r">+</button>
            </div>
            <div class="mt-4">
              <h2 class="text-lg font-semibold text-green-700">Harga Total</h2>
              <p class="text-xl font-bold text-gray-800">Rp 3.500.000</p>
            </div>
            <!-- <div class="mt-4">
              <button class="bg-black text-white px-4 py-2 rounded">Pesan Sekarang</button>
            </div> -->
            
            <!-- Pesan Sekarang Button -->
            <div class="mt-4">
            <button onclick="showLoginModal()" class="bg-black text-white px-4 py-2 rounded">
                Pesan Sekarang
            </button>
            </div>
            <!-- Modal -->
            <div id="loginModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center">
                <div class="bg-[#a8ccc4] p-10 rounded-lg shadow-lg text-center">
                    <h1 class="text-xl font-bold mb-6">LOGIN DIPERLUKAN</h1>
                    <div class="bg-white p-4 rounded-lg mb-6">
                        <p class="text-gray-800">Silakan login terlebih dahulu untuk melanjutkan</p>
                    </div>
                    <button onclick="window.location.href='{{ url('/login') }}'" class="bg-[#276f5f] text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-teal-700">
                        Login/Register
                    </button>
                    <!-- Close Modal Button -->
                    <button onclick="closeLoginModal()" class="mt-4 text-gray-700 hover:text-gray-900">Close</button>
                </div>
            </div>

            <!-- JavaScript to Show/Close Modal -->
            <script>
                // Show modal when button is clicked
                function showLoginModal() {
                    document.getElementById('loginModal').style.display = 'flex';
                }

                // Close modal when close button is clicked
                function closeLoginModal() {
                    document.getElementById('loginModal').style.display = 'none';
                }
            </script>

            <div class="mt-4 flex items-center text-sm text-gray-600">
              <i class="fas fa-download mr-2"></i>
              <a class="text-green-700" href="#">Unduh ITENERY</a>
            </div>
            <div class="mt-4">
              <h2 class="text-lg font-semibold text-green-700">Exclude</h2>
              <ul class="list-disc list-inside text-sm text-gray-700 mt-2">
                <li>CHOP PASSPORT IMIGRASI</li>
                <li>JAJAN PRIBADI</li>
                <li>EXTRA BAGASI</li>
              </ul>
              <h2 class="text-lg font-semibold text-green-700 mt-4">Keterangan</h2>
              <ul class="list-disc list-inside text-sm text-gray-700 mt-2">
                <li>Tiket Cable Car Genting: 25 RM (90 K)</li>
                <li>Chop Passport Thailand: 20 RM (70 K)</li>
                <li>Tips 300 K/ Orang dalam satu program</li>
                <li>Bagasi (Bagi yang mau)</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </main>

    <footer id="footer" class="footer dark-background">
      <div class="container footer-top">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-about">
            <a href="{{ route('home') }}" class="logo d-flex align-items-center">
              <img src="assets/img/logo1.png" alt="" />
            </a>
            <h5>CV. Alfarouq Tour and Travel</h5>
            <p>
              Alfarouq Travel menawarkan paket perjalanan tour travel tiga
              negara yaitu Malaysia, Singapura dan Thailand dengan harga spesial
              khusus untuk per-orangan, keluarga dan rombongan.
            </p>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Alamat Kami</h4>
            <p>
              <strong>Alamat:</strong>
              <a href="https://maps.app.goo.gl/DFDBN3553ycHLxTm7">Jl. Dock Yard, Dumai, Riau, Indonesia</a>
            </p>
            <p>
              <strong>Email:</strong>
              <a href="mailto:alfarouqtourtravel@gmail.com">alfarouqtourtravel@gmail.com</a>
            </p>
            <p>
              <strong>WhatsApp:</strong>
              <a href="https://wa.me/6282269497774" target="_blank">+62 822 6949 7774</a>
            </p>
            <p>
              <strong>Instagram:</strong>
              <a href="https://instagram.com/alfarouqtourtravel" target="_blank">alfarouqtourtravel</a>
            </p>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Menu</h4>
            <ul>
              <li><a href="{{ route('home') }}" class="active">Home</a></li>
              <li><a href="{{ route('opentrip') }}">Open Trip</a></li>
              <li><a href="{{ route('privatetrip') }}">Private Trip</a></li>
              <li><a href="{{ route('dokumen') }}">Artikel</a></li>
              <li><a href="{{ route('profil.kami') }}">Profil Kami</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Trip Saya</h4>
            <ul>
              <li><a href="#">2 Negara : Start Pekanbaru</a></li>
              <li><a href="#">2 Negara : Start Dumai</a></li>
              <li><a href="#">3 Negara : Start Jakarta</a></li>
              <li><a href="#">3 Negara : Start Pekanbaru</a></li>
              <li><a href="#">1 Negara : Start Pekanbaru</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="container copyright text-center mt-4">
        <p>
          © <span>Copyright</span> <strong class="px-1 sitename">2024</strong>
          <span> Alfarouq Travel</span>
        </p>
        <div class="credits">
          Designed by <a href="https://bootstrapmade.com/">MyAlfarouq_Travel</a>
        </div>
      </div>
    </footer>

    <div class="whatsapp-button">
      <a
        href="https://wa.me/6282269497774?text=Halo,%20saya%20ingin%20bertanya."
        target="_blank"
        rel="noopener noreferrer"
        aria-label="Chat WhatsApp">
        <i class="bi bi-whatsapp"></i>
        <span>Chat Kami</span>
      </a>
    </div>

    <!-- Scroll Top -->
    <a
      href="#"
      id="scroll-top"
      class="scroll-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

    <!-- Isotope JS CDN -->
    <script src="https://unpkg.com/isotope-layout@3.0.6/dist/isotope.pkgd.min.js"></script>
  </body>
</html>