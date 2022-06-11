<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Create New car</title>
    <link rel="shortcut icon" type="img/png" href="/img/LOGO.png">

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="../assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../assets/css/main.css" rel="stylesheet" media="all">
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
    <link id="pagestyle" href="../assets/css/material-dashboard1.css?v=3.0.2" rel="stylesheet" />



    <style>
        .titlename {
            font-size: 20px;
            font-weight: bold;
            color: rgb(113, 169, 179);
        }

    </style>

</head>
<!-- Navbar-->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
        aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <img src="{{ asset ('/img/LOGO.png') }}" width="45" height="45" class="d-inline-block align-top" alt="">
    <div class="titlename"><b>Atma Jogja Rental</b>(Admin)<a href=""></a>
    </div>
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
                 <a class="nav-link btn btn-danger" href="{{ route('logout') }}">Logout</a>
             </li>
        </ul>

    </div>
</nav>
<!-- End Navbar-->

<body>
    <div class="page-wrapper bg-gra-02 p-t-40 p-b-100 font-poppins">
        <div class="wrapper wrapper--w1400">
            <div class="card card-3">
                <div class="card-body">
                    <button><a href="{{ route('cars.index') }}" class="btn btn-primary">Back</a></button>
                    <h2 class="title">Create New Car</h2>
                    <form action="{{ route('cars.store') }}" method="post" enctype='multipart/form-data'>
                        @csrf
                        <div class="row row-space">
                            <!-- Car Name -->
                            <div class="col-4">
                                <div class="input-group">
                                    <label class="label">Nama Mobil</label>
                                    @if ($errors->has('car_name'))
                                    <span class="text-danger text-left">{{ $errors->first('car_name') }}</span>
                                    @endif
                                    <input class="form-control input--style-4" type="text" name="car_name" id="car_name"
                                        placeholder="car name" required>
                                </div>
                            </div>
                            <!-- Car Type -->
                            <div class="col-4">
                                <div class="input-group">
                                    <label class="label">Tipe Mobil</label>
                                    @if ($errors->has('car_type'))
                                    <span class="text-danger text-left">{{ $errors->first('car_type') }}</span>
                                    @endif
                                    <input class="form-control input--style-4" type="text" name="car_type" id="car_type"
                                        placeholder="car type" required>
                                </div>
                            </div>
                            <!-- Car Transmision -->
                            <div class="col-4">
                                <div class="input-group">
                                    <label class="label">Transmisi</label>
                                    @if ($errors->has('car_transmisi'))
                                    <span class="text-danger text-left">{{ $errors->first('car_transmisi') }}</span>
                                    @endif
                                    <input class="form-control input--style-4" type="text" name="car_transmisi"
                                        id="car_transmisi" placeholder="car transmisi" required>
                                </div>
                            </div>
                        </div>

                        <div class="row row-space">
                            <!-- Car Fuel  -->
                            <div class="col-4">
                                <div class="input-group">
                                    <label class="label">Bahan Bakar</label>
                                    @if ($errors->has('car_fuel'))
                                    <span class="text-danger text-left">{{ $errors->first('car_fuel') }}</span>
                                    @endif
                                    <input class="form-control input--style-4" type="text" name="car_fuel" id="car_fuel"
                                        placeholder="car fuel" required>
                                </div>
                            </div>
                            <!-- Car Color -->
                            <div class="col-4">
                                <div class="input-group">
                                    <label class="label">Warna</label>
                                    @if ($errors->has('car_color'))
                                    <span class="text-danger text-left">{{ $errors->first('car_color') }}</span>
                                    @endif
                                    <input class="form-control input--style-4" type="text" name="car_color"
                                        id="car_color" placeholder="car color" required>
                                </div>
                            </div>
                            <!-- Car Trunk Volume -->
                            <div class="col-4">
                                <div class="input-group">
                                    <label class="label">Kapasitas Penumpang</label>
                                    @if ($errors->has('car_trunk_volume'))
                                    <span class="text-danger text-left">{{ $errors->first('car_trunk_volume') }}</span>
                                    @endif
                                    <input class="form-control input--style-4" type="integer" name="car_trunk_volume"
                                        id="car_trunk_volume" placeholder="car trunk volume" required>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <!-- Car Facilities -->
                            <div class="col-4">
                                <div class="input-group">
                                    <label class="label">Fasilitas</label>
                                    @if ($errors->has('car_facilities'))
                                    <span class="text-danger text-left">{{ $errors->first('car_facilities') }}</span>
                                    @endif
                                    <input class="form-control input--style-4" type="text" name="car_facilities"
                                        id="car_facilities" placeholder="car facilities" required>
                                </div>
                            </div>
                            <!-- Car Rent Price -->
                            <div class="col-4">
                                <div class="input-group">
                                    <label class="label">Harga Sewa</label>
                                    @if ($errors->has('car_rent_price'))
                                    <span class="text-danger text-left">{{ $errors->first('car_rent_price') }}</span>
                                    @endif
                                    <input class="form-control input--style-4" type="integer" name="car_rent_price"
                                        id="car_rent_price" placeholder="car rent price" required>
                                </div>
                            </div>
                            <!-- Car Asset Category -->
                            <div class="col-4">
                                <div class="input-group">
                                    <label class="label">Kategori Aset</label>
                                    @if ($errors->has('car_asset_category'))
                                    <span
                                        class="text-danger text-left">{{ $errors->first('car_asset_category') }}</span>
                                    @endif
                                    <input class="form-control input--style-4" type="text" name="car_asset_category"
                                        id="car_asset_category" placeholder="car asset category" required>
                                </div>
                            </div>
                        </div>

                        <div class="row row-space">
                            <!-- No Plat Car -->
                            <div class="col-4">
                                <div class="input-group">
                                    <label class="label">No Plat</label>
                                    @if ($errors->has('no_plat_car'))
                                    <span class="text-danger text-left">{{ $errors->first('no_plat_car') }}</span>
                                    @endif
                                    <input class="form-control input--style-4" type="text" name="no_plat_car"
                                        id="no_plat_car" placeholder="car no plat" required>
                                </div>
                            </div>
                            <!-- Car Fuel Volume  -->
                            <div class="col-4">
                                <div class="input-group">
                                    <label class="label">Kap. Bahan Bakar</label>
                                    @if ($errors->has('car_fuel_volume'))
                                    <span class="text-danger text-left">{{ $errors->first('car_fuel_volume') }}</span>
                                    @endif
                                    <input class="form-control input--style-4" type="text" name="car_fuel_volume"
                                        id="car_fuel_volume" placeholder="car fuel volume" required>
                                </div>
                            </div>
                            <!-- Car Registration Number -->
                            <div class="col-4">
                                <div class="input-group">
                                    <label class="label">No Registrasi</label>
                                    @if ($errors->has('car_registration_number'))
                                    <span
                                        class="text-danger text-left">{{ $errors->first('car_registration_number') }}</span>
                                    @endif
                                    <input class="form-control input--style-4" type="text"
                                        name="car_registration_number" id="car_registration_number"
                                        placeholder="car registration number" required>
                                </div>
                            </div>
                        </div>

                        <div class="row row-space">
                            <!-- Car Contract Start -->
                            <div class="col-4">
                                <div class="input-group">
                                    <label class="label">Mulai Kontrak</label>
                                    @if ($errors->has('car_contract_start'))
                                    <span
                                        class="text-danger text-left">{{ $errors->first('car_contract_start') }}</span>
                                    @endif
                                    <input class="form-control input--style-4" type="date" name="car_contract_start"
                                        id="car_contract_start" placeholder="car contract start">
                                </div>
                            </div>
                            <!-- Car Contract End -->
                            <div class="col-4">
                                <div class="input-group">
                                    <label class="label">Akhir Kontrak</label>
                                    @if ($errors->has('car_contract_end'))
                                    <span class="text-danger text-left">{{ $errors->first('car_contract_end') }}</span>
                                    @endif
                                    <input class="form-control input--style-4" type="date" name="car_contract_end"
                                        id="car_contract_end" placeholder="car contract end">
                                </div>
                            </div>
                            <!-- Car Date Service -->
                            <div class="col-4">
                                <div class="input-group">
                                    <label class="label">T.Service</label>
                                    @if ($errors->has('car_date_service'))
                                    <span class="text-danger text-left">{{ $errors->first('car_date_service') }}</span>
                                    @endif
                                    <input class="form-control input--style-4" type="date" name="car_date_service"
                                        id="car_date_service" placeholder="car date service" required>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <!-- Car Image -->
                            <div class="col-5">
                                <div class="input-group">
                                    <label class="label">Foto mobil</label>
                                    @if ($errors->has('car_image'))
                                    <span class="text-danger text-left">{{ $errors->first('car_image') }}</span>
                                    @endif
                                    <input class="form-control input--style-4" type="file" name="car_image"
                                        id="car_image" placeholder="car image" required>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-info">Tambah</button>

                    </form>
                </div>
            </div>
        </div>
    </div>



    <!-- Jquery JS-->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="../assets/vendor/select2/select2.min.js"></script>
    <script src="../assets/vendor/datepicker/moment.min.js"></script>
    <script src="../assets/vendor/datepicker/daterangepicker.js"></script>
    <!-- Main JS-->
    <script src="../assets/vendor/global.js"></script>

</body>

</html>
