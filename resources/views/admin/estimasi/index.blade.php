@extends('admin.layout.index')

@section('content')
    <div class="swal" data-swal="{{ session('success') }}"></div>
    <div style="min-height: 80vh">
        <div class="row">
            <div class="col-sm-8">
                <div class="card">
                    <a href="{{ url('/admin/bahan-formula') }}" class="btn btn-success"> <i class="ti ti-edit"></i> Bahan /
                        Formula</a>
                </div>
                <div class="card">
                    <div class="card-header">
                        Hitung Estimasi
                    </div>
                    <form action="{{ url('/admin/estimasi/hasil') }}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="d-flex justify-content-center">
                                {{-- <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#produk">Pilih
                                Produk</button> --}}
                            </div>
                            <strong>Pilih Produk</strong>
                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <th>No</th>
                                        <th>Produk</th>
                                        <th class="text-center">Formula</th>
                                    </tr>
                                    @foreach ($formula as $item)
                                        <tr>
                                            <td><input type="checkbox" class="form-check-input mt-0"
                                                    name="{{ $item->id }}" value="{{ $item->id }}"></td>
                                            <td>{{ $item->produk->nama }}</td>
                                            <td class="text-center">
                                                @foreach ($detail as $value)
                                                    @if ($value->formula_id == $item->id)
                                                        <input type="number" name="{{ $value->bahan->nama }}"
                                                            value="{{ $value->qty }}" disabled style="width: 50px">
                                                        <span class="me-3">{{ $value->bahan->nama }}</span>
                                                    @endif
                                                @endforeach
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                            <strong>Persediaan Bahan</strong><br>
                            <div class="mb-2">
                                <small class="mb-1">*Input jumlah persedian bahan yang tersedia</small>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 mb-2">
                                    <label for="">Kayu</label>
                                    <input type="number" name="kayu" class="form-control">
                                </div>
                                <div class="col-sm-4 mb-2">
                                    <label for="">Triplek</label>
                                    <input type="number" name="triplek" class="form-control">
                                </div>
                                <div class="col-sm-4 mb-2">
                                    <label for="">Kaca</label>
                                    <input type="number" name="kaca" class="form-control">
                                </div>
                            </div>
                            <div class="float-end mb-3">
                                <button type="submit" class="btn btn-primary px-3">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        Histori
                    </div>
                    <div class="card-body">

                    </div>
                </div>
            </div>
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
