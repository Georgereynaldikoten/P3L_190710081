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
    <br>
    <!-- Create Mitras -->
    <div class="container table-bordered md-12">
        <!-- Button Back -->
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('mitras.index') }}" class="btn btn-danger">
                    <i class="fas fa-arrow-left"></i> Back
                </a>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">
                        <h4 class="card-title">Tambah Data Mitra</h4>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('mitras.store') }}" enctype="multipart/form-data">
                            @csrf

                            <!-- Mitra Name -->

                            <div class="form-group row ">
                                <label for="mitra_name"
                                    class="col-md-4 col-form-label text-md-right"><b>{{ __('Nama Mitra') }}</b></label>

                                <div class="col-md-6 border">
                                    <input id="mitra_name" type="text"
                                        class="form-control @error('mitra_name') is-invalid @enderror" name="mitra_name"
                                        value="{{ old('mitra_name') }}" placeholder="Masukan nama Mitra..." required
                                        autofocus>

                                    @error('mitra_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="mitra_address" class="col-md-4 col-form-label text-md-right">
                                    <b>{{ __('Alamat') }}</b>
                                </label>
                                <div class="col-md-6 border">
                                    <input id="mitra_address" type="mitra_address"
                                        class="form-control @error('mitra_address') is-invalid @enderror"
                                        name="mitra_address" placeholder="Masukan Alamat Mitra..." required>

                                    @error('mitra_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <!-- Mitra Phone Number-->
                            <div class="form-group row">
                                <label for="mitra_phone"
                                    class="col-md-4 col-form-label text-md-right"><b>{{ __('No. Telepon') }}</b></label>

                                <div class="col-md-6 border">
                                    <input id="mitra_phone" type="mitra_phone"
                                        class="form-control @error('mitra_phone') is-invalid @enderror"
                                        value="{{ old('mitra_address') }}" name="mitra_phone" placeholder="Masukan NomorTelpon" required
                                        autocomplete="mitra_phone" autofocus>

                                    @error('mitra_phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <!-- Mitra Identity Number -->
                            <div class="form-group row">
                                <label for="mitra_identity_number"
                                    class="col-md-4 col-form-label text-md-right"><b>{{ __('No. Identitas') }}</b></label>

                                <div class="col-md-6 border">
                                    <input id="mitra_identity_number" type="mitra_identity_number"
                                        class="form-control @error('mitra_identity_number') is-invalid @enderror"
                                        value="{{ old('mitra_identity_number') }}" name="mitra_identity_number" value="{{ old('mitra_identity_number') }}" required
                                        autocomplete="mitra_identity_number" placeholder="Masukan No KTP" autofocus>

                                    @error('mitra_identity_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <!-- Mitra car Option -->
                            <?php $cars = DB::table('cars')->get(); ?>
                            <div class="form-group row">
                                <label for="mitra_car_id"
                                    class="col-md-4 col-form-label text-md-right"><b>{{ __('Pilih Mobil Mitra') }}</b></label>

                                <div class="col-md-6 border font-bold">
                                    <select name="mitra_car_id" id="mitra_car_id"
                                        class="form-control @error('mitra_car_id') is-invalid @enderror">
                                        <option class=" text-center" value="">Pilih Mobil</option>
                                        @foreach($cars as $car)
                                        <option class=" text-center" value="{{ $car->id }}">{{ $car->car_name }}
                                        </option>
                                        @endforeach
                                    </select>

                                    @error('mitra_car_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- button Submit -->
                            <br><br>
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Tambah Mitra') }}
                                    </button>
                       
                        </form>
                    </div>
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
