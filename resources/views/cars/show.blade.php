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
        <div class="titlename"><b>Atma Jogja Rental</b>(Admin)<a href=""></a></div>

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
    <!-- End Navbar -->

    <!-- Show Car -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                            <i class="fas fa-car"></i>
                            {{ $cars->car_name }}
                        </h4>
                        <a href="{{ route('cars.index') }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-arrow-left"></i> Back
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <br><br><br><br>
                                <img src="{{ asset('storage/car/'.$cars->car_image) }}" alt="" class="img-fluid" width="3000px" height="90px">
                            </div>
                            <div class="col-md-6">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td>Nama</td>
                                            <td>{{ $cars->car_name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Tipe</td>
                                            <td>{{ $cars->car_type }}</td>
                                        </tr>
                                        <tr>
                                            <td>Transmisi</td>
                                            <td><p>{{ $cars->car_transmisi }} </p></td>
                                        </tr>
                                        <tr>
                                            <td>Jenis Bahan Bakar</td>
                                            <td><p>{{ $cars->car_fuel }} </p></td>
                                        </tr>
                                        <tr>
                                            <td>Warna</td>
                                            <td><p>{{ $cars->car_color }} </p></td>
                                        </tr>
                                        <tr>
                                            <td>Kapasitas Penumpang</td>
                                            <td><p>{{ $cars->car_trunk_volume }} Orang </p></td>
                                        </tr>
                                        <tr>
                                            <td>Fasilitas</td>
                                            <td><p>{{ $cars->car_facilities }} </p></td>
                                        </tr>
                                        <tr>
                                            <td>Kategori Aset</td>
                                            <td><p>{{ $cars->car_asset_category }} </p></td>
                                        </tr>
                                        <tr>
                                            <td>No Plat</td>
                                            <td><p>{{ $cars->no_plat_car }} </p></td>
                                        </tr>
                                        <tr>
                                            <td>Volume Bahan Bakar</td>
                                            <td><p>{{ $cars->car_fuel_volume }} liter</p></td>
                                        </tr>
                                        <tr>
                                            <td>Kategori Aset</td>
                                            <td><p>{{ $cars->car_asset_category }} </p></td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Service</td>
                                            <td><p>{{ $cars->car_date_service }} </p></td>
                                        </tr>
                                        @if(!is_null($cars->id_mitra ))
                                        <!-- find mitra name -->
                                        <?php
                                        $mitras = DB::table('mitras')->where('id', $cars->id_mitra)->first();
                                        ?>
                                        <tr>
                                            <td>Nama Mitra</td>
                                            <td><p>{{ $mitras->mitra_name }} </p></td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Mulai Kontrak </td>
                                            <td><p>{{ $cars->car_contract_start }} </p></td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Selesai Kontrak</td>
                                            <td><p>{{ $cars->car_contract_end }} </p></td>
                                        </tr>
                                        @endif
                                        <tr>
                                            <td>Price</td>
                                            <td><p>Rp {{ $cars->car_rent_price }} </p></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Show Car -->
    
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/material-dashboard.min.js?v=3.0.2"></script>
</body>

</html>
