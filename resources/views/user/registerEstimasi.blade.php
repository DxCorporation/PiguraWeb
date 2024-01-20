@extends('user.layout.layout')

@section('content')
    <section id="estimasi" class="portfolio">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2 class="font">Form Register</h2>

            </div>
            <div class="alert alert-danger">
                *Harap mengisi form registrasi terlebih dahulu untuk melanjutkan
            </div>

            <div class="card p-3">
                <form action="{{ url('/register-estimasi') }}" method="post">
                    @csrf
                    <input type="hidden" name="kayu" value="{{ $kayu }}">
                    <input type="hidden" name="triplek" value="{{ $triplek }}">
                    <input type="hidden" name="kaca" value="{{ $kaca }}">
                    <div class="card-body">
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label"><strong>Nama</strong></label>
                            <div class="col-sm-10">
                                <input type="text" required name="name" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label"><strong>Umur</strong></label>
                            <div class="col-sm-10">
                                <input type="number" required name="umur" class="form-control">
                            </div>
                        </div>
                        <div class="mb-4 row">
                            <label class="col-sm-2 col-form-label"><strong>Alamat</strong></label>
                            <div class="col-sm-10">
                                <input type="text" required name="alamat" class="form-control">
                            </div>
                        </div>
                        <div class="float-end mb-3">
                            <button type="submit" class="btn btn-success px-3">Submit</button>
                        </div>

                </form>
            </div>

        </div>
    </section>
@endsection
