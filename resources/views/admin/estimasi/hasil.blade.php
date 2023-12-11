@extends('admin.layout.index')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <h4>Metode Gauss-Jordan</h4>
                <div class="col-sm-6">
                    <table class="table">
                        @foreach ($matrix7 as $key => $value)
                            <tr>
                                <td>{{ $matrix7[$key][0] }}</td>
                                <td>{{ $matrix7[$key][1] }}</td>
                                <td>{{ $matrix7[$key][2] }}</td>
                                <td>{{ $matrix7[$key][3] }}</td>
                            </tr>
                        @endforeach
                    </table>
                    <p>
                        <label for="">Pigura 6R = {{ $matrix7[0][3] }}</label><br>
                        <label for="">Pigura 8R = {{ $matrix7[1][3] }}</label><br>
                        <label for="">Pigura 10Rs = {{ $matrix7[2][3] }}</label><br>
                    </p>
                </div>
                <div class="accordion accordion-flush col-sm-6" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Detail Metode Gauss-Jordann
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                @foreach ($matrix as $item)
                                    <p>{{ $item }}</p>
                                @endforeach
                                <p>=========================</p>
                                @foreach ($matrix2 as $item)
                                    <p>{{ $item }}</p>
                                @endforeach
                                <p>=========================</p>
                                @foreach ($matrix3 as $item)
                                    <p>{{ $item }}</p>
                                @endforeach
                                <p>=========================</p>
                                @foreach ($matrix4 as $item)
                                    <p>{{ $item }}</p>
                                @endforeach
                                <p>=========================</p>
                                @foreach ($matrix5 as $item)
                                    <p>{{ $item }}</p>
                                @endforeach
                                <p>=========================</p>
                                @foreach ($matrix6 as $item)
                                    <p>{{ $item }}</p>
                                @endforeach
                                <p>=========================</p>
                                @foreach ($matrix7 as $item)
                                    <p>{{ $item }}</p>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>
                <hr>
                <h4>Metode Gauss</h4>
                <div class="col-sm-6">
                    <table class="table">
                        @foreach ($gauss as $key => $value)
                            <tr>
                                <td>{{ $gauss[$key][0] }}</td>
                                <td>{{ $gauss[$key][1] }}</td>
                                <td>{{ $gauss[$key][2] }}</td>
                                <td>{{ $gauss[$key][3] }}</td>
                            </tr>
                        @endforeach
                    </table>
                    <p>
                        <label for="">Pigura 6R = {{ $gauss6r }}</label><br>
                        <label for="">Pigura 8R =
                            {{ $gauss[1][3] - $gauss[1][2] * $gauss[2][3] }}</label><br>
                        <label for="">Pigura 10Rs = {{ $gauss[2][3] }}</label>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
