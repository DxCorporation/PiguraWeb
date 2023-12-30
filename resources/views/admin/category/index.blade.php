@extends('admin.layout.index')

@section('content')

    <div style="min-height:80vh;">
        <div class="swal" data-swal="{{ session('success') }}"></div>

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Kategori Produk</h1>

        </div>
        <button type="button" class="btn btn-success btn-sm mb-3" data-bs-toggle="modal" data-bs-target="#create"><i
                class="ti ti-plus"></i> Tambah</button>
        @if ($errors->any())
            <div class="my-3">
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Option</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->slug }}</td>
                            <td>{{ date('d M Y', strtotime($item->created_at)) }}</td>
                            <td>
                                <div class="text-center">
                                    <a data-bs-toggle="modal" data-bs-target="#edit{{ $item->id }}"
                                        class="btn btn-warning btn-sm" style="margin-right: 3px"><i class="ti ti-edit"></i>
                                        Edit</a>
                                    <a data-bs-toggle="modal" data-bs-target="#delete{{ $item->id }}"
                                        class="btn btn-danger btn-sm" style="margin-right: 3px"> <i class="ti ti-trash"></i>
                                        Hapus</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
    @include('admin.category.create')
    @include('admin.category.update_delete')

@endsection
