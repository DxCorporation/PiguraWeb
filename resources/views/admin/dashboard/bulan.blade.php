@extends('admin.layout.index')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
@endpush

@section('content')
    <div class="row">
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5>Hari Ini</h5>
                    <span class="views">{{ $pToday }} </span>
                    <span> Views</span>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5>Minggu Ini</h5>
                    <span class="views">{{ $pWeek }} </span>
                    <span> Views</span>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5>Bulan Ini</h5>
                    <span class="views">{{ $pMonth }} </span>
                    <span> Views</span>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5>Total Produk</h5>
                    <span class="views">{{ $totalProduk }} </span>
                    <span> Produk</span>
                </div>
            </div>
        </div>
    </div>
    <div class="card w-100">
        <div class="card-body">
            <div class="d-flex justify-content-between mb-9">
                <div class="mb-3 mb-sm-0">
                    <h5 class="card-title fw-semibold">Jumlah Pengunjung</h5>
                </div>
                <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Option
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ url('admin/dashboard') }}">Mingguan</a></li>
                        <li><a class="dropdown-item" href="{{ url('admin/dashboard/bulan') }}">Bulanan</a></li>
                        <li><a class="dropdown-item" href="{{ url('admin/dashboard/tahun') }}">Tahunan</a></li>
                    </ul>
                </div>
            </div>
            <div id="chart"></div>
        </div>
    </div>
    </div>
@endsection

@push('js')
    <script>
        $(function() {


            // =====================================
            // Profit
            // =====================================
            var chart = {
                series: [{
                    name: "Earnings this month:",
                    data: {!! json_encode($dataWeek) !!},
                }, ],

                chart: {
                    type: "bar",
                    height: 345,
                    offsetX: -15,
                    toolbar: {
                        show: true
                    },
                    foreColor: "#adb0bb",
                    fontFamily: 'inherit',
                    sparkline: {
                        enabled: false
                    },
                },


                colors: ["#5D87FF"],


                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: "35%",
                        borderRadius: [6],
                        borderRadiusApplication: 'end',
                        borderRadiusWhenStacked: 'all'
                    },
                },
                markers: {
                    size: 0
                },

                dataLabels: {
                    enabled: false,
                },


                legend: {
                    show: false,
                },


                grid: {
                    borderColor: "rgba(0,0,0,0.1)",
                    strokeDashArray: 3,
                    xaxis: {
                        lines: {
                            show: false,
                        },
                    },
                },

                xaxis: {
                    type: "category",
                    categories: {!! json_encode($labelWeek) !!},
                    labels: {
                        style: {
                            cssClass: "grey--text lighten-2--text fill-color"
                        },
                    },
                },


                yaxis: {
                    show: true,
                    min: 0,
                    tickAmount: 4,
                    labels: {
                        style: {
                            cssClass: "grey--text lighten-2--text fill-color",
                        },
                    },
                },
                stroke: {
                    show: true,
                    width: 3,
                    lineCap: "butt",
                    colors: ["transparent"],
                },


                tooltip: {
                    theme: "light"
                },

                responsive: [{
                    breakpoint: 600,
                    options: {
                        plotOptions: {
                            bar: {
                                borderRadius: 3,
                            }
                        },
                    }
                }]


            };

            var chart = new ApexCharts(document.querySelector("#chart"), chart);
            chart.render();



        })
    </script>
    <script src="{{ asset('assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
@endpush
