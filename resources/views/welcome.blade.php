@section('adminHeader')
    @include('adminHeader')
@show

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <img src="{{ url('/') }}/assets/img/logo.png" alt="">
                <span>App Warung</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#counts">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">Tabel Transaksi</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <li><a class="getstarted scrollto" href="login">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <section id="counts" class="counts">
        <div class="container mt-4" data-aos="fade-up">
            <div class="row gy-4">
                <div class="col-lg-6 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-cash"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Total Hutang</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-calculator" style="color: #ee6c20;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Hutang Belum Lunas</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about" class="counts">
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
                            {{-- <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.."
                                title="Type in a name"> --}}
                            <div class="table-responsive">
                                <table class="table table-hover" id="pencatatan">
                                    <thead class="header">
                                        <tr>
                                            <th>Name</th>
                                            <th>Total Transaksi</th>
                                            <th>Bayar</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <h2>Contact</h2>
                <p>Contact Us</p>
            </header>
            <section id="counts" class="counts">
                <div class="container mt-4" data-aos="fade-up">
                    <div class="row gy-4">
                        <div class="col-lg-4 col-md-4">
                            <div class="count-box">
                                <div>
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>Alamat</h3>
                                    <p>Jalan Sagong,<br>Mustika Jaya, Bekasi</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="count-box">
                                <div>
                                    <i class="bi bi-telephone"></i>
                                    <h3>Telepon</h3>
                                    <p>0882-1205-3377<br>0851-1256-3772</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="count-box">
                                <div>
                                    <i class="bi bi-clock"></i>
                                    <h3>Jam Oprasional</h3>
                                    <p>Senin - Sabtu<br>08:00AM - 06:00PM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <!-- End Contact Section -->
    <!-- End #main -->
    @section('footer')
        @include('footer')
    @show
