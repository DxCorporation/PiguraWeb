@extends('admin.layout.index')

@section('content')
    <div style="min-height: 80vh">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h3><a href="{{ url('/admin/produk') }}">Produk</a> / Tambah</h3>

        </div>

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

        <form action="{{ url('admin/produk') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Produk</label>
                <input type="text" name="nama" class="form-control" value="{{ old('nama') }}" required>
            </div>
            <div class="mb-3">
                <label for="img" class="form-label">Image</label>
                <input name="img" class="form-control mb-2" type="file" id="img" required
                    accept=".jpg, .jpeg, .png, .webp">
                <img src="" class="img-thumbnail img-preview" width="100px">
            </div>
            <div class="mb-3">
                <label for="myeditor" class="form-label">Description</label>
                <textarea name="desc" id="myeditor" class="form-control">{{ old('desc') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input name="harga" type="number" class="form-control" type="date" id="harga" required>
            </div>
            <div class="float-end">
                <button type="submit" class="btn btn-primary px-3">Simpan</button>
            </div>
        </form>
    </div>
    <br><br>
@endsection

@push('js')
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token',
            clipboard_hadleImage: false
        }
    </script>
    <script>
        CKEDITOR.replace('myeditor', options);
    </script>
    <script>
        $('#img').change(function() {
            previewImage(this)
        })

        function previewImage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader()

                reader.onload = function(e) {
                    $('.img-preview').attr('src', e.target.result)
                }
                reader.readAsDataURL(input.files[0])
            }
        }
    </script>
@endpush
