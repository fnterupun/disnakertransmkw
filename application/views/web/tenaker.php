<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?php echo $page->title ?> | <?php echo $page->site_title ?> </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>/assets/frontend/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url(); ?>/assets/frontend/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>/assets/frontend/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo base_url(); ?>/assets/frontend/favicon/site.webmanifest">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url(); ?>/assets/frontend/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/frontend/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/frontend/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/frontend/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/frontend/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/frontend/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url(); ?>/assets/frontend/assets/css/style.css" rel="stylesheet">

    <!-- Dropzone CSS -->
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

    <!-- Lightbox -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/lightbox-previewer/src/index.css" />
    <script src="<?php echo base_url(); ?>/assets/plugins/lightbox-previewer/dist/img-previewer.min.js"></script>

    <style>
        header#header {
            background: #283a5a !important;
        }

        section#pricing,
        section#contact {
            margin-top: 120px;
        }

        section#pricing .col-lg-12 {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        section#pricing .col-lg-12 .box {
            -webkit-box-shadow: 0px 3px 6px 0px rgb(0 0 0 / 10%), 0px 1px 3px 0px rgb(0 0 0 / 8%);
            box-shadow: 0px 3px 6px 0px rgb(0 0 0 / 10%), 0px 1px 3px 0px rgb(0 0 0 / 8%);
        }

        .contact .php-email-form {
            width: 100%;
            border-top: 0;
            border-bottom: 0;
            padding: 30px 0 0 0;
            background: #fff;
            box-shadow: none;
        }

        .why-us .accordion-list li {
            padding: 0;
            background: transparent;
            border-radius: 4px;
        }

        #skills .skills-content li {
            padding: 5px 1px !important;
            line-height: 1.8 !important;
        }

        section#visimisi {
            padding: 0;
            margin-top: 120px;
            padding-top: 60px;
        }

        section#why-us li {
            padding: 5px 0;
            line-height: 1.8;
            margin-top: 0;
        }

        .why-us .content p {
            color: #444444;
            font-size: 16px;
        }

        /* .dasarhukum {
            box-shadow: 0px 0 25px 0 rgb(0 0 0 / 10%);
            padding: 50px 30px;
            transition: all ease-in-out 0.4s;
            background: #fff;
        } */

        section {
            padding: 0;
            overflow: hidden;
        }

        .why-us .content {
            padding: 20px 10px 0 100px;
        }

        .why-us .accordion-list {
            padding: 0 100px 19px 100px;
        }

        .bpkt,
        .pkt {
            background-color: #fff;
        }

        ol li::marker {
            color: #47b2e4;
            font-weight: bold;
        }

        .skills .content h3 {
            font-weight: 400;
            font-size: 34px;
            color: #37517e;
        }

        .content h3 {
            font-weight: 400;
            font-size: 34px;
            color: #fff !important;
            background-color: #37517e;
            padding: 10px 20px;
            -webkit-clip-path: polygon(0% 0%, 95% 0, 100% 50%, 100% 100%, 0% 100%);
            clip-path: polygon(0% 0%, 95% 0, 100% 50%, 100% 100%, 0% 100%);
        }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="<?php echo site_url(); ?>">Disnakertrans Manokwari</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="<?php echo base_url(); ?>/assets/frontend/assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto <?php echo ($page->menu == 'beranda') ? 'active' : '' ?>" href="<?php echo site_url(); ?>">Beranda</a></li>
                    <li class="dropdown"><a class="<?php echo ($page->menu == 'profil') ? 'active' : '' ?>" href="<?php echo site_url(); ?>web/profil"><span>Profil</span></a></li>
                    <li class="dropdown"><a class="<?php echo ($page->menu == 'bidang') ? 'active' : '' ?>" href="#"><span>Bidang-Bidang</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="<?php echo site_url(); ?>web/transmigrasi">Bidang Transmigrasi</a></li>
                            <li><a href="<?php echo site_url(); ?>web/tenagakerja">Bidang Tenaga Kerja</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="<?php echo ($page->menu == 'informasi') ? 'active' : '' ?>" href="#"><span>Informasi</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="<?php echo site_url(); ?>web/berita">Berita</a></li>
                            <li><a href="<?php echo site_url(); ?>web/pengumuman">Pengumuman</a></li>
                            <li><a href="<?php echo site_url(); ?>web/pelatihan">Pelatihan</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="<?php echo ($page->menu == 'layanan') ? 'active' : '' ?>" href="#"><span>Layanan</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="<?php echo site_url(); ?>web/registrasi">Kartu Pencari Kerja (Kartu Kuning)</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto <?php echo ($page->menu == 'kontak') ? 'active' : '' ?>" href="#">Kontak</a></li>
                    <li><a target="_blank" class="getstarted scrollto" href="<?php echo site_url('dashboard'); ?>">Masuk</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main">
        <section id="visimisi" class="about mt-10">
            <div class="container">
                <div class="section-title">
                    <h2>Bidang Tenaga Kerja</h2>
                    <p>
                        Informasi mengenai dasar hukum, bidang-bidang, seksi-seksi, dan informasi lainnya terkait bidang tenaga kerja.
                    </p>
                </div>

               

            </div>
        </section>

        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills mt-5">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-5 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                        <!-- <img src="<?php echo base_url(); ?>/assets/frontend/assets/img/skills.png" class="img-fluid" alt=""> -->
                        <img class="img-fluid" src="https://img.freepik.com/premium-vector/law-firm-flat-vector-illustration-banner-template_128772-835.jpg?w=2000" alt="">
                    </div>
                    <div class="col-lg-7 pt-4 pt-lg-0 content dasarhukum" data-aos="fade-left" data-aos-delay="100">
                        <h3 class="mt-3">Dasar Hukum</h3>
                        <div class="skills-content">

                            <div class="col-lg-12 mb-2 mt-2">
                                <p>
                                    Dasar hukum dibentuknya bidang Tenaga Kerja adalah sebagai berikut:
                                </p>
                                <ol type="1">
                                    <li>Undang-Undang Cipta Kerja Nomor 11 Tahun 2020.</li>
                                    <li>Peraturan Menteri Ketenagakerjaan Nomor 28 Tahun 2014 tentang Pembuatan dan Pengesahan Peraturan Perusahaan, Pembuatan Dan Pendaftaran Perjanjian Kerja Bersama.</li>
                                    <li>Peraturan Bupati Manokwari Nomor 73 Tahun 2017 tentang Retribusi Perpanjangan Izin Mempekerjakan Tenaga Kerja Asing.</li>
                                    <li>Peraturan Bupati Nomor 13 Tahun 2017</li>
                                </ol>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End Skills Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us section-bg bp2kt">
            <div class="container-fluid" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-8 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                        <div class="content">
                            <h3 class="mt-3">Bidang Pelatihan dan Penempatan Angkatan Kerja
                            </h3>
                            <p>
                                Bidang Pelatihan dan Penempatan Tenaga Kerja mempunyai tugas:
                            </p>
                        </div>

                        <div class="accordion-list">

                            <ol type="1">
                                <li>Melakukan koordinasi perencanaan, pelaksanaan, pengendalian, bimbingan, konsultasi Bidang Pelatihan Kerja dan Penempatan Kerja;
                                </li>
                                <li>Merumuskan sasaran kegiatan di Bidang Pelatihan Kerja dan Penempatan Kerja;
                                </li>
                                <li>Melakukan pembinaan dan pengaturan perluasan lapangan kerja dan kesempatan kerja bagi tenaga kerja mandiri di pedesaan dan perkotaan; dan
                                    .</li>
                                <li>Melaksanakan tugas kedinasan lain sesuai perintah atasan.
                                </li>
                            </ol>
                        </div>

                    </div>
                    <div class="col-lg-4 align-items-stretch order-1 order-lg-2 img" style="background-image: url(https://img.freepik.com/premium-vector/architects-doing-building-plan_644411-3.jpg?w=2000);" data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
                </div>

            </div>
        </section><!-- End Why Us Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us section-bg bpkt">
            <div class="container-fluid" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-4 align-items-stretch img" style="background-image: url(https://opensourcedworkplace.com/wp-content/uploads/2021/08/27279797news_employee_relations_background_and_featured_image-3-1024x535.png);" data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>

                    <div class="col-lg-8 d-flex flex-column justify-content-center align-items-stretch ">

                        <div class="content">
                            <h3 class="mt-3">Bidang Hubungan Industri dan Syarat-Syarat Kerja</h3>
                            <p>
                                Bidang Hubungan Industri dan Syarat-Syarat Kerja mempunyai tugas:
                            </p>
                        </div>

                        <div class="accordion-list">

                            <ol type="1">
                                <li>Melakukan koordinasi perencanaan, pelaksanaan, pengendalian, bimbingan, konsultasi serta monitoring dan evaluasi di Bidang Hubungan Industrial dan Pembinaan Ketenagakerjaan;
                                </li>
                                <li>Merumuskan sasaran kegiatan di Bidang Hubungan Industrial dan Pembinaan Ketenagakerjaan;
                                </li>
                                <li>Melakukan kajian di Bidang Hubungan Industrial dan Pembinaan Ketenaga kerjaan;
                                    .</li>
                                <li>Melakukan fasilitasi dan pengembangan hubungan industrial dan pembinaan ketenagakerjaan;
                                <li>Melaksanakan tugas kedinasan lain sesuai perintah atasan.
                                </li>
                            </ol>
                        </div>

                    </div>


                </div>

            </div>
        </section><!-- End Why Us Section -->
 <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3> UNTUK PERBUP  RESTRIBUSI IMTA TELAH BERGANTI NAMA MENJADI RPTKA SESUAI PERATURAN PEMERINTAH NOMOR 34 TAHUN 2021, DAN UNTUK PERATURAN DAERAH MASIH DIBAHAS OLEH BALEGDA TINGKAT PROVINSI PAPUA BARAT  </h3>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us section-bg">
            <div class="container-fluid" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-8 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                        <div class="content">
                            <h3 class="mt-3"> Data Pekerja Asing</h3>

                            <p>
                                Pekerja asing tahun 2022 adalah sebagai berikut:
                            </p>
                        </div>

                        <div class="accordion-list">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Perusahan</th>
                                        <th scope="col">Keerangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>65 orang</td>
                                        <td>Engineer</td>
                                        <td>PT. SDIC PAPUA CEMENT INDONESIA</td>
                                        <td>PERIODE JUNI 2022</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>22 Orang</td>
                                        <td>Penyuluh Rohani</td>
                                        <td>MAJELIS UMUM/SINODE GPKAI</td>
                                        <td>PERIODE JUNI 2022</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                    <div class="col-lg-4 align-items-stretch order-1 order-lg-2 img" style='background-image: url("<?php echo base_url(); ?>/assets/frontend/assets/img/pekerjaasing.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
                </div>

            </div>
        </section><!-- End Why Us Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">

                <div class="section-title mt-4">
                    <h2>Galeri</h2>
                    <p>Berikut ini adalah beberapa galeri kegiatan bidang transmigrasi.</p>
                </div>

                <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <li data-filter="*" class="filter-active">Semua</li>
                    <li data-filter=".pelatihankerja">Pelatihan Kerja</li>
                    <li data-filter=".bantuan">Bantuan</li>
                </ul>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item pelatihankerja">
                        <div class="portfolio-img">
                            <a class="lsb-preview" href="#">
                                <img src="<?php echo base_url(); ?>/assets/frontend/assets/img/tenagakerja/Picture1.png" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item pelatihankerja">
                        <a class="lsb-preview" href="#">
                            <div class="portfolio-img"><img src="<?php echo base_url(); ?>assets/frontend/assets/img/tenagakerja/Picture2.png" class="img-fluid"></div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item pelatihankerja">
                        <a class="lsb-preview" href="#">
                            <div class="portfolio-img"><img src="<?php echo base_url(); ?>assets/frontend/assets/img/tenagakerja/Picture6.png" class="img-fluid"></div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item pelatihankerja">
                        <a class="lsb-preview" href="#">
                            <div class="portfolio-img"><img src="<?php echo base_url(); ?>assets/frontend/assets/img/tenagakerja/Picture7.png" class="img-fluid"></div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item pelatihankerja">
                        <a class="lsb-preview" href="#">
                            <div class="portfolio-img"><img src="<?php echo base_url(); ?>assets/frontend/assets/img/tenagakerja/Picture8.png" class="img-fluid"></div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item bantuan">
                        <a class="lsb-preview" href="#">
                            <div class="portfolio-img"><img src="<?php echo base_url(); ?>assets/frontend/assets/img/tenagakerja/Picture3.png" class="img-fluid"></div>
                        </a>
                    </div>


                    <div class="col-lg-4 col-md-6 portfolio-item pelatihankerja">
                        <div class="portfolio-img"><img src="<?php echo base_url(); ?>assets/frontend/assets/img/tenagakerja/Picture1.png" class="img-fluid" alt=""></div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item bantuan">
                        <div class="portfolio-img"><img src="<?php echo base_url(); ?>assets/frontend/assets/img/tenagakerja/Picture4.png" class="img-fluid" alt=""></div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item bantuan">
                        <div class="portfolio-img"><img src="<?php echo base_url(); ?>assets/frontend/assets/img/tenagakerja/Picture5.png" class="img-fluid" alt=""></div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Disnakertrans Manokwari</h3>
                        <p>
                            Jl. Percetakan Negara<br>
                            Kel. Sanggeng, Kec. Manokwari Barat<br>
                            Kab. Manokwari, Prov. Papua Barat <br><br>
                            <strong>Telp:</strong> 0986-211934, 0986-211738<br>
                            <strong>Email:</strong> info@disnakertransmkw.com<br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Informasi</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Berita</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Pengumuman</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Pelatihan</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Link Terkait</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a target="_blank" href="https://kemnaker.go.id/">Kemenaker</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a target="_blank" href="https://papuabaratprov.go.id/">Provinsi Papua Barat</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a target="_blank" href="https://disnakertrans.papuabaratprov.go.id/">Disnakertrans Papua Barat</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a target="_blank" href="https://www.manokwarikab.go.id">Pemkab. Manokwari</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Lebih Dekat Dengan Kami</h4>
                        <p>Tetap dekat dan mendapat informasi-informasi terbaru dari kami melalui media sosial kami</p>
                        <div class="social-links mt-3">
                            <a target="_blank" href="https://facebook.com" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a target="_blank" href="https://twitter.com" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a target="_blank" href="https://instagram.com" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a target="_blank" href="https://youtube.com" class="youtube"><i class="bx bxl-youtube"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                Copyright &copy; 2022 <strong><span>Disnakertrans Manokwari</span></strong>
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
                Designed by <a href="https://manokwariweb.com/">ManokwariWeb</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <!-- Dropzone JS -->
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>


    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?php echo base_url(); ?>/assets/frontend/assets/vendor/aos/aos.js"></script>
    <script src="<?php echo base_url(); ?>/assets/frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/frontend/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/frontend/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/frontend/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="<?php echo base_url(); ?>/assets/frontend/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo base_url(); ?>/assets/frontend/assets/js/main.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>

    <script>
        $('.collapse').collapse()
    </script>

    <script type="text/javascript">
        var myLink = document.querySelector('a[href="#"]');
        myLink.addEventListener("click", function(e) {
            e.preventDefault();
        });
    </script>

    <script>
        const myViewer = new ImgPreviewer('.lsb-preview');
    </script>
</body>

</html>