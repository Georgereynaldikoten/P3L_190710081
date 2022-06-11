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
    <!-- CREATE DRIVERS -->
    <!-- Button Back -->
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h4 class="card-title">
                    <a href="{{ route('drivers.index') }}" class="btn btn-primary">
                        <i class="fas fa-arrow-left"></i>
                        Back
                    </a>
                </h4>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">
                        <h3 class="card-title">Create Driver</h3>
                        <p>In file upload, scan document and send it in image format</p>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('drivers.store') }}" method="post" enctype='multipart/form-data'>
                            @csrf
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Name</label>
                                        @if ($errors->has('name'))
                                        <div class="alert alert-danger">
                                            {{ $errors->first('name') }}
                                        </div>
                                        @endif
                                        <input type="text" class="form-control border" id="name" name="name"
                                            placeholder=" Name" value="{{ old('name') }}" requred>
                                    </div>
                                </div>
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <label>Email</label>
                                        @if ($errors->has('email'))
                                        <div class="alert alert-danger">
                                            {{ $errors->first('email') }}
                                        </div>
                                        @endif
                                        <input type="email" class="form-control border" name="email" id="email"
                                            placeholder=" Email" value="{{ old('email') }}" required>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        @if ($errors->has('driver_phone_number'))
                                        <div class="alert alert-danger">
                                            {{ $errors->first('driver_phone_number') }}
                                        </div>
                                        @endif
                                        <input type="text" class="form-control border" name="driver_phone_number"
                                            id="driver_phone_number" placeholder="Phone"
                                            value="{{ old('driver_phone_number') }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <label>Address</label>
                                        @if ($errors->has('driver address'))
                                        <div class="alert alert-danger">
                                            <strong>{{ $errors->first('driver_address') }}</strong>
                                        </div>
                                        @endif
                                        <input type="text" class="form-control border" name="driver_address"
                                            id="driver_address" placeholder="Address"
                                            value="{{ old('driver_address') }}" required>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <label>Password</label>
                                        @if ($errors->has('password'))
                                        <div class="alert alert-danger">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </div>
                                        @endif
                                        <input type="password" class="form
                                        form-control border" name="password" placeholder="Password" id="password"
                                            required>
                                        
                                    </div>
                                </div>
                                <!--Hidden input-->
                                <input type="hidden" name="level" value="driver">
                                <!-- Input Driver Birth Date-->
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <label>Birth Date</label>
                                        @if ($errors->has('driver_birth_date'))
                                        <div class="alert alert-danger">
                                            <strong>{{ $errors->first('driver_birth_date') }}</strong>
                                        </div>
                                        @endif
                                        <input type="date" class="form-control border" name="driver_birth_date"
                                            id="driver_birth_date" placeholder="Birth Date"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <!-- Option Driver Language -->
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <label>Language</label>
                                        @if ($errors->has('driver_language'))
                                        <div class="alert alert-danger">
                                            <strong>{{ $errors->first('driver_language') }}</strong>
                                        </div>
                                        @endif
                                        <select class="form-control border" name="driver_language" id="driver_language"
                                            value="{{ old('driver_language') }}" required>
                                            <option value="indonesia">Indonesia</option>
                                            <option value="inggris">English</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Option select -->
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        @if ($errors->has('driver_gender'))
                                        <div class="alert alert-danger">
                                            <strong>{{ $errors->first('driver_gender') }}</strong>
                                        </div>
                                        @endif
                                        <select class="form-control border" name="driver_gender" id="driver_gender"
                                            value="{{ old('driver_gender') }}" required>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <label>Ketersediaan Driver</label>
                                        @if ($errors->has('available_status'))
                                        <div class="alert alert-danger">
                                            <strong>{{ $errors->first('available_status') }}</strong>
                                        </div>
                                        @endif
                                        <select class="form-control border" name="available_status" id="davailable_status"
                                            value="{{ old('available_status') }}" required>
                                            <option value="tersedia">Tersedia</option>
                                            <option value="tidak tersedia">Tidak Tersedia</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br><br><br>
                            <h5>Driver Document</h5>
                            <br>
                            <div class="row">
                                <!-- Upload Driver License -->
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <label>Upload Driver License</label>
                                        @if ($errors->has('driver_license'))
                                        <div class="alert alert-danger">
                                            <strong>{{ $errors->first('driver_license') }}</strong>
                                        </div>
                                        @endif
                                        <input type="file" class="form-control border" name="driver_license"
                                            id="driver_license" placeholder="Upload Driver License"
                                            value="{{ old('driver_license') }}" required>
                                    </div>
                                </div>
                                <!-- Upload Driver Napsah Letter -->
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <label>Upload Napsah Letter</label>
                                        @if ($errors->has('napsah_letter'))
                                        <div class="alert alert-danger">
                                            <strong>{{ $errors->first('napsah_letter') }}</strong>
                                        </div>
                                        @endif
                                        <input type="file" class="form-control border" name="napsah_letter"
                                            id="napsah_letter" placeholder="Upload Driver Napsah Letter"
                                            value="{{ old('napsah_letter') }}" required>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <!-- Upload Soul Health Letter -->
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <label>Upload Soul Health Letter</label>
                                        @if ($errors->has('soul_healthy_letter'))
                                        <div class="alert alert-danger">
                                            <strong>{{ $errors->first('soul_healthy_letter') }}</strong>
                                        </div>
                                        @endif
                                        <input type="file" class="form-control border" name="soul_healthy_letter"
                                            id="soul_healthy_letter" placeholder="Upload Driver Soul Health Letter"
                                            value="{{ old('soul_healthy_letter') }}" required>
                                    </div>
                                </div>
                                <!-- Upload physical health letter -->
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <label>Upload Physical Health Letter</label>
                                        @if ($errors->has('physical_healthy_letter'))
                                        <div class="alert alert-danger">
                                            <strong>{{ $errors->first('physical_healthy_letter') }}</strong>
                                        </div>
                                        @endif
                                        <input type="file" class="form-control border" name="physical_healthy_letter"
                                            id="physical_healthy_letter"
                                            placeholder="Upload Driver Physical Health Letter"
                                            value="{{ old('physical_healthy_letter') }}" required>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <!-- Upload skck letter -->
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <label>Upload SKCK Letter</label>
                                        @if ($errors->has('skck_letter'))
                                        <div class="alert alert-danger">
                                            <strong>{{ $errors->first('skck_letter') }}</strong>
                                        </div>
                                        @endif
                                        <input type="file" class="form-control border" name="skck_letter"
                                            id="skck_letter" placeholder="Upload Driver SKCK Letter"
                                            value="{{ old('skck_letter') }}" required>
                                    </div>
                                </div>
                                <!-- Upload Driver Profil Picture -->
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <label>Upload Driver Picture</label>
                                        @if ($errors->has('driver_profile_picture'))
                                        <div class="alert alert-danger">
                                            <strong>{{ $errors->first('driver_profile_picture') }}</strong>
                                        </div>
                                        @endif
                                        <input type="file" class="form-control border" name="driver_profile_picture"
                                            id="driver_profile_picture" placeholder="Upload Driver Picture"
                                            value="{{ old('driver_profile_picture') }}" required>
                                    </div>
                                </div>

                            </div>
                            <br><br>
                            <!-- Button Submit -->
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-success btn-block">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
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
