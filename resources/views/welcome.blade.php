<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Index</title>

  <!-- Favicons -->
  <link href="{{ asset('assetslanding/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assetslanding/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assetslanding/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assetslanding/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assetslanding/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assetslanding/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assetslanding/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assetslanding/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assetslanding/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assetslanding/css/style.css') }}" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.html"><span>SmartParking</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          {{-- <li><a class="nav-link scrollto" href="#team">Team</a></li> --}}
          <li><a class="nav-link scrollto" href="#pricing">Booking</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link " href="/login">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1>Selamat Datang! Kami merasa terhormat untuk menerima anda di <span> SmartParking</span></h1>
            <h2>Kami menghargai pelanggan kami lebih dari segalanya, dan kepuasan Anda adalah tujuan kami</h2>
            <div class="text-center text-lg-start">
              <a href="/login" class="btn-get-started scrollto">Mulai Di Sini</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="{{ asset('assetslanding/img/hero-img.png') }}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
            <h3>Smartparking</h3>
            <p>Smartparking adalah Teknologi Penyedia Informasi Parkir sebagai Pendukung Sistem Transportasi, dan  merupakan sistem
              yang dirancang agar memudahkan pengendara untuk
              mengetahui ketersediaan slot parkir dan dimana lokasi slot
              yang kosong pada suatu tempat parkir, terutama pada tempat
              parkir yang luas. Informasi mengenai keadaan tempat parkir
              akan ditampilkan pada sebuah layar yang ditempatkan pada
              pintu masuk tempat parkir </p>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon"><i class="bi bi-card-list"></i></div>
              <h4 class="title"><a href="">Kategori SmartParking</a></h4>
              <p class="description">Smart Parking memiliki Sistem Hak Akses Parkir, Smart Parking memiliki Sistem Manajemen Lot Parkir dan Smart Parkir memiliki Sistem Manajemen Pembayaran Parkir.</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon"><i class="bi bi-clipboard-check"></i></div>
              <h4 class="title"><a href="">Konsep SmartParking</a></h4>
              <p class="description">Mudah, Cepat dan Lebih efisien untuk anda mendapatkan lahan parkir</p>
            </div>
            

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon"><i class="bi bi-geo-alt"></i></div>
              <h4 class="title"><a href="">Lokasi SmartParking</a></h4>
              <p class="description">Pelabuhan Sri Bintan Pura, Ramayana Tanjungpinang, TCC Tanjungpinang, Pasar Kota Tanjungpinang, Rsud kota Tanjungpinang, Bandara </p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row" data-aos="fade-up">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="5002" data-purecounter-duration="1" class="purecounter"></span>
              <p>Kepuasan Pelanggan</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-geo-alt"></i>
              <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="1" class="purecounter"></span>
              <p>Lokasi Parkir</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-geo"></i>
              <span data-purecounter-start="0" data-purecounter-end="132" data-purecounter-duration="1" class="purecounter"></span>
              <p>Jumlah Parkir</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="15233" data-purecounter-duration="1" class="purecounter"></span>
              <p>Jumlah Pengguna</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Details Section ======= -->
    <section id="details" class="details">
      <div class="container">

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="{{ asset('assetslanding/img/details-1.png') }}" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-4" data-aos="fade-up">
            <h3>SmartParking salah satu untuk menjadi Negara yang maju</h3>
            <p class="fst-italic">
              SmartParking adalah sistem pengelolaan retribusi parkir secara elektronik. Sistem ini terintegrasi dengan semua
              bidang/petugas terkait serta alat pengawasan yang dipasang pada lokasi-lokasi parkir.
              Keuntungan dalam pemanfaatan aplikasi SmartParking ini adalah:
            </p>
            <ul>
              <li><i class="bi bi-check"></i> Transparansi pendapatan dan pendataan parkir.</li>
              <li><i class="bi bi-check"></i> Kinerja petugas dapat dipantau secara online oleh stakeholder.</li>
              <li><i class="bi bi-check"></i> Laporan pendapatan dapat diakses secara online oleh semua stakeholder terkait sehingga menjadi paperless.</li>
              <li><i class="bi bi-check"></i> Pengaturan parkir akan menjadi lebih tertib untuk menjadikan kota yang memiliki tata lalulintas yang baik.</li>
              <li><i class="bi bi-check"></i> Petugas parkir akan lebih bermartabat dan profesional dalam melaksanakan tugasnya.</li>
            </ul>
            <p>
              Ayo buat Negeri mu maju kalau bukan kita yang memulai, siapa lagi yang akan memajukan Bangsamu.
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="{{ asset('assetslanding/img/details-2.png') }}" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3>Cara Menggunakan Aplikasi SmartParking</h3>
            <p class="fst-italic">
              Berlangganan Dengan Aplikasi Kami Yaitu SmartParking, dengan cara mendownload aplikasi SmartParking
            </p>
            <p>
              1. Isi Biodata anda.</br>
              2. Ikuti langkah-langkah yang telah disediakan untuk mengisi data parkir anda.</br>
              3. Tentuka jenis parkir yang anda inginkan.</br>
              4. Pilih lokasi parkir yang anda inginkan.

            </p>
          </div>
        </div>

      </div>
    </section><!-- End Details Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('assetslanding/img/testimonials/testimonials-6.jpg') }}" class="testimonial-img" alt="">
                <h3>Rio Setiawan</h3>
                <h4>Pelanggan</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Aplikasi yang sangat bagus, saya sangat suka dengan aplikasi ini.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('assetslanding/img/testimonials/testimonials-7.jpg') }}" class="testimonial-img" alt="">
                <h3>Maulana Eko</h3>
                <h4>Pelanggan</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Saat menggunakan aplikasi ini saya sangat puas.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('assetslanding/img/testimonials/testimonials-8.jpg') }}" class="testimonial-img" alt="">
                <h3>Muhammad Rizky</h3>
                <h4>Pelanggan</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Aplikasi ini sangat efisien dan cepat.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('assetslanding/img/testimonials/testimonials-9.jpg') }}" class="testimonial-img" alt="">
                <h3>Muhammad Onib Husen</h3>
                <h4>Pelanggan</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fitur Aplikasi yang sangat lengkap dan juga realtime untuk data parkir.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('assetslanding/img/testimonials/testimonials-5.jpg') }}" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Pelanggan</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  The data management is very good and the parking data collection is very extensive.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    {{-- <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Team</h2>
          <p>Our Great Team</p>
        </div>

        <div class="row" data-aos="fade-left">

          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="{{ asset('assetslanding/img/team/team-1.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="{{ asset('assetslanding/img/team/team-2.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
              <div class="pic"><img src="{{ asset('assetslanding/img/team/team-3.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="member" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="{{ asset('assetslanding/img/team/team-4.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section --> --}}

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Booking</h2>
          <p>Check our Booking</p>
        </div>

        <div class="row" data-aos="fade-left">

          <div class="col-lg-3 col-md-6">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <h3>Parkir Motor</h3>
              <h4><sup>Rp.</sup>2000<span> / motor</span></h4>
              <ul>
                {{-- <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li> --}}
              </ul>
              <div class="btn-wrap">
                <a href="{{ route('bookings-user.index') }}" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <h3>Parkir Mobil</h3>
              <h4><sup>Rp.</sup>5000<span> / mobil</span></h4>
              <ul>
                {{-- <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li> --}}
              </ul>
              <div class="btn-wrap">
                <a href="{{ route('bookings-user.index') }}" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>F.A.Q</h2>
          <p>Frequently Asked Questions</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-1">Apakah data saya aman di aplikasi ini? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Untuk pendataan data, kami menggunakan teknologi terbaru yaitu <strong>AES-256</strong> untuk mengenkripsi data.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Apakah jika menggunakan aplikasi ini parkir akan menjadi rapih? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Tentu, karena kami mengecek dibeberapa tempat yang sudah terdaftar di Aplikasi kami.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Ada berapa lokasi parkir untuk saat ini? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Untuk saat ini lokasi parkir sudah terdaftar di 6 wilayah, yaitu : Pelabuhan Sri Bintan Pura, Ramayana Tanjungpinang, TCC Tanjungpinang, Pasar Kota Tanjungpinang, Rsud kota Tanjungpinang, Bandara.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Bagaimana cara untuk mendapatkan akses di Aplikasi SmartParking? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Untuk saat ini Aplikasi SmartParking sudah bisa diakses oleh semua pengguna user. Silahkan Register terlebih dahulu untuk mendapatkan akses.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Apakah biaya menggunakan Aplikasi SmartParking akan menjadi mahal? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Untuk saat ini biaya parkir yang dikenakan oleh Aplikasi SmartParking adalah Rp. 0,00.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End F.A.Q Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Kepulauan Riau, Tanjungpinang, Tanjungpinang Timur, 29122</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>cs@smartparking.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>0771 1234 56</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>SmartParking</h3>
              <p class="pb-3"><em>SmartParking adalah sistem pengelolaan retribusi parkir secara elektronik.</em></p>
              <p>
                Kepulauan Riau, Tanjungpinang, Tanjungpinang Timur, 29122<br><br>
                <strong>Phone:</strong> 0771 1234 56<br>
                <strong>Email:</strong> cs@smartparking.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/">Home</a></li>
              <li><i class="bx bx-chevron-right scrollto"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Berita Tentang Kami</h4>
            <p>Subscribe untuk mengetahui tentang kami.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>SmartParking</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assetslanding/vendor/purecounter/purecounter.js') }}"></script>
  <script src="{{ asset('assetslanding/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assetslanding/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assetslanding/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assetslanding/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assetslanding/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assetslanding/js/main.js') }}"></script>

</body>

</html>