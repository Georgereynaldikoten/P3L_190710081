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
                <li class="nav-item  active">
                    <a class="nav-link  active" href="">Dashboard</a>
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
            <!-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> -->
        </div>
    </nav>
    <!-- Create Promo -->
    <br>
    <div class="container-xl bg-outline-white ">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-9">
                            <a href="{{ route('dashboardmanager') }}" class="btn btn-danger"><i
                                    class="material-icons"></i> <span>Back</span></a>
                            <h2>List<b>Promo</b></h2>
                        </div>
                        <div class="col-sm-3">
                            <a href="{{route('promos.create')}}" class="btn btn-success" data-toggle="modal"><i
                                    class="material-icons">&#xE147;</i> <span>Add New Promo</span></a>
                        </div>
                        <!-- search -->
                        <form action="{{ route('searchpromo') }}" method="GET"
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
                        <th width="1px">No</th>
                        <th width="5px">Code</th>
                        <th width="10px" class="text-center">Type</th>
                        <th width="50px" class="text-center">Status </th>
                        <th width="10px" class="text-center">description</th>
                        <th width="100px" class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($promos) > 0)
                    @foreach($promos as $promo)
                    <tr>
                        <td>{{$promo->id}}</td>
                        <td width="5px" >{{$promo->promo_code}}</td>
                        <td>{{$promo->promo_type}}</td>
                        <td>{{$promo->promo_status}}</td>
                        <td width="10px" height="40px">{{Str::limit($promo->promo_description, $limit = 60, $end = '...')}}</td>
                      
                        <td>

                            <form action="{{ route('promos.destroy',$promo->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('DELETE')
                                
                                <a href="{{ route('promos.show',$promo->id)}}" class="view btn-sm btn-success" title="View"
                                    data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                                <a href="{{ route('promos.edit',$promo->id)}}" class="edit btn-sm btn-warning" title="Edit"
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
    <!-- End Create Promo -->




    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/material-dashboard.min.js?v=3.0.2"></script>
</body>

</html>
