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
    <br>
    <!-- Cars Update -->
    <div class="container">
        <!-- Button Back -->
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('cars.index') }}" class="btn btn-danger">
                    <i class="fas fa-arrow-left"></i> Back
                </a>
            </div>
        </div>
         <br><br>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    
                    <div class="card-header">
                        <h4 class="card-title">Edit Data Mobil</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('cars.update', $cars->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama Mobil</label>
                                        @if ($errors->has('car_name'))
                                        <div class="alert alert-danger" role="alert">
                                            {{ $errors->first('car_name') }}
                                        </div>
                                        @endif
                                        <input type="text" class="form-control" name="car_name" value="{{ $cars->car_name }}">
                                    </div>
                                </div>
                                <!-- Car_Type -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tipe Mobil</label>
                                        @if ($errors->has('car_type'))
                                        <div class="alert alert-danger" role="alert">
                                            {{ $errors->first('car_type') }}
                                        </div>
                                        @endif
                                        <input type="text" class="form-control" name="car_type" value="{{ $cars->car_type }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- Car_Transmisi -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Transmisi</label>
                                        @if ($errors->has('car_transmisi'))
                                        <div class="alert alert-danger" role="alert">
                                            {{ $errors->first('car_transmisi') }}
                                        </div>
                                        @endif
                                        <input type="text" class="form-control" name="car_transmisi" value="{{ $cars->car_transmisi }}">
                                    </div>
                                </div>
                               <!-- Car Fuel -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Bahan Bakar</label>
                                        @if ($errors->has('car_fuel'))
                                        <div class="alert alert-danger" role="alert">
                                            {{ $errors->first('car_fuel') }}
                                        </div>
                                        @endif
                                        <input type="text" class="form-control" name="car_fuel" value="{{ $cars->car_fuel }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- Car_Color -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Warna</label>
                                        @if ($errors->has('car_color'))
                                        <div class="alert alert-danger" role="alert">
                                            {{ $errors->first('car_color') }}
                                        </div>
                                        @endif
                                        <input type="text" class="form-control" name="car_color" value="{{ $cars->car_color }}">
                                    </div>
                                </div>
                                <!-- Car_Trunk_Volume -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Kapasitas Penumpang</label>
                                        @if ($errors->has('car_trunk_volume'))
                                        <div class="alert alert-danger" role="alert">
                                            {{ $errors->first('car_trunk_volume') }}
                                        </div>
                                        @endif
                                        <input type="integer" class="form-control" name="car_trunk_volume" value="{{ $cars->car_trunk_volume }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- Car_Facilities -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Fasilitas</label>
                                        @if ($errors->has('car_facilities'))
                                        <div class="alert alert-danger" role="alert">
                                            {{ $errors->first('car_facilities') }}
                                        </div>
                                        @endif
                                        <input type="text" class="form-control" name="car_facilities" value="{{ $cars->car_facilities }}">
                                    </div>
                                </div>
                                <!-- Car_Rent_Price -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Harga Sewa</label>
                                        @if ($errors->has('car_rent_price'))
                                        <div class="alert alert-danger" role="alert">
                                            {{ $errors->first('car_rent_price') }}
                                        </div>
                                        @endif
                                        <input type="integer" class="form-control" name="car_rent_price" value="{{ $cars->car_rent_price }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- Car_Asset_Category -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Kategori Aset</label>
                                        @if ($errors->has('car_asset_category'))
                                        <div class="alert alert-danger" role="alert">
                                            {{ $errors->first('car_asset_category') }}
                                        </div>
                                        @endif
                                        <input type="text" class="form-control" name="car_asset_category" value="{{ $cars->car_asset_category }}">
                                    </div>
                                </div>
                                <!-- No_Plat_Car -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Plat Nomor</label>
                                        @if ($errors->has('no_plat_car'))
                                        <div class="alert alert-danger" role="alert">
                                            {{ $errors->first('no_plat_car') }}
                                        </div>
                                        @endif
                                        <input type="text" class="form-control" name="no_plat_car" value="{{ $cars->no_plat_car }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- Car_Fuel_Volume -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Volume Bensin</label>
                                        @if ($errors->has('car_fuel_volume'))
                                        <div class="alert alert-danger" role="alert">
                                            {{ $errors->first('car_fuel_volume') }}
                                        </div>
                                        @endif
                                        <input type="text" class="form-control" name="car_fuel_volume" value="{{ $cars->car_fuel_volume }}">
                                    </div>
                                </div>
                                <!-- Car_Registration_Number -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nomor Registrasi</label>
                                        @if ($errors->has('car_registration_number'))
                                        <div class="alert alert-danger" role="alert">
                                            {{ $errors->first('car_registration_number') }}
                                        </div>
                                        @endif
                                        <input type="text" class="form-control" name="car_registration_number" value="{{ $cars->car_registration_number }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- Car_Contract_Start -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Mulai Kontrak</label>
                                        @if ($errors->has('car_contract_start'))
                                        <div class="alert alert-danger" role="alert">
                                            {{ $errors->first('car_contract_start') }}
                                        </div>
                                        @endif
                                        <input type="date" class="form-control" name="car_contract_start" value="{{ $cars->car_contract_start }}">
                                    </div>
                                </div>
                                <!-- Car_Contract_End -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Akhir Kontrak</label>
                                        @if ($errors->has('car_contract_end'))
                                        <div class="alert alert-danger" role="alert">
                                            {{ $errors->first('car_contract_end') }}
                                        </div>
                                        @endif
                                        <input type="date" class="form-control" name="car_contract_end" value="{{ $cars->car_contract_end }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- Car_Date_Service -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tanggal Service</label>
                                        @if ($errors->has('car_date_service'))
                                        <div class="alert alert-danger" role="alert">
                                            {{ $errors->first('car_date_service') }}
                                        </div>
                                        @endif
                                        <input type="date" class="form-control" name="car_date_service" value="{{ $cars->car_date_service }}">
                                    </div>
                                </div>
                                <!-- Car_Image -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Gambar</label>
                                        @if ($errors->has('car_image'))
                                        <div class="alert alert-danger" role="alert">
                                            {{ $errors->first('car_image') }}
                                        </div>
                                        @endif
                                        <input type="file" class="form-control" name="car_image" placeholder="car image" required>
                                    </div>
                                </div>
                            </div>
                            @if($cars->id_mitra != null)
                            <div class="row">
                                <!-- Car_Mitra_Id -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Mitra</label>
                                        @if ($errors->has('id_mitra'))
                                        <div class="alert alert-danger" role="alert">
                                            {{ $errors->first('id_mitra') }}
                                        </div>
                                        @endif
                                        
                                        <?php $findmitra = DB::table('mitras')->where('id', $cars->id_mitra)->get(); ?>
                                        <?php $mitras = DB::table('mitras')->get(); ?>
                                        <select class="form-control" name="id_mitra">
                                            @foreach($findmitra as $findmitra)
                                            <option value="{{ $cars->id_mitra }}">{{$findmitra->mitra_name }}</option>
                                            @endforeach
                                            @foreach($mitras as $mitra)
                                            <option value="{{ $mitra->id }}">{{ $mitra->mitra_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            @endif
                            <br><br>
    <!-- button update -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary"onclick="return confirm('Apakah Anda Yakin Akan mengupdate data Ini?')">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/material-dashboard.min.js?v=3.0.2"></script>
</body>

</html>
