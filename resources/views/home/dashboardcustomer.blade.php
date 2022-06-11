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

        .card-product:after {
            content: "";
            display: table;
            clear: both;
            visibility: hidden;
        }

        .card-product .price-new,
        .card-product .price {
            margin-right: 5px;
        }

        .card-product .price-old {
            color: #999;
        }

        .card-product .img-wrap {
            border-radius: 3px 3px 0 0;
            overflow: hidden;
            position: relative;
            height: 220px;
            text-align: center;
        }

        .card-product .img-wrap img {
            max-height: 100%;
            max-width: 100%;
            object-fit: cover;
        }

        .card-product .info-wrap {
            overflow: hidden;
            padding: 15px;
            border-top: 1px solid #eee;
        }

        .card-product .action-wrap {
            padding-top: 4px;
            margin-top: 4px;
        }

        .card-product .bottom-wrap {
            padding: 15px;
            border-top: 1px solid #eee;
        }

        .card-product .title {
            margin-top: 10px;
        }

        #footer {
            position: absolute;
            width: 100%;
            bottom: 0;
            left: 0;
            
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
        <div class="titlename"><b>Atma Jogja Rental</b>(Customer)<a href=""></a></div>

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
    <div class></div>
    <div class="container">
        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">
                    Car List
                </h3>
            </div>
        </div>
        <div class="row">
            @if(count($cars) > 0)
            @foreach($cars as $car)
            
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 ">
                <div class="card card-product border ">
                    <div class="img-wrap">
                        <img src="{{ asset('storage/car/'.$car->car_image) }}" width="350px" height="190px" alt=""
                            title="">
                    </div>
                    <figcaption class="info-wrap">
                        <h6 class="card-title"><i class="fas fa-car"></i>{{$car->car_name}}</h6>
                        
                        <div class="action-wrap">
                            <a href="{{ route('transactions.show',$car->id)}}" class="btn btn-primary btn-sm float-right">
                                Order </a>
                            <div class="price-wrap h5">
                                <span class="price-new">Rp {{ $car->car_rent_price }}</span>
                            </div> <!-- price-wrap.// -->
                        </div> <!-- action-wrap -->
                    </figcaption>
                </div> <!-- card // -->
            </div> <!-- col // -->
            @endforeach
            @else
            <tr>
                <td colspan="10" class="text-center">No Data Found</td>
            </tr>
            @endif

        </div> <!-- row.// -->


    </div>
    <!--container end-->
    <br>
    <br>
    <br>
    <br>
    <br>
    <footer class="bg-light text-center text-lg-start" id="footer">
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">About Us</h5>

                    <p>
                        Atma Jogja Rental merupakan sebuah rental mobil yang menyediakan berbagai macam
                        mobil dengan harga yang terjangkau. Atma Jogja Rental merupakan perusahaan yang
                        berfokus pada rental mobil yang menyediakan mobil dengan kondisi baik dan bersih
                    </p>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Our Facility</h5>

                    <p>
                        Atma Jogja Rental menyediakan jasa rental mobil dengan harga yang terjangkau.
                        Anda dapat memilih mobil yang diinginkan sesuai dengan kebutuhan anda. anda
                        juga dapat memesan pengemudi (driver) yang anda inginkan seusai dengan kebutuhan
                        anda.
                    </p>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright:
            <a class="text-dark" href="https://mdbootstrap.com/">AtmaJogjaRental</a>
        </div>
        <!-- Copyright -->
    </footer>


    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/material-dashboard.min.js?v=3.0.2"></script>
</body>

</html>
