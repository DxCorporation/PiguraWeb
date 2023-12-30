@extends('user.layout.layout')

@section('css')
    <link href="user/css/card.css" rel="stylesheet">
@endsection

@section('content')
    <?php
    
    function rupiah($angka)
    {
        if ($angka != null) {
            $hasil_rupiah = 'Rp ' . number_format($angka, 0, '.', '.');
            return $hasil_rupiah;
        }
    }
    
    ?>
    <main id="main">


        <!-- ======= Portfolio Section ======= -->
        <section id="produk" class="portfolio">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2 class="font">Produk Ridwan Pigura</h2>
                    <p>Kami Memberikan Sentuhan Elegan Pada Setiap Cerita</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            @foreach ($categories as $item)
                                <li data-filter=".{{ $item->slug }}">{{ $item->nama }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    @foreach ($data as $dat)
                        <div class="col-lg-3 col-md-6 portfolio-item {{ $dat->Category->slug }}">
                            <div class="card shadow p-card">
                                <img src="{{ asset('storage/back/' . $dat->img) }}" class="card-img-top-fix" alt="...">
                                <div class="card-body">
                                    <h6 class=""><?= $dat->nama ?></h6>
                                    <p class="card-text"></p>
                                    <strong class="harga">{{ rupiah($dat->harga) }}</strong>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>

            </div>

            </div>
        </section><!-- End Portfolio Section -->



    </main>
@endsection
