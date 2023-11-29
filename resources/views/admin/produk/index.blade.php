@extends('admin.layout.index')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
@endpush

@section('content')
    <div class="swal" data-swal="{{ session('success') }}"></div>
    <div class="card">
        <a href="{{ url('/admin/produk/create') }}" class="btn btn-success"> <i class="ti ti-plus"></i> Tambah Produk</a>
    </div>
    <div class="card" style="min-height: 60vh">

        <div class="table-responsive p-2">
            <table class="table table-striped table-bordered" id="example">
                <thead>
                    <tr>
                        <th scope="col" width="5%">No</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Nama</th>
                        <th scope="col" class="text-center">Harga</th>
                        <th scope="col" class="text-center">Option</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('js')
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function deleteProduk(e) {
            let id = e.getAttribute('data-id');
            Swal.fire({
                title: 'Delete Produk',
                text: 'Are you sure?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                confirmButtonText: 'Delete',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: 'DELETE',
                        url: '/admin/produk/' + id,
                        dataType: "text",
                        success: function(response) {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'Success',
                                text: response.message,
                                showConfirmButton: false,
                                timer: 2000
                            }).then((result) => {
                                window.location.href = '/admin/produk'
                            })
                        },
                        error: function(xhr, ajaxOption, thrownError) {
                            alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError)
                        }
                    })
                }
            })
        }
    </script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                processing: true,
                serverside: true,
                ajax: '{{ url()->current() }}',
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'img',
                        name: 'img'
                    },
                    {
                        data: 'nama',
                        name: 'nama'
                    },
                    {
                        data: 'harga',
                        name: 'harga'
                    },
                    {
                        data: 'button',
                        name: 'button'
                    },
                ]
            });
        });
    </script>
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
