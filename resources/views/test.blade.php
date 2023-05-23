<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>APP - Table</title>
    <meta content="" name="description">

    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ url('/') }}/assets/img/favicon.png" rel="icon">
    <link href="{{ url('/') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ url('/') }}/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ url('/') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ url('/') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ url('/') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ url('/') }}/assets/css/style.css" rel="stylesheet">
    <link href="{{ url('/') }}/assets/vendor/tables/custom/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />



    {{-- <link href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet"> --}}

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}



    <!-- =======================================================
  * Template Name: FlexStart - v1.12.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->


</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <img src="{{ url('/') }}/assets//img/logo.png" alt="">
                <span>FlexStart</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <li><a class="getstarted scrollto" href="#about">Logout</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <main id="main">
        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container mt-4" data-aos="fade-up">

                <div class="row gy-4">

                    <div class="col-lg-6 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-calculator" style="color: #eb5858;"></i>
                            <div>
                                <p>Total Hutang</p>
                                <span data-purecounter-start="0" data-purecounter-end="232"
                                    data-purecounter-duration="1" class="purecounter"></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext" style="color: #fde167;"></i>
                            <div>
                                <p>Sisa Pembayaran</p>
                                <span data-purecounter-start="0" data-purecounter-end="521"
                                    data-purecounter-duration="1" class="purecounter"></span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->

        <section id="counts" class="counts">
            <div class="container mt-4" data-aos="fade-up">
                {{-- <div class="row gy-4"> --}}
                <div class="col-lg-12 col-md-12">
                    <div class="container-fluid mt-4">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <header class="section-header">
                                    <p>Daftar Transaksi</p>
                                    <h2>Data Total Transaksi Pelanggan</h2>
                                </header>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">address</label>
                                    <select class="nama" id="nama" name="state">
                                        <option value="AL">Alabama</option>
                                        
                                        <option value="WY">Wyoming</option>
                                    </select>                                
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container mt-4" data-aos="fade-up">

                <header class="section-header">
                    <h2>Contact</h2>
                    <p>About & Contact</p>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Address<br>
                                <p>A108 Adam Street,<br>New York, NY 535022</p>
                            </h3>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-telephone"></i>
                            <h3>Call Us<br>
                                <p>08512345678,<br>088212345678</p>
                            </h3>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-clock"></i>
                            <h3>Open Hours<br>
                                <p>Monday - Friday<br>08:00 - 18:00</p>
                            </h3>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Counts Section -->
    </main><!-- End #main -->



    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Warung Bu Adi</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="https://irvan.tk/">By Irvan Sandy</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <!-- Vendor JS Files -->
    <script src="{{ '/' }}assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="{{ '/' }}assets/vendor/aos/aos.js"></script>
    <script src="{{ '/' }}assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ '/' }}assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ '/' }}assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ '/' }}assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ url('/') }}/assets/js/main.js"></script>

    {{-- script tabel  --}}
    <script src="{{ url('/') }}/assets/vendor/tables/custom/script.js"></script>

    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    


    {{-- <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script> --}}


    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
        crossorigin="anonymous"></script>

    {{-- <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script> --}}
    <script>
        $(document).ready(function() {
                $('#nama').select2();
            });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

</body>

</html>
