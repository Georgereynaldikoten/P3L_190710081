<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>ATMA JOGJA RENTAL </title>
    <link rel="shortcut icon" type="img/png" href="/img/LOGO.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.2" rel="stylesheet" />
    <style>
        .titlename {
            font-size: 20px;
            font-weight: bold;
            color: rgb(113, 169, 179);
        }

        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            padding-top: 100px;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

    </style>


</head>

<body>

    <!-- Navbar-->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <img src="{{ asset ('/img/LOGO.png') }}" width="45" height="45" class="d-inline-block align-top" alt="">
        <div class="titlename"><b>Atma Jogja Rental</b><a href=""></a></div>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link active" href="">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Profil</a>
                </li>

            </ul>

            <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Navbar -->
    <br><br>
    <!-- Create Transaction -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Create Transaction</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('transactions.store') }}" method="POST">
                            @csrf
                            <!--Get Auth Auth -->

                            <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">

                            <!-- Get All users data -->
                            <input type="hidden" name="id_car" value="{{ $cars->id }}">

                            <!-- Customer Name -->
                            <div class="form-group">
                                <label for="">Nama Pelanggan</label>
                                <input type="text" class="form-control" name="nama_pelanggan"
                                    value="{{ Auth::user()->name }}" readonly>
                            </div>
                            <br><br>

                            <!-- Car Name -->
                            <div class="form-group">
                                <label for="">Nama Mobil</label>
                                <input type="text" class="form-control" value="{{ $cars->car_name }}" readonly>
                            </div>
                            <br>
                            <!-- Detail Car -->
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModal" id="detailbtn">
                                Detail Mobil
                            </button>
                            <!-- The Modal -->
                            <div id="myModal" class="modal">

                                <!-- Modal content -->
                                <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <img src="{{ asset('storage/car/'.$cars->car_image) }}" alt="" class="img-fluid" width="3000px" height="90px">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Nama Mobil</label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $cars->car_name }}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Tipe Mobil</label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $cars->car_type }}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Transmisi Mobil</label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $cars->car_transmisi }}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Jenis Bahan Bakar</label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $cars->car_fuel }}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Warna Mobil</label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $cars->car_color }}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Kapasitas Penumpang</label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $cars->car_trunk_volume }}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Fasilitas</label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $cars->car_facilities }}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Kategori Aset</label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $cars->car_asset_category }}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Nomor Plat Mobil</label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $cars->no_plat_car }}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Volume Bahan Bakar</label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $cars->car_fuel_volume }}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Waktu Service</label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $cars->car_date_service }}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Nomor Registrasi</label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $cars->car_registration_number }}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Harga Sewa</label>
                                                    <input type="text" class="form-control"
                                                        value=" Rp {{ $cars->car_rent_price }}" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- End Detail Car -->
                            <br><br>
                            <!-- Select Driver -->
                            @if(count($drivers) > 0)
                            <div class="form-group">
                                <label for="">Pilih Driver</label>
                                <select name="id_driver" class="form-control border">
                                    @foreach($drivers as $driver)
                                    @if ($driver->available_status == 'tersedia')
                                    <option value="{{ $driver->id }}">{{ $driver->driver_name }}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                            @else
                            <div class="form-group">
                                <label for="">Pilih Driver</label>
                                <select name="id_driver" class="form-control border">
                                    <option value="">Tidak Ada Driver</option>
                                </select>
                            </div>
                            @endif

                            <br><br>
                            <!-- Select Date -->
                            <div class="form-group">
                                <label for="">Waktu Mulai Rental</label>
                                <input type="datetime-local" step="1" class="form-control" name="date_start_rental"
                                    value="{{ date('Y-m-d\H:M:S') }}" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="">Tanggal Selesai Rental</label>
                                <input type="datetime-local" class="form-control" name="date_end_rental" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="">Harga Rental (/hari)</label>
                                <input type="text" class="form-control" value="Rp {{ $cars->car_rent_price }}" readonly>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="">Metode Pembayaran</label>
                                <select name="status" id="" class="form-control border-success border">
                                    <option value="cash">Cash</option>
                                    <option value="credit">Credit</option>
                                </select>
                            </div>
                            <br>
                            <!-- Select Promo -->
                            <div class="form-group">
                                <label for="">Pilih Promo</label>
                                <select name="id_promo" class="form-control border">
                                    @foreach ($promos as $promo)
                                    <option value="{{ $promo->id }}">{{ $promo->promo_code }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <br>
                            <!-- Submit -->
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

                            <script>
                                // Get the modal
                                var modal = document.getElementById("myModal");

                                // Get the button that opens the modal
                                var btn = document.getElementById("detailbtn");

                                // Get the <span> element that closes the modal
                                var span = document.getElementsByClassName("close")[0];

                                // When the user clicks the button, open the modal 
                                btn.onclick = function () {
                                    modal.style.display = "block";
                                }

                                // When the user clicks on <span> (x), close the modal
                                span.onclick = function () {
                                    modal.style.display = "none";
                                }

                                // When the user clicks anywhere outside of the modal, close it
                                window.onclick = function (event) {
                                    if (event.target == modal) {
                                        modal.style.display = "none";
                                    }
                                }

                            </script>

                            <!-- Github buttons -->
                            <script async defer src="https://buttons.github.io/buttons.js"></script>
                            <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
                            <script src="../assets/js/material-dashboard.min.js?v=3.0.2"></script>
                            <!-- Material Dashboard DEMO methods, don't include it in your project! -->
                            <script src="../assets/demo/demo.js"></script>


</body>

</html>
