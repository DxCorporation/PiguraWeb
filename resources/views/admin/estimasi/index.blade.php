@extends('admin.layout.index')

@section('content')
    <div class="swal" data-swal="{{ session('success') }}"></div>
    <div style="min-height: 80vh">
        {{-- <div class="card">
            <a href="{{ url('/admin/bahan-formula') }}" class="btn btn-success"> <i class="ti ti-edit"></i> Bahan /
                Formula</a>
        </div> --}}
        <div class="card">
            <div class="card-header">
                Hitung Estimasi
            </div>
            <form action="{{ url('/admin/estimasi/hasil') }}" method="post">
                @csrf
                <div class="card-body">

                    <div>
                        <p>
                            Menghitung Estimasi Jumlah Produk yang dapat diproduksi berdasarkan persediaan bahan <br>
                            Produk yang dihitung yaitu :
                        </p>
                        <div class="accordion col-6 mb-3" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseOne">
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
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseTwo">
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
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseThree">
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
                    <strong>Persediaan Bahan</strong><br>
                    <div class="mb-2">
                        <small class="mb-1">*Input jumlah persedian bahan yang tersedia</small>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 mb-2">
                            <label for=""><strong>Kayu</strong> (cm)</label>
                            <input type="number" name="kayu" class="form-control">
                        </div>
                        <div class="col-sm-4 mb-2">
                            <label for=""><strong>Triplek</strong> (cm<sup>2</sup>)</label>
                            <input type="number" name="triplek" class="form-control">
                        </div>
                        <div class="col-sm-4 mb-2">
                            <label for=""><strong>Kaca</strong> (cm<sup>2</sup>)</label>
                            <input type="number" name="kaca" class="form-control">
                        </div>
                    </div>
                    <div class="float-end mb-3">
                        <button type="submit" class="btn btn-primary px-3">Hitung</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <div class="modal fade" id="produk" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Bahan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>No</th>
                            <th>Produk</th>
                            <th class="text-center">Formula</th>
                        </tr>
                        @foreach ($formula as $item)
                            <tr>
                                <td><input type="checkbox" class="form-check-input mt-0" name="{{ $item->produk->nama }}"
                                        value="{{ $item->id }}"></td>
                                <td>{{ $item->produk->nama }}</td>
                                <td class="text-center">
                                    @foreach ($detail as $value)
                                        @if ($value->formula_id == $item->id)
                                            <input type="number" value="{{ $value->qty }}" disabled style="width: 50px">
                                            <span class="me-3">{{ $value->bahan->nama }}</span>
                                        @endif
                                    @endforeach
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>

            </div>
        </div>
    </div>


    @include('admin.estimasi.createBahan')
@endsection

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const swal = $('.swal').data('swal');
        if (swal) {
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Success',
                text: swal,
                showConfirmButton: false,
                timer: 2000
            })
        }
    </script>
@endpush
