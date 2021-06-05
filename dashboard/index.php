<?php
require '../config.php';
require '../lib/database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-KS9GGJ700H"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-KS9GGJ700H');
</script>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="google-site-verification" content="-MgOYZsU-aaUwMnv5IMQwdAknpfcBBxAsgZKdl9zQqs" />
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="keywords" content="social media marketing, jasa digital marketing, jasa internet marketing, jasa social media management, jasa social media,jual follower,jasa all sosmed, jual follower instagram, jual follower twitter, jasa tambah follower, reseller follower, ppt line@, jasa social medias, jual subscribe murah, jual jam tayang youtube, Panel SMM Sosial Media Marketing, Indogram Smm panel,jasa followers instagram, indonesia, indogram, indogram smm, smm termurah, Panel SMM termurah">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="<?php echo $data['deskripsi_web']; ?>" Dname="description" />
        <meta content="<?php echo $data['short_title']; ?>" name="author" />

        <title><?php echo $data['short_title']; ?></title>

        <!-- Start Favicon -->
        <link rel="icon" href="<?php echo $config['web']['url'] ?>assets/media/logos/logo.png" type="image/png">
        <!-- End Favicon -->

        <!-- Start Bootstrap 4.1.3 -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- End Bootstrap 4.1.3 -->

        <!-- Start Animate Css -->
        <link rel="stylesheet" href="assets/css/plugins/animate.css">
        <!-- End Animate Css -->

        <!-- Start Google Fonts -->
        <link  href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">
        <!-- End Google Fonts -->

        <!-- Start Fonts Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet">
        <!-- End Fonts Awesome -->

        <!-- Start Slick Slider -->
        <link rel="stylesheet" href="assets/css/plugins/slick.css">
        <link rel="stylesheet" href="assets/css/plugins/slick-theme.css">
        <!-- End Slick Slider -->

        <!-- Start Magnific Popup -->
        <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
        <!-- End Magnific Popup -->

        <!-- Start Main Style -->
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="assets/css/custom.css">
        <!-- End Main Style -->

</head>

