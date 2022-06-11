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
    <!-- Javascript to Show and Hided Input -->
    <script>
        $(document).ready(function () {
            $("select").change(function () {
                $(this).find("option:selected").each(function () {
                    var optionValue = $(this).attr("value");
                    if (optionValue) {
                        $(".box").not("." + optionValue).hide();
                        $("." + optionValue).show();
                    } else {
                        $(".box").hide();
                    }
                });
            }).change();
        });

    </script>
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
    <!-- Create Employee -->
    <div class="container">
        <!-- Button Back -->
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('employees.index') }}" class="btn btn-danger">
                    <i class="fas fa-arrow-left"></i> Back
                </a>
            </div>
        </div>
        <!-- End Button Back -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Create Employee</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('employees.store') }}" method="post"  enctype='multipart/form-data'>
                            @csrf
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control border" name="name" placeholder="  Name"
                                            value="{{ old('name') }}" required>
                                        @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control border" name="email"
                                            placeholder="  Email" value="{{ old('email') }}" required>
                                        @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="text" class="form-control border" name="employee_phone_number"
                                            placeholder="  Phone" value="{{ old('employee_phone_number') }}" required>
                                        @error('employee_phone_number')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control border" name="employee_address"
                                            placeholder="  Address" value="{{ old('employee_address') }}" required>
                                        @error('employee_address')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control border" name="password"
                                            placeholder="  Password" value="{{ old('password') }}" required>
                                        @error('password')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <label>Birthday</label>
                                        <input type="date" class="form-control border" name="employee_birth_date"
                                            value="{{ old('employee_birth_date') }}" required>
                                        @error('employee_birth_date')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <label>Role</label>
                                        <select class="form-control border" name="role" required>
                                            <option value="">Select Role</option>
                                            <option value="admin">Admin</option>
                                            <option value="manager">Manager</option>
                                            <option value="cs">Customer Service</option>
                                        </select>
                                        @error('role')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                               <!-- Employee Gender -->
                               <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <select class="form-control border" name="employee_gender" required>
                                            <option value="">Select Gender</option>
                                            <option value="male">Pria</option>
                                            <option value="female">Wanita</option>
                                        </select>
                                        @error('employee_gender')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <label>Select Profile Picture</label>
                                        <input type="file" class="form-control border" name="employee_image"
                                             required>
                                        @error('employee_image')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <br><br

                            <!-- Button Submit -->
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-success">
                                        <i class="fas fa-save"></i> Save
                                    </button>
                                </div>
                            </div>
                            <!-- End Button Submit -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Create Employee -->


    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/material-dashboard.min.js?v=3.0.2"></script>
</body>

</html>
