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
    <!-- INDEX employees -->
    <div class="container">
        <div class="row">
            <!-- Button Back -->
            <div class="col-sm-9">
                <a href="{{ route('dashboardadmin') }}" class="btn btn-danger"><i class="fa fa-arrow-left"></i>
                    <span>Back</span></a>
            </div>
            <br>
            <!-- Button Add New Mitra -->
            <div class="col-sm-3">
                <a href="{{ route('employees.create') }}" class="btn btn-success"><i class=" fa fa-plus"></i>
                    <span>Add New Employees</span></a>
            </div>
        </div>
        <br>

        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h2 class="card-title ">Data Employees</h2>
                        <p class="card-category"> Berisikan Data para pegawai</p>
                    </div>

                    <div class="card-body">
                        <div class="row ">
                            <div class="col-sm-4 align-content-md-end">
                                <form action="{{ route('employees.index') }}" method="GET">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="search"
                                            placeholder="Search Employee...">
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="material-icons">search</i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="table-responsive">
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                        @endif
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Nama
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th>
                                        Level
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </thead>
                                <tbody>
                                    @foreach($employees as $employee)
                                    <tr>
                                        <td>
                                            {{$employee->id}}
                                        </td>
                                        <td>
                                            {{$employee->employee_name}}
                                        </td>
                                        <td>
                                            <?php $email = DB::table('users')->where('id', $employee->id_user)->value('email'); ?>
                                            {{$email}}
                                            
                                        </td>
                                        <td>
                                            <?php $nametable = DB::table('roles')->where('id', $employee->id_role)->value('role') ?>
                                            {{$nametable}}
                                        </td>
                                        <td>
                                            

                                            <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')    
                                            <a href="{{ route('employees.show', $employee->id) }}"
                                                class="btn btn-info btn-sm"><i class="material-icons">visibility</i></a>
                                            <!-- EDIT -->
                                            <a href="{{ route('employees.edit', $employee->id) }}"
                                                class="btn btn-warning btn-sm"><i class="material-icons">edit</i></a>                                           
                                                <button type="submit" class="btn btn-danger btn-sm"><i
                                                        class="material-icons"
                                                        onclick="return confirm('Apakah Anda Yakin Akan menghapus data Ini?')">delete</i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- INDEX CARS -->

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/material-dashboard.min.js?v=3.0.2"></script>
</body>

</html>