<body>

        <!-- Start Page Loading -->
        <div class="se-pre-con"></div>
            <div id="app">
        <!-- End Page Loading -->

        <!-- Start Navbar -->
        <header class="header-global">
            <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                <div class="container">
                    <a class="navbar-brand" href="index.html"><img src="<?php echo $config['web']['url'] ?>assets/media/logos/logo.png" style="width: 159px; height: 80;" alt="logo"></a>
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-toggle="collapse"
                        data-target="#navbarNavDropdown"
                        aria-controls="navbarNavDropdown"
                        aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo $config['web']['url'] ?>#slider">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#benefits">Fitur</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo $config['web']['url'] ?>dashboard/service">Layanan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Kontak</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://wa.me/6282171686143">whaaap</a>
                            </li>
                                <li class="nav-item">
                                <a class="nav-link" href="https://wa.me/6282171686143">Telegram</a>
                            </li>
                               <li class="nav-item">
                                <a class="nav-link" href="#">Download APK</a>
                            </li>
                               <li class="nav-item dropdown">
                                <a class="nav-link" href="<?php echo $config['web']['url'] ?>page/tos">TOS</a>
                            </li>
                        </ul>
                        <a href="<?php echo $config['web']['url'] ?>auth/login" role="button" class="btn-1">Masuk</a>
                    </div>
                </div>
            </nav>
        </header>
        <!-- End Navbar -->

        <!-- Start Slider -->
        <section class="slider d-flex align-items-center" id="slider">
            <div class="container">
                <div class="content">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-6">
                            <div class="left">
                                <h3><?php echo $data['title']; ?></h3>
                                <p><?php echo $data['deskripsi_web']; ?></p>
                                <a href="<?php echo $config['web']['url'] ?>auth/login" class="btn-2">Masuk</a>
                                <a href="<?php echo $config['web']['url'] ?>auth/register" class="btn-1">Daftar</a>
                            
                            </div>
                        </div>
                        <!-- Right-->
                        <div class="col-md-6">
                            <div class="right">
                                <img src="assets/img/slider-img.png" alt="slider-img" class="img-fluid wow fadeInRight" data-wow-offset="1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Slider -->

       <!-- Start Features -->
        <section class="features" id="features">
            <div class="container text-center">
                <div class="heading">
                    <h2>3 Langkah Mudah Untuk Memulai Transaksi</h2>
                </div>
                <div class="line"></div>
                <div class="row">
                    <!-- Box-1 -->
                    <div class="col-md-4">
                        <div class="box">
                            <img src="assets/img/feature-1.png" alt="Melakukan Pendaftaran Akun">
                            <h3>1.Melakukan Pendaftaran Akun</h3>
                            <p>Pendaftaran Mudah Dan Gratis, Setelah Mendaftar Akun Anda Langsung Aktif Dan Dapat Melakukan Isi Saldo.</p>
                        </div>
                    </div>
                    <!-- Box-2 -->
                    <div class="col-md-4">
                        <div class="box">
                            <img src="assets/img/feature-2.png" alt="Melakukan Isi Saldo">
                            <h3>2.Melakukan Isi Saldo</h3>
                            <p>Langkah Selanjutnya Anda Melakukan Isi Saldo Agar Dapat Digunakan Untuk Transaksi Semua Produk Terlengkap Dari Kami.</p>
                        </div>
                    </div>
                    <!-- Box-3 -->
                    <div class="col-md-4">
                        <div class="box">
                            <img src="assets/img/feature-3.png" alt="Melakukan Transaksi">
                            <h3>3.Melakukan Transaksi</h3>
                            <p>Langkah Terakhir Melakukan Transaksi Anda Dengan Produk Terlengkap Dan Termurah Dari Kami.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Features -->

        <?php         
        // Total Pengguna
        $cek_pengguna = $conn->query("SELECT * FROM users");
        $data_pengguna = mysqli_num_rows($cek_pengguna);

        // Total Pesanan
        $cek_pesanan_sosmed = $conn->query("SELECT * FROM pembelian_sosmed WHERE status = 'Success'");
        $data_pesanan_sosmed = $cek_pesanan_sosmed->num_rows;
        $cek_pesanan_pulsa = $conn->query("SELECT * FROM pembelian_sosmed WHERE status = 'Success'");
        $data_pesanan_pulsa = $cek_pesanan_pulsa->num_rows;

        // Total Layanan
        $cek_layanan_sosmed = $conn->query("SELECT * FROM layanan_sosmed WHERE status = 'Aktif'");
        $data_layanan_sosmed = $cek_layanan_sosmed->num_rows;
        $cek_layanan_pulsa = $conn->query("SELECT * FROM layanan_pulsa WHERE status = 'Aktif'");
        $data_layanan_pulsa = $cek_layanan_pulsa->num_rows;
        ?>
        <!-- Start Some Facts -->
        <section class="some-facts">
            <div class="container text-center">
                <div class="row">
                    <!-- BOX-1 -->
                   <div class="col-md-4">
                        <div class="items">
                            <img src="assets/img/some-fact/1.png" alt="some-fact-1">
                            <h3><span class="counter"><?php echo number_format($data_pengguna,0,',','.'); ?></span>+</h3>
                            <div class="line mx-auto"></div>
                            <h4>Total Pengguna</h4>
                        </div>
                    </div>
                    <!-- BOX-2 -->
                    <div class="col-md-4">
                        <div class="items">
                            <img src="assets/img/some-fact/3.png" alt="some-fact-1">
                            <h3><span class="counter"><?php echo number_format($data_pesanan_sosmed+$data_pesanan_pulsa,0,',','.'); ?></span>+</h3>
                            <div class="line mx-auto"></div>
                            <h4>Total Pesanan</h4>
                        </div>
                    </div>
                   <!-- BOX-3 -->
                    <div class="col-md-4">
                        <div class="items">
                            <img src="assets/img/some-fact/4.png" alt="some-fact-1">
                            <h3><span class="counter"><?php echo number_format($data_layanan_sosmed+$data_layanan_pulsa,0,',','.'); ?></span>+</h3>
                            <div class="line mx-auto"></div>
                            <h4>Total Layanan</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Some Facts -->

        <!-- Start Benefits -->
        <section class="benefits" id="benefits">
            <div class="container text-center">
                <div class="heading">
                    <h2>Fitur <?php echo $data['short_title']; ?></h2>
                </div>
                <div class="line"></div>
                <div class="row">
                    <!-- BOX-1 -->
                    <div class="col-md-4 col-sm-6">
                        <div class="box mb-30">
                            <img src="assets/img/icons/plan.png" width="80" alt="benefits">
                            <h3>Layanan Terbaik</h3>
                            <p>Kami Menyediakan Berbagai Layanan Terbaik Untuk Kebutuhan Sosial Media & Pulsa/PPOB Untuk Anda.</p>

                        </div>
                    </div>
                    <!-- BOX-2 -->
                    <div class="col-md-4 col-sm-6">
                        <div class="box">
                            <img src="assets/img/icons/megaphone.png" width="80" alt="benefits">
                            <h3>Pelayanan Bantuan</h3>
                            <p>Kami Selalu Siap Membantu Jika Anda Membutuhkan Kami Dalam Penggunaan Layanan Kami.</p>

                        </div>
                    </div>
                    <!-- BOX-3 -->
                    <div class="col-md-4 col-sm-6">
                        <div class="box">
                            <img src="assets/img/icons/api.png" width="80" alt="benefits">
                            <h3>API Dokumentasi</h3>
                            <p>Tersedia API Beserta Dokumentasinya Untuk Reseller Anda.</p>

                        </div>
                    </div>
                    <!-- BOX-4 -->
                    <div class="col-md-4 col-sm-6">
                        <div class="box">
                            <img src="assets/img/icons/admin.png" width="80" alt="benefits">
                            <h3>Desain Web Responsive</h3>
                            <p>Kami Menggunakan Desain Website Yang Dapat Diakses Dari Berbagai Device, Baik Smartphone Android Maupun Desktop.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="box">
                            <img src="assets/img/icons/debit-card.png" width="80" alt="benefits">
                            <h3>Deposit Saldo</h3>
                            <p>Deposit Otomatis 24 Jam, Memudahkan Anda Deposit Kapan Saja.</p>

                        </div>
                    </div>
                    <!-- BOX-5 -->
                    <div class="col-md-4 col-sm-6">
                        <div class="box">
                            <img src="assets/img/icons/timeline.png" width="80" alt="benefits">
                            <h3>Kemudahan Pengguna</h3>
                            <p>Kami Menyediakan Fitur Yang Mudah Di Mengerti Oleh Para Pengguna.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Benifits -->

        

        <?php
        $cek_kontak = $conn->query("SELECT * FROM kontak_website ORDER BY id DESC");
        while ($data_kontak = $cek_kontak->fetch_assoc()) {
        ?>
        <!-- Start Contact Us -->
        <section class="contact" id="contact">
            <div class="container">
                <div class="heading text-center">
                    <h2>Info Kontak</h2>
                    <div class="line"></div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="title">
                            <h3>Hubungi Kami :</h3>
                            <p>Silahkan Hubungi Kami Jika Anda Butuh Bantuan</p>
                        </div>
                        <div class="content">
                            <!-- INFO-1 -->
                            <div class="info d-flex align-items-start">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <h4 class="d-inline-block">NOMOR WHATSAPP :
                                    <br>
                                    <a href="https://api.whatsapp.com/send?phone=<?php echo $data_kontak['no_wa']; ?>" target="_blank"><span><?php echo $data_kontak['no_wa']; ?></span></a></h4>
                            </div>
                            <!-- INFO-2 -->
                            <div class="info d-flex align-items-start">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <h4 class="d-inline-block">EMAIL :
                                    <br>
                                    <span><?php echo $data_kontak['email']; ?></span></h4>
                            </div>
                            <!-- INFO-3 -->
                            <div class="info d-flex align-items-start">
                                <i class="fa fa-street-view" aria-hidden="true"></i>
                                <h4 class="d-inline-block">ALAMAT :<br>
                                    <span><?php echo $data_kontak['alamat']; ?> <?php echo $data_kontak['kode_pos']; ?></span></h4>
                            </div>
                            <!-- INFO-4 -->
                            <div class="info d-flex align-items-start">
                                <i class="fa fa-street-view" aria-hidden="true"></i>
                                <h4 class="d-inline-block">JAM KERJA :<br>
                                    <span><?php echo $data_kontak['jam_kerja']; ?></span></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="Nama Lengkap">
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" placeholder="Subject">
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="5" id="comment" placeholder="Pesan"></textarea>
                            </div>
                            <button class="btn btn-block" type="submit">Kirim Sekarang</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Us -->
        <?php
        }
        ?>

        </div>
        <!-- End App -->

        <!-- Start Footer -->
        <footer class="footer">
            <div class="container text-center">
                <img src="<?php echo $config['web']['url'] ?>assets/media/logos/logo.png" style="width: 59px; height: 40;" alt="">
                <p>Copyright © 2021 <?php echo $data['short_title']; ?>. All Rights Reserved.</p>
            </div>
        </footer>
        <!-- End Footer -->

        <!-- Start Java Script -->
        <script src="assets/js/plugins/jquery-3.3.1.min.js"></script>
        <!-- End Java Script -->

        <!-- Start Bootstrap 4.1.3 -->
        <script src="assets/js/plugins/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- End Bootstrap 4.1.3 -->

        <!-- Start Slick Slider -->
        <script src="assets/js/plugins/slick.min.js"></script>
        <!-- End Slick Slider -->

        <!-- Start Couner Up -->
        <script src="assets/js/plugins/jquery.waypoints.min.js"></script>
        <script src="assets/js/plugins/jquery.counterup.min.js"></script>
        <!-- End Couner Up -->

        <!-- Start Wow JS -->
        <script src="assets/js/plugins/wow.min.js"></script>
        <!-- End Wow JS -->

        <!-- Start Magnific Popup -->
        <script src="assets/js/plugins/magnific-popup.min.js"></script>
        <!-- End Magnific Popup -->

        <!-- Start Main Js -->
        <script src="assets/js/main.js"></script>
        <!-- End Main Js -->
<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v7.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/id_ID/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your customer chat code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="108223444214539"
  theme_color="#fa3c4c"
  logged_in_greeting="Selamat datang di MediaMarket.id , Ada yang bisa kami bantu?"
  logged_out_greeting="Selamat datang di MediaMarket.id , Ada yang bisa kami bantu?">
      </div>
</body>

		<script src="https://unpkg.com/@cloudcmd/modal@1.1.0/dist/modal.min.js"></script>
		<script>
            const img = {
                href: '<?php echo $config['web']['url'] ?>dashboard/assets/img/promo.png',
                title: 'Image Title',
            };

            modal.open([img], {
                autoSize: true
            });

            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape')
                    modal.close();
            });
        </script>
        