<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PICKNIK</title>

  <!-- 
    - icon
  -->
  <link rel="shortcut icon" href="/assets/images/Picknik.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="../css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap"
    rel="stylesheet">
</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>

    <div class="overlay" data-overlay></div>

    <div class="header-top">
      <div class="container">

        <div class="header-btn-group">
          <button class="nav-open-btn" aria-label="Open Menu" data-nav-open-btn>
            <ion-icon name="menu-outline"></ion-icon>
          </button>
        </div>

      </div>
    </div>

    <div class="header-bottom">
      <div class="container">

        <nav class="navbar" data-navbar>

          <div class="navbar-top">

            <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>

          </div>

          <ul class="navbar-list">

            <li>
              <a href="#home" class="navbar-link" data-nav-link>home</a>
            </li>

            <li>
              <a href="#destination" class="navbar-link" data-nav-link>destination</a>
            </li>

            <li>
              <a href="#package" class="navbar-link" data-nav-link>packages</a>
            </li>

            <li>
              <a href="#gallery" class="navbar-link" data-nav-link>gallery</a>
            </li>

            <li>
              <a href="#about" class="navbar-link" data-nav-link>About us</a>
            </li>

            <li>
              <a href="index.php" class="navbar-link" data-nav-link>Logout  </a>
            </li>

          </ul>

        </nav>
      </div>
    </div>

  </header>

  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero" id="home">
        <div class="container">

          <h2 class="h1 hero-title">Explore INDONESIA</h2>

          <p class="hero-text">
            Jelajahi panorama keindahan alam yang ada di Indonesia
          </p>

          <div class="btn-group">
            <button class="btn btn-secondary"><a href="#package">Explore</a></button>
          </div>

        </div>
      </section>

      <!--
        - #About
      -->
      <br>

      <section class="cta" id="about">
        <div class="container">

          <div class="cta-content">
            <p class="section-subtitle">About Us</p>

            <h2 class="h2 section-title">PICKNIK</h2>

            <p class="section-text">
              "PICKNIK" merupakan solusi modern untuk para pecinta wisata alam yang ingin menjelajahi keindahan alam Indonesia secara lebih mudah dan menyenangkan. Dengan menggunakan website ini, pengguna dapat merencanakan dan memesan perjalanan wisata alam di seluruh Indonesia dengan cepat dan efisien.
            </p>
          </div>

          <div class="logo">
            <img src="../images/Picknik-removebg-preview.png" alt="">
          </div>

        </div>
      </section>

      <!-- 
        - #POPULAR
      -->

      <section class="popular" id="destination">
        <div class="container">
          
          <p class="section-subtitle">Rekomendasi</p>
  
          <h2 class="h2 section-title">Destinasi Favorit</h2>

          <p class="section-text">
            Beberapa destinasi wisata favorit yang sering dikunjungi turis maupun wisatawan
          </p>

          <ul class="popular-list">

            <li>
              <div class="popular-card">

                
                <figure class="card-img">
                  <img src="https://www.indonesia-tourism.com/bali/nusa-penida/images/nusa_penida.jpg" alt="image">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">Bali</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#">Nusa Penida</a>
                  </h3>

                </div>

              </div>
            </li>

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="https://th.bing.com/th/id/R.787c0671573f9a7ae3c248e212ad516a?rik=3Z3%2b6Ve7DhZOyw&riu=http%3a%2f%2frajaampatbiodiversity.com%2fwp-content%2fuploads%2f2015%2f11%2factividades.jpg&ehk=f8jzmKAgIU0IkJv6QhIh%2fO9SydGxsLgGhza9b0cynRI%3d&risl=&pid=ImgRaw&r=0" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">papua</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#">Raja Ampat</a>
                  </h3>

                </div>

              </div>
            </li>

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="https://indonesiaflorestour.com/wp-content/uploads/2019/09/ift-header-02.jpg"  loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">Nusa Tenggara</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#">Pulau komodo</a>
                  </h3>

                </div>

              </div>
            </li>

          </ul>

          <button class="btn btn-primary"> <a href="#package">selengkapnya</a></button>          

        </div>
      </section>


      <!-- 
        - #TOUR SEARCH
      -->

      <section class="tour-search">
        <div class="container">

          <form action="" class="tour-search-form">

            <div class="input-wrapper">
              <label for="destination" class="input-label">Search Destination*</label>

              <input type="text" name="destination" id="destination" required placeholder="Enter Destination"
                class="input-field">
            </div>

            <div class="input-wrapper">
              <label for="people" class="input-label">Pax Number*</label>

              <input type="number" name="people" id="people" required placeholder="No.of People" class="input-field">
            </div>

            <div class="input-wrapper">
              <label for="checkin" class="input-label">Checkin Date**</label>

              <input type="date" name="checkin" id="checkin" required class="input-field">
            </div>

            <div class="input-wrapper">
              <label for="checkout" class="input-label">Checkout Date*</label>

              <input type="date" name="checkout" id="checkout" required class="input-field">
            </div>

            <button type="submit" class="btn btn-secondary">Cari</button>

          </form>

        </div>
      </section>



      <!-- 
        - #PACKAGE
      -->

      <section class="package" id="package">
        <div class="container">

          <p class="section-subtitle">Paket wisata</p>

          <h2 class="h2 section-title">paket wisata</h2>

          <p class="section-text">
            Nikmati keindahan alam Indonesia dengan memesan paket wisata yang tersedia
          </p>

          <ul class="package-list">

            <!-- Content 1 -->
            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="https://4.bp.blogspot.com/-l65mzz1V5Ho/UwOlBrRWoKI/AAAAAAAAALE/OqNeAnM289I/s1600/Indonesia-North-Sulawesi-Bunaken-Manado-Tua-Reef-011-1200x800.jpg" alt="">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">TAMAN NASIONAL BUNAKEN</h3>

                  <p class="card-text">
                    Pulau Bunaken memiliki keindahan berupa taman laut dengan beragam jenis ikan hias dan kawasan pantainya  berupa hamparan pasir putih.
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="time"></ion-icon>

                        <p class="text">7D/6N</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="people"></ion-icon>

                        <p class="text">pax: 4</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>

                        <p class="text">Manado</p>
                      </div>
                    </li>

                  </ul>

                </div>

                <div class="card-price">

                  <div class="wrapper">

                    <p class="reviews">(20 reviews)</p>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                  </div>

                  <p class="price">
                    Rp. 20.000.000
                    <span>4 orang</span>
                  </p>

                  <button class="btn btn-secondary" >
                    <a href="tiket.php">Book Now</a> 
                   </button>

                </div>

              </div>
            </li>

            <!-- Content 2 -->
            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="https://www.villa-finder.com/magazine/wp-content/uploads/2019/11/Resort-Page-Gili-Trawangan-1200x800.jpg" alt="GilTra" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Gili Trawangan</h3>

                  <p class="card-text">
                    Gili Trawangan Lombok dengan pantainya yang indah, lautnya yang biru jernih, pasir pantai yang bersih hingga sunset dan sunrisenya yang mempesona.
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="time"></ion-icon>

                        <p class="text">5D/4N</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="people"></ion-icon>

                        <p class="text">3</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>

                        <p class="text">Lombok</p>
                      </div>
                    </li>

                  </ul>

                </div>

                <div class="card-price">

                  <div class="wrapper">

                    <p class="reviews">(15 reviews)</p>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                  </div>

                  <p class="price">
                    Rp. 15.000.000
                    <span>3 Orang</span>
                  </p>

                  <button class="btn btn-secondary" >
                    <a href="tiket.php">Book Now</a> 
                   </button>

                </div>

              </div>
            </li>

            <!-- Content 3 -->
            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="https://expatlifeindonesia.com/wp-content/uploads/2020/10/sutirta-budiman-DxmBSgUYKis-unsplash.jpg" alt="GilTra" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Raja Ampat</h3>

                  <p class="card-text">
                    Terdapat biota laut yang sangat beraneka ragam sehingga menjadikan Pulau Raja Ampat menjadi destinasi wisata yang terkenal.
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="time"></ion-icon>

                        <p class="text">7D/6N</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="people"></ion-icon>

                        <p class="text">7</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>

                        <p class="text">Papua</p>
                      </div>
                    </li>

                  </ul>

                </div>

                <div class="card-price">

                  <div class="wrapper">

                    <p class="reviews">(20 reviews)</p>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                  </div>

                  <p class="price">
                    Rp. 27.000.000
                    <span>7 Orang</span>
                  </p>

                  <button class="btn btn-secondary" >
                   <a href="tiket.php">Book Now</a> 
                  </button>

                </div>

              </div>
            </li>

            <button class="btn btn-primary"> <a href="tour.php">selengkapnya</a></button>    
  
            </div>

          </ul>

        </div>
      </section>

      <!-- 
        - #GALLERY
      -->

      <section class="gallery" id="gallery">
        <div class="container">

          <p class="section-subtitle">Highlight</p>

          <h2 class="h2 section-title">wonderful indonesia</h2>

          <p class="section-text">
            Beberapa highlight keindahan alam Indonesia
          </p>

          <br>

          <ul class="gallery-list">

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="https://4.bp.blogspot.com/-AQSN93Nabck/VMC_lqEt3XI/AAAAAAAACAc/AR22j1fZvoE/s1600/Bali.jpg" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="https://www.pesonaindo.com/wp-content/uploads/2015/11/Foto-Tempat-Wisata-Alam-di-Nusa-Tenggara-Timur-Pesona-Indonesia-fototrip-3-1024x671.jpg" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="https://www.tripsavvy.com/thmb/biD0OJ80xgxz3x64reLmtSnGK2Y=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/ijen_07-57a970763df78cf459c2cb32.jpg" alt="Gallery image">
              </figure>
            </li>  
            
            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="https://anekatempatwisata.com/wp-content/uploads/2015/10/Wae-Rebo.jpg" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="https://tour.dolandolen.com/wp-content/uploads/2018/01/Explore-Belitung-4.jpg" alt="Gallery image">
              </figure>
            </li>

          </ul>

        </div>
      </section>

    </article>
  </main>

  <!-- Footer -->

  <footer>
    <p>Team Mumet @ .com All rights reserved.</p>
  </footer>

  <!-- Footer -->

  <!-- 
    - #GO TO TOP
  -->

  <a href="#top" class="go-top" data-go-top>
    <ion-icon name="chevron-up-outline"></ion-icon>
  </a>
  
  <!-- 
    - custom js link
  -->
  <script src="../js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>