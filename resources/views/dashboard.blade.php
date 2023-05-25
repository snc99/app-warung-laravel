@section('adminHeader')
    @include('adminHeader')
@show

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <img src="{{ url('/') }}/assets//img/logo.png" alt="">
                <span>App Warung</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#counts">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">Tabel Transaksi</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <li><a class="getstarted scrollto" href="logout">Logout</a></li>
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
            <div class="col-lg-12 col-md-12">
                <div class="container-fluid mt-4">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <header class="section-header">
                                <p>Daftar Transaksi</p>
                                <h2>Data Total Transaksi Pelanggan</h2>
                            </header>
                            <div class="table-responsive">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                            data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                            aria-selected="true">Pencatatan</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                            data-bs-target="#profile" type="button" role="tab"
                                            aria-controls="profile" aria-selected="false">Bayar</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="table-responsive">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel"
                                        aria-labelledby="home-tab">
                                        <div class="btn btn-primary mb-4 mt-4 tambah-pencatatan btn-sm" type="submit">
                                            Tambah
                                        </div>
                                        <table class="uk-table uk-table-hover uk-table-striped" id="pencatatan">
                                            <thead class="header">
                                                <tr>
                                                    {{-- <th>No</th> --}}
                                                    <th>Nama</th>
                                                    <th>Tanggal Transaksi</th>
                                                    <th>Total</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade mt-4" id="profile" role="tabpanel"
                                    aria-labelledby="profile-tab">
                                    <div class="btn btn-primary mb-4 mt-4 tambah-bayar btn-sm" type="submit">
                                        Tambah
                                    </div>
                                    <table class="uk-table uk-table-hover uk-table-striped" id="tagihan">
                                        <thead class="header">
                                            <tr>
                                                <th>Nama</th>
                                                <th>Total Transaksi</th>
                                                <th>Bayar</th>
                                                <th>Sisa</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section>
{{-- ===== Modal Pop-Up Pencatatan ===== --}}
<div class="modal fade" id="modalPencatatan" tabindex="-1" aria-labelledby="modalPencatatanLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalPencatatanLabel">Isi Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger d-none"></div>
                <div class="alert alert-success d-none"></div>
                <form>
                    @csrf
                    <div class="mb-3">
                        <label id="recipient-name" class="col-form-label">Nama :</label>
                        <input type="text"
                            class="form-control @error('nama')
                            is-invalid
                        @enderror"
                            id="nama">
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label id="recipient-name" class="col-form-label">Tanggal :</label>
                        <input type="text" class="form-control" id="tanggal" readonly>
                    </div>
                    <label for="exampleFormControlInput1" class="form-label">Bayar</label><br>
                        <div class="input-group mb-3">
                        <span class="input-group-text">Rp.</span>
                        <input type="text" class="form-control" id="total_transaksi">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary tombol-simpan btn-sm">Simpan</button>
            </div>
        </div>
    </div>
</div>
{{-- ===== Ahir Modal Pop-Up ===== --}}
</section>

{{-- ===== Modal Pop-Up Tagihan ===== --}}
<section>
<div class="modal fade" id="modalTagihan" tabindex="-1" aria-labelledby="modalTagihanLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTagihanLabel">Isi data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger d-none"></div>
                <div class="alert alert-success d-none"></div>
                <form>
                    <div class="mb-3">
                        <label for="nama1" class="col-form-label">Nama</label>
                        <select class="form-control form-select-solid" id="nama1" name="state" data-placeholder="Pilih Nama">
                            <option>Pilih Nama</option>
                            <option value="AL">Alabama</option>
                            <option value="ID">Indonesia</option>
                            <option value="AD">Adam</option>
                            <option value="WY">Wyoming</option>
                        </select>  
                    </div>
                    <div class="mb-3">
                        <label for="total_tagihan" class="col-form-label">Total Transaksi :</label>
                        <input type="text" class="form-control" id="total_tagihan">
                    </div>
                    <div class="mb-3">
                        <label for="bayar" class="col-form-label">Bayar :</label>
                        <input type="text" class="form-control" id="bayar">
                    </div>
                    <div class="mb-3">
                        <label for="sisa_tagihan" class="col-form-label">Sisa :</label>
                        <input type="text" class="form-control" id="sisa_tagihan">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary tombol-simpanTagihan">Simpan</button>
            </div>
        </div>
    </div>
</div>
</section>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
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
