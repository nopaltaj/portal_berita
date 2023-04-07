
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ZenBlog Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ url('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ url('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ url('frontend/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ url('frontend/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ url('frontend/assets/vendor/aos/aos.css') }}" rel="stylesheet">

  <!-- Template Main CSS Files -->
  <link href="{{ url('frontend/assets/css/variables.css') }}" rel="stylesheet">
  <link href="{{ url('frontend/assets/css/main.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: ZenBlog
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
  * Author: BootstrapMade.com
  * License: https:///bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>TajNews</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/">home</a></li>
          @foreach ($category as $row )
          <li><a href="{{ route('detailCategory', $row->slug) }}">{{ $row->name }}</a></li>
          @endforeach
          
        </ul>
      </nav><!-- .navbar -->

      <div class="position-relative">
        <a href="#" class="mx-2"><span class="bi-facebook"></span></a>
        <a href="#" class="mx-2"><span class="bi-twitter"></span></a>
        <a href="#" class="mx-2"><span class="bi-instagram"></span></a>

        <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
        <i class="bi bi-list mobile-nav-toggle"></i>

        <!-- ======= Search Form ======= -->
        <div class="search-form-wrap js-search-form-wrap">
          <form action="search-result.html" class="search-form">
            <span class="icon bi-search"></span>
            <input type="text" placeholder="Search" class="form-control">
            <button class="btn js-search-close"><span class="bi-x"></span></button>
          </form>
        </div><!-- End Search Form -->

      </div>

    </div>

  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Hero Slider Section ======= -->
    <section id="hero-slider" class="hero-slider">
      <div class="container-md" data-aos="fade-in">
        <div class="row">
          <div class="col-12">
            <div class="swiper sliderFeaturedPosts">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('frontend/assets/img/gunung api.jpeg');">
                    <div class="img-bg-inner">
                      <h2>Deretan Letusan Gunung Terdahsyat Sepanjang Sejarah Indonesia</h2>
                      <p>JAKARTA - Indonesia merupakan negara yang rentan mengalami bencana alam seperti gunung berapi. Ini karena secara geologi, Indonesia berada pada zona ring of fire, yaitu jalur gunung berapi yang membentang mengelilingi cekungan pasifik.</p>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('frontend/assets/img/jerapah.jpeg');">
                    <div class="img-bg-inner">
                      <h2>Apakah Jerapah Bisa Tersambar Petir karena Tubuhnya yang Tinggi?</h2>
                      <p>KOMPAS.com - Jerapah menjadi spesies hewan tertinggi yang hidup di planet ini. Seekor jerapah jantan bahkan bisa tumbuh dengan tinggi badan mencapai 5 meter. Dengan tubuh jangkungnya itu, mungkin sebagian dari Anda akan bertanya-tanya apakah jerapah rentan tersambar petir? Hal ini</p>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('frontend/assets/img/miata.jpeg');">
                    <div class="img-bg-inner">
                      <h2>Mazda MX-5 Miata Generasi Pertama, Si Cantik yang Hampir Sempurna</h2>
                      <p>Faktanya, Mazda MX-5  Miata selalu mewakili esensi kesenangan berkendara, mobil sport yang menarik, dan ekonomis.
                        Tapi, di atas semua itu, sangat efektif di antara tikungan berkat bobotnya yang ringan dan berpenggerak roda belakang.
                        Pada dasarnya, Mazda MX-5 Miata terus berkembang sejak model pertama diluncurkan 30 tahun silam.</p>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('frontend/assets/img/Shaq.jpeg');">
                    <div class="img-bg-inner">
                      <h2>5 Fakta Shaquille O'Neal, Center Paling Dominan dalam Sejarah NBA</h2>
                      <p>Shaquille Rashaun O'Neal lahir pada 1972 di Newark, New Jersey, Amerikat Serikat. Shaq, sapaan akrabnya, bersekolah di Robert G Cole High School di Texas. Ia sempat membawa sekolahnya juara turnamen antar-SMA di negara bagian itu.
                        Kegemilangannya saat SMA menarik minat perguruan tinggi yang bermain di NCAA Divisi 1. Pada 1989, ia pun bergabung dengan Louisiana State University. Shaq bermain selama 3 musim di sana.</p>
                    </div>
                  </a>
                </div>
              </div>
              <div class="custom-swiper-button-next">
                <span class="bi-chevron-right"></span>
              </div>
              <div class="custom-swiper-button-prev">
                <span class="bi-chevron-left"></span>
              </div>

              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Hero Slider Section -->

    <!-- ======= Post Grid Section ======= -->
    <div class="container-md">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            @foreach ($news as $row )
            <div class="col">
                <div class="card">
                  <img src="{{ $row->image }}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">{{ $row->title }}</h5>
                    
                        <div class="text-truncate">
                            <p class="card-text" >{!! $row->description !!}</p>
                        </div>
                    
                    <a href="{{ route('detailNews', $row->slug) }}" class="btn btn-primary">Detail Berita</a>
                  </div>
                </div>
              </div>
                
            @endforeach
    </div>
    {{-- end card --}}
   
 <!-- End Post Grid Section -->

    

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">

        <div class="row g-5">
          
          </div>
        </div>
      </div>
    </div>

    <div class="footer-legal">
      <div class="container">

        <div class="row justify-content-between">
          <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
            <div class="copyright">
              © Copyright <strong><span>ZenBlog</span></strong>. All Rights Reserved
            </div>

            <div class="credits">
              <!-- All the links in the footer should remain intact. -->
              <!-- You can delete the links only if you purchased the pro version. -->
              <!-- Licensing information: https://bootstrapmade.com/license/ -->
              <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>

          </div>

          <div class="col-md-6">
            <div class="social-links mb-3 mb-lg-0 text-center text-md-end">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>

          </div>

        </div>

      </div>
    </div>

  </footer>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ url('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ url('frontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ url('frontend/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ url('frontend/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ url('frontend/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ url('frontend/assets/js/main.js') }}"></script>

</body>

</html>