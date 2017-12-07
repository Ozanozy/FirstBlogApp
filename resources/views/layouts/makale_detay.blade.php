
@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Makale</title>

    <!-- Bootstrap Core CSS -->
    <link href="Laravel/public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="Laravel/Public/css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="Laravel/Public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->
<div id="post">




    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="/">
                    Anasayfa
                </a>
            </div>



            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Makale<span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="/makale-olustur">
                                Makale Oluştur
                            </a>
                        </li>

                         <li>
                            <a href=/all-makale>
                                Makale Listesi

                            </a>
                        </li>

                    </ul>
                </li>
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                                    nav

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                            <li/>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
        <!-- /.navbar-collapse -->
</div>
<!-- /.container -->
</nav>


<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <a href="#">{{$makalem->baslik}} </a></h1>
                </ol>
        </div>
    </div>
    <!-- /.row -->

        <div> <h3><hr><li><a href="/makale-duzenle/{{$makalem->makale_id}}">Makeleyi Düzenleyin</a></h3></div>
    <!-- Content Row -->
    <div class="row">

        <!-- Blog Post Content Column -->
        <div class="col-lg-8">

            <!-- Blog Post -->

            <hr>

            <!-- Date/Time -->
            <p><i class="fa fa-clock-o"></i>{{$makalem->created_at}}</p>

            <hr>

            <!-- Preview Image -->
            <img class="-image" height="400" width="900" src="{{ asset('images/'.$makalem->image) }}"></div>
        <head><title>Blog.net</title></head>
             <body>

             <div class="container">

            </div>
            </body>,
            <hr>
            <!-- Blog Comments -->
        <h3>{{$makalem->yazi}}</h3>
            <!-- Comments Form -->
            <div class="well">
                <h4>Leave a Comment</h4>
                <form name="sentMessage" id="contactForm" action="/yorumgonder" method="post">
                    <div class="form-group">
                        <input name="makale_id" type="hidden" value="{{ $makalem['makale_id']}}">
                        <input name="comment_text" type="text" class="form-control" id="comment_text"></div>
                    <button  type="submit" class="btn btn-primary">Kaydet</button>
                    {{ csrf_field() }}
                </form>
            </div>
            <hr>
            <!-- Posted Comments -->
            <!-- Comment -->
            @include ("comment_post")
            <!-- Comment -->
            <div class="media">
                <a class="pull-left" href="#">
                    <img class="media-object" src="http://placehold.it/64x64" alt="">
                </a>
                <div class="media-body">
                    <h4 class="media-heading">Start Bootstrap
                        <small>August 25, 2014 at 9:30 PM</small>
                    </h4>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio,
                    vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    <!-- Nested Comment -->

                    </div>
                    <!-- End Nested Comment -->
                </div>
            </div>

        </div>
        </div>

    </div>
    <!-- /.row -->

    <hr>

    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
               <CENTER><p>Designed by Umuotzan art ART</p></CENTER>
            </div>
        </div>
    </footer>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>
