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
                    <div class="card-body">

                    </div>
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
