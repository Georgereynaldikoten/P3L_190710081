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

        body {
            color: #566787;
            background: #f5f5f5;
            font-family: 'Roboto', sans-serif;
        }

        .table-responsive {
            margin: 30px 0;
        }

        .table-wrapper {
            min-width: 1000px;
            background: #fff;
            padding: 20px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        }

        .table-title {
            padding-bottom: 10px;
            margin: 0 0 100px;
            min-width: 100%;
        }

        .table-title h2 {
            margin: 8px 0 0;
            font-size: 22px;
        }

        .search-box {
            position: relative;
            float: right;
        }

        .search-box input {
            height: 34px;
            border-radius: 20px;
            padding-left: 35px;
            border-color: #ddd;
            box-shadow: none;
        }

        .search-box input:focus {
            border-color: #3FBAE4;
        }

        .search-box i {
            color: #a0a5b1;
            position: absolute;
            font-size: 19px;
            top: 8px;
            left: 10px;
        }

        table.table tr th,
        table.table tr td {
            border-color: #e9e9e9;
        }

        table.table-striped tbody tr:nth-of-type(odd) {
            background-color: #fcfcfc;
        }

        table.table-striped.table-hover tbody tr:hover {
            background: #f5f5f5;
        }

        table.table th i {
            font-size: 13px;
            margin: 0 5px;
            cursor: pointer;
        }

        table.table td:last-child {
            width: 130px;
        }

        table.table td a {
            color: #a0a5b1;
            display: inline-block;
            margin: 0 5px;
        }

        table.table td a.view {
            color: #03A9F4;
        }

        table.table td a.edit {
            color: #FFC107;
        }

        table.table td a.delete {
            color: #E34724;
        }

        table.table td i {
            font-size: 19px;
        }

        .pagination {
            float: right;
            margin: 0 0 5px;
        }

        .pagination li a {
            border: none;
            font-size: 95%;
            width: 30px;
            height: 30px;
            color: #999;
            margin: 0 2px;
            line-height: 30px;
            border-radius: 30px !important;
            text-align: center;
            padding: 0;
        }

        .pagination li a:hover {
            color: #666;
        }

        .pagination li.active a {
            background: #03A9F4;
        }

        .pagination li.active a:hover {
            background: #0397d6;
        }

        .pagination li.disabled i {
            color: #ccc;
        }

        .pagination li i {
            font-size: 16px;
            padding-top: 6px
        }

        .hint-text {
            float: left;
            margin-top: 6px;
            font-size: 95%;
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
    <div class="container-xl bg-outline-white ">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-9">
                            <a href="{{ route('dashboardadmin') }}" class="btn btn-danger"><i
                                    class="material-icons"></i> <span>Back</span></a>
                            <h2>Car <b>Details</b></h2>
                        </div>
                        <div class="col-sm-3">
                            <a href="{{route('cars.create')}}" class="btn btn-success" data-toggle="modal"><i
                                    class="material-icons">&#xE147;</i> <span>Add New Car</span></a>
                        </div>
                        <!-- search -->
                        <form action="{{ route('searchcar') }}" method="GET"
                            class="input-group rounded mt-5 w-25 animate__animated animate__fadeIn">
                            <div class="search-box col-sm-6">
                                <i class="material-icons">&#xE8B6;</i>
                                <input type="text" class="form-control " placeholder="Search&hellip;" name="search">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif

            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th width="10px" class="text-center">No</th>
                        <th width="200px" class="text-center">Car Image</th>
                        <th width="100px" class="text-center">Car Name</th>
                        <th width="50px" class="text-center">Car Type </th>
                        <th width="100px" class="text-center">Car color</th>
                        <th width="50px" class="text-center">Car facilities</th>
                        <th width="100px" class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($cars) > 0)
                    @foreach($cars as $car)
                    <tr>
                        <td class="text-center">{{$car->id}}</td>
                        <td><img src="{{ asset('storage/car/'.$car->car_image) }}" width="150px" height="90px" alt=""
                                title=""></td>
                        <td>{{$car->car_name}}</td>
                        <td>{{$car->car_type}}</td>
                        <td>{{$car->car_color}}</td>
                        <td>{{$car->car_facilities}}</td>

                        <td>

                            <form action="{{ route('cars.destroy',$car->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('DELETE')
                                
                                <a href="{{ route('cars.show',$car->id)}}" class="view btn-sm btn-success" title="View"
                                    data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                                <a href="{{ route('cars.edit',$car->id)}}" class="edit btn-sm btn-warning" title="Edit"
                                    data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                <button type="submit" class="delete btn-sm btn-danger" title="Delete"
                                    data-toggle="tooltip"
                                    onclick="return confirm('Apakah Anda Yakin Akan menghapus data Ini?')">
                                    <i class="material-icons">&#xE872;</i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="8" class="text-center">No Data Found</td>
                    </tr>
                    @endif

                </tbody>
            </table>

        </div>
    </div>
    



    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/material-dashboard.min.js?v=3.0.2"></script>
</body>

</html>
