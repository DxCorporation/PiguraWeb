@extends('user.layout.layout')

@section('content')
    <main id="main">
        

                  <!-- ======= Why Us Section ======= -->
    <section id="services" class="why-us">
      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-7 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-stretch">

            <div class="content" data-aos="fade-up">
              <h3>Petunjuk Penggunaan <strong>Website Ridwan Pigura</strong></h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p>
            </div>

            <div class="accordion-list">
              <ul>
                <li data-aos="fade-up" data-aos-delay="100">
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Home <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      Halaman beranda situs web pigura menyajikan pengunjung dengan pengalaman yang menarik dan informatif. Dengan header yang mencakup logo dan menu navigasi, pengunjung dapat dengan mudah menjelajahi kategori produk. Banner menarik memberikan pernyataan nilai dan menawarkan tombol panggilan tindakan untuk mengarahkan mereka ke produk utama.
                    </p>
                  </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="200">
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Profile <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Menyajikan Sebuah informasi singkat tentang apa itu pigura dan juga tentang Ridwan Pigura
                    </p>
                  </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="300">
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Produk <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Berisikan Produk-Produk yang ditawaarkan oleh Ridwan Pigura
                    </p>
                  </div>
                </li>
                <li data-aos="fade-up" data-aos-delay="300">
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-4" class="collapsed"><span>04</span> Estimasi <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-4" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Menyajikan layanan estimasi menggunakan metode gauss jordan dengan mengisikan persediaan yang ada shingga didapat hasil dari estimasi
                    </p>
                  </div>
                </li>
                <li data-aos="fade-up" data-aos-delay="300">
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-5" class="collapsed"><span>05</span> Pengembang <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-5" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Bagian ini menyajikan team yang bekerja untuk menghasilkan website ini serta dosen pembimbing dari mata kuliah ini
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>
<br><br>
          <div class="col-lg-4 order-1 order-lg-2  " style='background-image: url("user/img/piguralogo.png");' data-aos="zoom-in">
            
          </div>
          

        </div>

      </div>
    </section><!-- End Why Us Section -->



           

    </main>
@endsection
