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
    <!-- Edit Driver -->
    <div class="container">
        <!-- Button Back -->
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('drivers.index') }}" class="btn btn-danger">
                    <i class="fas fa-arrow-left"></i> Back
                </a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                   <!-- Header -->
                    <div class="card-header">
                        <h4 class="card-title">Edit Driver</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('drivers.update', $drivers->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ $drivers->driver_name }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                        <?php $users = DB::table('users')->where('id', $drivers->id_user)->first(); ?>
                            <div class="form-group row">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ $users->email }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="driver_phone_number"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>
                                <div class="col-md-6">
                                    <input id="driver_phone_number" type="text"
                                        class="form-control @error('driver_phone_number') is-invalid @enderror" name="driver_phone_number"
                                        value="{{ $drivers->driver_phone_number }}" required autocomplete="driver_phone_number">

                                    @error('driver_phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="driver_address"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>
                                <div class="col-md-6">
                                    <input id="driver_address" type="text"
                                        class="form-control @error('driver_address') is-invalid @enderror" name="driver_address"
                                        value="{{ $drivers->driver_address }}" required autocomplete="driver_address">

                                    @error('driver_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- Hide input -->
                            <input type="hidden" name="level" value="driver">
                            <br>
                            <div class="form-group row">
                                <label for="driver_birth_date"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Birth Date') }}</label>
                                <div class="col-md-6">
                                    <input id="driver_birth_date" type="date"
                                        class="form-control @error('driver_birth_date') is-invalid @enderror" name="driver_birth_date"
                                        value="{{ $drivers->driver_birth_date }}" required autocomplete="driver_birth_date">

                                    @error('driver_birth_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <!-- Option -->
                            <div class="form-group row">
                                <label for="driver_gender"
                                class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>
                                <div class="col-md-6">
                                <select class="form-control border text-center alert-info" name="driver_gender" id="driver_gender"
                                            value="{{ old('driver_gender') }}" required>
                                            <option value="{{ $drivers->driver_gender}}">{{ $drivers->driver_gender }}</option>
                                            <option value="male">male</option>
                                            <option value="female">female</option>
                                </select>
                                @error('driver_gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="driver_language"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Language') }}</label>
                                <div class="col-md-6">
                                <select class="form-control border text-center alert-info" name="driver_language" id="driver_language"
                                            value="{{ old('driver_language') }}" required>
                                            <option value="{{ $drivers->driver_language}}">{{ $drivers->driver_language }}</option>
                                            <option value="indonesia">Indonesia</option>
                                            <option value="inggris">English</option>
                                </select>

                                    @error('driver_language')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="driver_language"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Available Status') }}</label>
                                <div class="col-md-6">
                                <select class="form-control border text-center alert-info" name="available_status" id="davailable_status"
                                            value="{{ old('available_status') }}" required>
                                            <option value="{{ $drivers->available_status}}">{{ $drivers->available_status }}</option>
                                            <option value="tersedia">Tersedia</option>
                                            <option value="tidak tersedia">Tidak Tersedia</option>
                                        </select>

                                    @error('driver_language')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                                  
                            <div class="form-group row">
                                <label for="driver_profile_picture"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Profil Picture') }}</label>
                                <div class="col-md-6">
                                    <input id="driver_profile_picture" type="file"
                                        class="form-control @error('driver_profile_picture') is-invalid @enderror" name="driver_profile_picture"
                                        value="{{ $drivers->driver_profile_picture }}" required autocomplete="driver_profile_picture">

                                    @error('driver_profile_picture')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="napsah_letter"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Napsah Letter') }}</label>
                                <div class="col-md-6">
                                    <input id="napsah_letter" type="file"
                                        class="form-control @error('napsah_letter') is-invalid @enderror" name="napsah_letter"
                                        value="{{ $drivers->napsah_letter }}" required autocomplete="napsah_letter">

                                    @error('napsah_letter')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="driver_license"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Driver License ') }}</label>
                                <div class="col-md-6">
                                    <input id="driver_license" type="file"
                                        class="form-control @error('driver_license') is-invalid @enderror" name="driver_license"
                                        value="{{ $drivers->driver_license }}" required autocomplete="driver_license">

                                    @error('driver_license')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="soul_healthy_letter"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Soul Healthy Letter') }}</label>
                                <div class="col-md-6">
                                    <input id="soul_healthy_letter" type="file"
                                        class="form-control @error('soul_healthy_letter') is-invalid @enderror" name="soul_healthy_letter"
                                        value="{{ $drivers->soul_healthy_letter }}" required autocomplete="soul_healthy_letter">

                                    @error('soul_healthy_letter')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="physical_healthy_letter"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Physical Healthy Letter') }}</label>
                                <div class="col-md-6">
                                    <input id="physical_healthy_letter" type="file"
                                        class="form-control @error('physical_healthy_letter') is-invalid @enderror" name="physical_healthy_letter"
                                        value="{{ $drivers->physical_healthy_letter }}" required autocomplete="physical_healthy_letter">

                                    @error('physical_healthy_letter')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="skck_letter"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Skck Letter') }}</label>
                                <div class="col-md-6">
                                    <input id="skck_letter" type="file"
                                        class="form-control @error('skck_letter') is-invalid @enderror" name="skck_letter"
                                        value="{{ $drivers->skck_letter }}" required autocomplete="skck_letter">

                                    @error('skck_letter')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah Anda Yakin Akan mengupdate data Ini?')">
                                        {{ __('Update') }}
                                    </button>
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
