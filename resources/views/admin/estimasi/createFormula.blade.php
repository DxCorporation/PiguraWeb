<div class="modal fade" id="createFormula" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Formula</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('admin/formula/create') }}" method="post">
                <div class="modal-body">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Nama Produk</label>
                        <select name="produk_id" id=""
                            class="form-select @error('produk_id') is-invalid @enderror" required>
                            <option value="" hidden> -- Pilih -- </option>
                            @foreach ($produk as $item)
                                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                            @endforeach
                        </select>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">Bahan</label><br>
                        <small class="mb-1">*Input jumlah bahan yang digunakan untuk membuat produk yang telah dipilih
                            diatas,
                            kosongkan bila produk tidak menggunakan bahan yang ada pada daftar dibawah!</small>
                        <div class="row">
                            @foreach ($bahan as $item)
                                <div class="col-sm-4 mb-2">
                                    <input type="hidden" name="idBahan[{{ $item->id }}]"
                                        value="{{ $item->id }}">
                                    <label for="">{{ $item->nama }}</label>
                                    <input type="number" name="bahan[{{ $item->id }}]" class="form-control">
                                </div>
                            @endforeach

                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success btn-sm">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
