@extends('user.layout.hero')

@section('content')
    <main id="main">
        <!-- ======= Estimasi Section ======= -->

        <!-- ======= Estimasi endSection ======= -->



        <!-- ======= Portfolio Section ======= -->
        <section id="produk" class="portfolio">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2 class="font">Produk Pigura Store</h2>
                    <p>Kami Memberikan Sentuhan Elegan Pada Setiap Cerita</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-card">Card</li>
                            <li data-filter=".filter-web">Web</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    @foreach ($data as $dat)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('storage/back/' . $dat->img) }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4><?= $dat->nama ?></h4>

                                    <div class="portfolio-links">
                                        <a href="{{ asset('storage/back/' . $dat->img) }}" data-gallery="portfolioGallery"
                                            class="portfolio-lightbox" title="<?= $dat->nama ?>"><i
                                                class="bx bx-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach



                </div>

            </div>
        </section><!-- End Portfolio Section -->


    </main>
@endsection
