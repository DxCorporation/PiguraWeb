@extends('user.layout.hero')

@section('content')
    <section id="estimasi" class="portfolio">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2 class="font">Estimasi Produksi</h2>

            </div>

            <div class="card">
                <form action="{{ url('/estimasi') }}#estimasi" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="row justify-content-between mb-3">
                            <div class="col-sm-6 mb-4">
                                <div class="mb-3">
                                    <strong>
                                        Menghitung Estimasi Jumlah Produk yang dapat diproduksi berdasarkan persediaan
                                        bahan.
                                        Produk yang dihitung yaitu :
                                    </strong>
                                </div>
                                <div class="accordion mb-3 col-sm-10" id="accordionPanelsStayOpenExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne"
                                                aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                                                Pigura 6 R
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse">
                                            <div class="accordion-body">
                                                Bahan : 80cm Kayu + 300cm<sup>2</sup> + 320cm<sup>2</sup>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo"
                                                aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                                Pigura 8 R
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                            <div class="accordion-body">
                                                Bahan : 100cm Kayu + 500cm<sup>2</sup> + 520cm<sup>2</sup>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree"
                                                aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                                Pigura 10 Rs
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                            <div class="accordion-body">
                                                Bahan : 130cm Kayu + 875cm<sup>2</sup> + 900cm<sup>2</sup>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <strong>Persediaan Bahan</strong><br>
                                    <small class="mb-1">*Input jumlah persedian bahan yang tersedia</small>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label"><strong>Kayu</strong> (cm)</label>
                                    <div class="col-sm-9">
                                        <input type="number" value="{{ $kayu }}" name="kayu"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label"><strong>Triplek</strong> (cm<sup>2</sup>)</label>
                                    <div class="col-sm-9">
                                        <input type="number" value="{{ $triplek }}" name="triplek"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="mb-4 row">
                                    <label class="col-sm-3 col-form-label"><strong>Kaca</strong> (cm<sup>2</sup>)</label>
                                    <div class="col-sm-9">
                                        <input type="number" value="{{ $kaca }}" name="kaca"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="float-end mb-3">
                                    <button type="submit" class="btn btn-success px-3">Hitung</button>
                                </div>
                            </div>
                        </div>


                        @if ($p6r != null)
                            <div class="d-flex justify-content-center">
                                <div class="card col-sm-6">
                                    <div class="card-header">
                                        <h4>Hasil Perhitungan</h4>
                                    </div>
                                    <div class="card-body">
                                        <table class="table">
                                            <tr>
                                                <th>Pigura 6 R</th>
                                                <th>: {{ $p6r }}</th>
                                            </tr>
                                            <tr>
                                                <th>Pigura 8 R</th>
                                                <th>: {{ $p8r }}</th>
                                            </tr>
                                            <tr>
                                                <th>Pigura 10 R</th>
                                                <th>: {{ $p10rs }}</th>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
