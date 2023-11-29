@extends('admin.layout.index')

@section('content')
    <div class="swal" data-swal="{{ session('success') }}"></div>
    <div style="min-height: 80vh">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h3><a href="{{ url('/admin/estimasi') }}">Estimasi</a> / Bahan & Formula</h3>

        </div>
        <div class="row">
            <div class="col-sm-5">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4>Bahan</h4>
                        <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                            data-bs-target="#createBahan"><i class="ti ti-plus"></i> Tambah</button>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Nama Bahan</th>
                                <th class="text-center">Option</th>
                            </tr>
                            @foreach ($bahan as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <th class="text-center">
                                        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#hapusBahan{{ $item->id }}"><i
                                                class="ti ti-trash"></i></button>
                                    </th>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4>Formula</h4>
                        <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#createFormula"><i
                                class="ti ti-plus"></i> Tambah</button>
                    </div>
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.estimasi.createBahan')
    @include('admin.estimasi.createFormula')
    @include('admin.estimasi.hapus')
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
