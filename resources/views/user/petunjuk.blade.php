@extends('user.layout.layout')

@section('content')
    <main id="main">
        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Petunjuk Penggunaan</h2>
                </div>

                <div class="d-flex justify-content-center">
                    <div class="content pt-4 pt-lg-0 pl-0 pl-lg-3 col-sm-8">
                        <div class="frame-container image">
                            <img class="img-petunjuk" src="user/img/framelg.png" alt="">
                            <div class="text-img">
                                <p>
                                    Web ini dibuat sebagai Tugas Akhir Mata Kuliah Metode Numerik Universitas Janabadra
                                    Yogyakarta. <br>
                                    Fitur <strong>Estimasi</strong> digunakan untuk menghitung berapa jumlah produk
                                    yang dapat diproduksi berdasarkan jumlah persediaan yang dimiliki. Pengguna cukup
                                    menginputkan jumlah persediaan bahan lalu tekan tombol hitung. Perhitungan yang
                                    dilakukan
                                    menggunakan metode Eleminasi Gauss-Jordan
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Services Section -->

    </main>
@endsection
