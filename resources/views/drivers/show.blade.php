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
    <br>
    <!-- Profil Driver -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <!-- Button Back -->
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="{{ route('drivers.index') }}" class="btn btn-primary">
                                    <i class="fas fa-arrow-left"></i> Back
                                </a>
                            </div>
                        </div>
                        <div class="card-header">
                            <h3 class="card-title">Profil Driver</h3>
                        </div>
                        <!-- Show Foto Profil -->
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{ asset('storage/driver_profile_picture/'.$drivers->driver_profile_picture) }}"
                                        width="200" height="200" class="rounded-circle" alt="">
                                </div>
                            </div>
                            <br><br>
                            <?php $users = DB::table('users')->where('id', $drivers->id_user)->first(); ?>
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Nama Driver</label>
                                        <input type="text" class="form-control" value="{{ $drivers->driver_name }}"
                                            readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">No. HP</label>
                                        <input type="text" class="form-control"
                                            value="{{ $drivers->driver_phone_number }}" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="text" class="form-control" value="{{ $users->email }}"
                                            readonly>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Alamat</label>
                                        <input type="text" class="form-control" value="{{ $drivers->driver_address }}"
                                            readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Tanggal Lahir</label>
                                        <input type="text" class="form-control"
                                            value="{{ $drivers->driver_birth_date }}" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Jenis Kelamin</label>
                                        <input type="text" class="form-control" value="{{ $drivers->driver_gender }}"
                                            readonly>
                                    </div>
                                </div>
                            </div>
                            <br><br>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Bahasa</label>
                                        <input type="text" class="form-control" value="{{ $drivers->driver_language }}"
                                            readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Level User</label>
                                        <input type="text" class="form-control"
                                            value="{{ $users->level }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <br><br><br>
                            <!-- Header -->
                            <div class="card-header">
                                <h6 class="card-title">Dokumen Driver</h6>
                            </div>
                            <!-- URL To Driver License -->
                            
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Driver License</label>
                                    <br>
                                        <p>
                                            <a href="{{ asset('storage/driver_license/'.$drivers->driver_license) }}"
                                                target="_blank"><b>{{ $drivers->driver_license }}</b></a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Soul Healthy Letter</label>
                                    <br>
                                        <p>
                                            <a href="{{ asset('storage/soul_healthy_letter/'.$drivers->soul_healthy_letter) }}"
                                                target="_blank"><b>{{ $drivers->soul_healthy_letter }}</b></a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Napsah Letter</label>
                                    <br>
                                        <p>
                                            <a href="{{ asset('storage/napsah_letter/'.$drivers->napsah_letter) }}"
                                                target="_blank"><b>{{ $drivers->napsah_letter }}</b></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Physical Healthy Letter</label>
                                    <br>
                                        <p>
                                            <a href="{{ asset('storage/physical_healthy_letter/'.$drivers->physical_healthy_letter) }}"
                                                target="_blank"><b>{{ $drivers->physical_healthy_letter }}</b></a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">SKCK letter</label>
                                    <br>
                                        <p>
                                            <a href="{{ asset('storage/skck_letter/'.$drivers->skck_letter) }}"
                                                target="_blank"><b>{{ $drivers->skck_letter }}</b></a>
                                        </p>
                                    </div>

                                </div>

                            </div>


                            <!-- Github buttons -->
                            <script async defer src="https://buttons.github.io/buttons.js"></script>
                            <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
                            <script src="../assets/js/material-dashboard.min.js?v=3.0.2"></script>
</body>

</html>
