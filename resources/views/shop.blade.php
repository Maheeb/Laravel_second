@extends('layouts.super')
@section('content')
    <!--===============NAVBAR SECTION START================-->
    <!--===============NAVBAR SECTION START================-->
    <div class="row">
        <nav class="navbar navbar-expand-lg navbar-dark bg-danger" id="navbar">

            <div class="col-md-2">
                <!-- BRAND NAME-->
                <a class="navbar-brand" id="navbar-brand" href="#">Brand New</a>
            </div>
            <div class="col-md-6 menu">
                <!--MENU -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#">Supports</a>
                    </li>
                    <li class="nav-item">
                        <a href="#">Products</a>
                    </li>
                    <li class="nav-item">
                        <a href="#">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Admin
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a href="#">Modification</a>
                            <a href="#">Login </a>
                        </div>
                    </li>
                </ul>

            </div>
            <div class="col-md-6">
                <form class="form-inline">
                    <input id="form-control" class="form-control" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-default" id="src_btn" type="submit">Search</button>
                </form>
            </div>
        </nav>


    </div>

    <!--===============NAVBAR SECTION END================-->
    <!--===============NAVBAR SECTION END================-->

    <!--===============HERO SECTION START================-->
    <!--===============HERO SECTION START================-->

    <div class="middle">
        <div class="row">
            @if ($photos)

                    {{--@if ($loop->iteration<4)--}}
                    <div class="col-md-3">

                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

                            <div class="carousel-inner">
                                @foreach ($photos as $i=>$photo)
                                {{--<div class="carousel-item active">--}}
                                <div class="carousel-item{{ ($i) ? '' : ' active' }}">

                                        <img src="{{ asset('images/' . $photo->file) }}" class="d-block" alt="...">

                                </div>
                                @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

                    </div>
                    {{--@endif--}}

            @endif






            <center>
                <div class="col-md-1">
                    <div class="vl"></div>


                </div>
            </center>

            <div class="col-md-8">

                        <div class="row">
                            @if ($cards)
                                @foreach ($cards as $card)
                            <div class="col-md-3">
                                <div class="card" style="width: 15rem;">

                                    <i class="{{$card->fawe}}"></i>
                                    <div class="card-body">
                                        <h5 class="card-title">{{$card->title}}</h5>
                                        <p class="card-text">{{$card->et}}</p>
                                        <a href="#" class="btn btn-danger">Go somewhere</a>
                                    </div>

                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
            </div>
        </div>
    </div>

    <hr>

    <!-- OWL CAROUSEL-->

    <!--===============CARDS SECTION START================-->
    <!--===============CARDS SECTION START================-->
    <h1>Upcoming Products</h1>
    <center>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            {{--<div class="carousel-item active">--}}
            <div class="carousel-item active">
                <div class="row ">

                   @if ($products )
                            @foreach ($products as $product)
                                @if ($loop->index<4)

                                    <div class="col-md-3">
                                        <div class="card shadow" style="width: 15rem;">
                                            <div class="inner">
                                                <!-- <img class="card-img-top" src="img/fhome.jpg" alt="Card image cap">-->
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">{{$product->title}}</h5>
                                                <p class="card-text">{{$product->text}}</p>
                                            </div>

                                            <div class="card-body">

                                                <a href="#" class="card-link">Card link</a>
                                                <a href="#" class="card-link">Another link</a>
                                            </div>

                                            <li class="list-group-item"><a href="pages/fashion.html" class="btn btn-danger btn-block">View Details</a></li>
                                        </div>
                                    </div>

                                @endif

                        @endforeach
                            @endif

                </div>
            </div>

            <div class="carousel-item">
                <div class="row ">
                    @if ($products)
                        @foreach ($products as $product)
                            @if ($loop->index>3)
                            <div class="col-md-3">
                                <div class="card" style="width: 15rem;">
                                    <div class="inner">
                                        <!-- <img class="card-img-top" src="img/fhome.jpg" alt="Card image cap">-->
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">{{$product->title}}</h5>
                                        <p class="card-text">{{$product->text}}</p>
                                    </div>

                                    <div class="card-body">

                                        <a href="#" class="card-link">Card link</a>
                                        <a href="#" class="card-link">Another link</a>
                                    </div>

                                    <li class="list-group-item"><a href="pages/gift.html" class="btn btn-danger btn-block">View Details</a></li>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    @endif


                </div>

            </div>





        </div>




    </center>

    <!--===============CARDS SECTION ENDS================-->
    <!--===============CARDS SECTION ENDS================-->

    <h1>Supports Forum</h1>
    <div id="con">
        <center>

            <div class="container center">
                <div class="row">
                    <div class="col-md-4">
                        <i class="fa fa-facebook fa-5x"></i>
                    </div>
                    <div class="col-md-4">
                        <i class="fa fa-instagram fa-5x"></i>
                    </div>
                    <div class="col-md-4">
                        <i class="fa fa-linkedin fa-5x"></i>
                    </div>
                </div>

            </div>
        </center>

        <div class="row" style="margin-top: 30px;">
            <div class="col-md-12">
                <div class="text text-center text-dark bg-danger">
                    Copyright © 2018 supShop Inc. All rights reserved.<br>shaarifulz@gmail.com
                </div>
            </div>
        </div>

    </div>


@stop