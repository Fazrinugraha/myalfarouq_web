<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>MyAlfarouq - Web</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- Favicons -->
    <link href="{{ asset('assets/user/img/logo.png') }}" rel="icon" />
    <link href="{{ asset('assets/user/img/apple-touch-icon.png') }}" rel="apple-touch-icon" />


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/user/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/user/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/user/vendor/aos/aos.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/user/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/user/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/user/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />


    <!-- Main CSS File -->
    <link href="{{ asset('assets/user/css/main.css') }}" rel="stylesheet" />
  </head>

  <body class="get-a-quote-page">
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
      <a href="{{ route('user.home') }}" class="logo d-flex align-items-center me-auto">
      <img src="{{ asset('assets/user/img/logo.png') }}" alt="Logo" />
      </a>

      <nav id="navmenu" class="navmenu">
      <ul>
          <li><a href="{{ route('user.home') }}" class="active">Home</a></li>
          <li><a href="{{ route('user.opentrip') }}">Open Trip</a></li>
          <li><a href="{{ route('user.privatetrip') }}">Private Trip</a></li>
          <li><a href="{{ route('user.dokumen') }}">Artikel</a></li>
          <li><a href="{{ route('user.tripsaya') }}">Trip Saya</a></li>
          <li class="dropdown">
              <a href="#">
                  <span>Profil</span>
                  <i class="bi bi-chevron-down toggle-dropdown"></i>
              </a>
              <ul>
                  <li><a href="{{ route('user.profil-kami') }}">Profil Kami</a></li>
                  <li><a href="{{ route('user.tentang-kami') }}">Tentang Kami</a></li>
              </ul>
          </li>
      </ul>

        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
        <a class="btn-getstarted" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Logout
        </a>

        <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
  </header>

    <main class="main">
      <!-- Page Title -->
      <div
        class="page-title dark-background"
        data-aos="fade"
        style="background-image: url('{{ asset('assets/user/img/background.png') }}')">
        <div class="container position-relative">
          <h1>Private Trip</h1>
          <h2>Alfarouq Travel</h2>
          <nav class="breadcrumbs">
            <ol>
              <li><a href="index.html">Home</a></li>
              <li class="current">Private Trip</li>
            </ol>
          </nav>
        </div>
      </div>
      <!-- End Page Title -->

      <!-- Get A Quote Section -->
      <section id="get-a-quote" class="get-a-quote section">
        <div class="container">
          <div class="row g-0" data-aos="fade-up" data-aos-delay="100">
            <div
              class="col-lg-5 quote-bg"
              style="background-image:url('{{ asset('assets/user/img/private.jpg') }}')"></div>

              <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">
    <form action="{{ route('user.private_trip.store') }}" method="POST" enctype="multipart/form-data" class="php-email-form">
        @csrf
        <h2>PENDAFTARAN PRIVATE TRIP</h2>

        <div class="row gy-4">
            <!-- No Telepon -->
            <div class="col-12">
                <input type="text" name="no_telepon" class="form-control @error('no_telepon') is-invalid @enderror" placeholder="Masukkan No Telepon" value="{{ old('no_telepon') }}" required />
                @error('no_telepon')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Nama Trip -->
            <div class="col-12">
                <input type="text" name="nama_trip" class="form-control @error('nama_trip') is-invalid @enderror" placeholder="Masukkan Nama Pengaju Trip" value="{{ old('nama_trip') }}" required />
                @error('nama_trip')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Destinasi -->
            <div class="col-12">
                <input type="text" name="destinasi" class="form-control @error('destinasi') is-invalid @enderror" placeholder="Masukkan Destinasi" value="{{ old('destinasi') }}" required />
                @error('destinasi')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Tanggal Pergi -->
            <div class="col-12">
                <input type="date" name="tanggal_pergi" class="form-control @error('tanggal_pergi') is-invalid @enderror" value="{{ old('tanggal_pergi') }}" required />
                @error('tanggal_pergi')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Tanggal Kembali -->
            <div class="col-12">
                <input type="date" name="tanggal_kembali" class="form-control @error('tanggal_kembali') is-invalid @enderror" value="{{ old('tanggal_kembali') }}" required />
                @error('tanggal_kembali')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Starting Point -->
            <div class="col-12">
                <input type="text" name="star_point" class="form-control @error('star_point') is-invalid @enderror" placeholder="Masukkan Starting Point" value="{{ old('star_point') }}" required />
                @error('star_point')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Jumlah Peserta -->
            <div class="col-12">
                <input type="number" name="jumlah_peserta" class="form-control @error('jumlah_peserta') is-invalid @enderror" placeholder="Masukkan Jumlah Peserta" value="{{ old('jumlah_peserta') }}" required />
                @error('jumlah_peserta')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Deskripsi Trip -->
            <div class="col-12">
                <textarea name="deskripsi_trip" class="form-control @error('deskripsi_trip') is-invalid @enderror" placeholder="Masukkan Deskripsi Trip" rows="4" required>{{ old('deskripsi_trip') }}</textarea>
                @error('deskripsi_trip')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="col-12 text-center">
                <button type="submit">Submit</button>
            </div>
        </div>
    </form>
</div>



          </div>
        </div>
      </section>
      <!-- /Get A Quote Section -->
    </main>

    <footer id="footer" class="footer dark-background">
      <div class="container footer-top">
        <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
        <a href="{{ route('user.home') }}" class="logo d-flex align-items-center">
        <img src="{{ asset('assets/user/img/logo1.png') }}" alt="" />
            </a>
            <h5>CV. Alfarouq Tour and Travel</h5>
            <p>
              Alfarouq Travel menawarkan paket perjalanan tour travel tiga
              negara yaitu Malaysia, Singapura dan Thailand dengan harga spesial
              khusus untuk per-orangan, keluarga dan rombongan.
            </p>
          </div>

          <div
            class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Alamat Kami</h4>
            <p>
              <strong>Alamat:</strong>
              <a href="https://maps.app.goo.gl/DFDBN3553ycHLxTm7"
                >Jl. Dock Yard, Dumai, Riau, Indonesia</a
              >
            </p>
            <p>
              <strong>Email:</strong>
              <a href="mailto:alfarouqtourtravel@gmail.com"
                >alfarouqtourtravel@gmail.com</a
              >
            </p>
            <p>
              <strong>WhatsApp:</strong
              ><a href="https://wa.me/6282269497774" target="_blank"
                >+62 822 6949 7774</a
              >
            </p>
            <p>
              <strong>Instagram:</strong>
              <a href="https://instagram.com/alfarouqtourtravel" target="_blank"
                >alfarouqtourtravel</a
              >
            </p>
          </div>

          <div class="col-lg-2 col-6 footer-links">
                <h4>Menu</h4>
                <ul>
                  <li><a href="{{ route('user.home') }}" class="active">Home</a></li>
                  <li><a href="{{ route('user.opentrip') }}">Open Trip</a></li>
                  <li><a href="{{ route('user.privatetrip') }}">Private Trip</a></li>
                  <li><a href="{{ route('user.dokumen') }}">Artikel</a></li>
                  <li><a href="{{ route('user.profil-kami') }}">Profil Kami</a></li>
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
 <script src="{{ asset('assets/user/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/user/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/user/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/user/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/user/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/user/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/user/js/main.js') }}"></script>
  </body>
</html>
