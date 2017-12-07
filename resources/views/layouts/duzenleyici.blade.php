@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>


            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
        </nav>

        <!-- Page Content -->
        <div class="container">
             <!-- Page Heading/Breadcrumbs -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Makale
                        <small>Oluştur</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="/">Anasayfa</a>
                        </li>
                        <li class="active">Makale Olustur</li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <!-- Content Row -->

            <!-- /.row -->
            <form name="sentMessage" id="contactForm"
                  action="{{ action('makaleController@makaleGuncelle'  , $makale->makale_id) }}" method="post" novalidate>
            <!-- Contact Form -->
                <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
                <div class="row">
                    <div class="col-md-8">
                        <h3>Makale düzenleyici</h3>

                        {!! csrf_field()!!}
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Makale'nin Başlığı:</label>
                                <input name="baslik" type="text" class="form-control" id="baslik"  value="{{old('baslik' , $makale->baslik) }}" >
                                <p class="help-block"></p>
                            </div>

                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>İçerik:</label>
                                <textarea class="form-control" name="yazi" id="yazi" cols="30" rows="15">{{old('yazi' , $makale->yazi ) }}</textarea>
                            </div>
                        </div>
                        <div id="success"></div>
                        <!-- For success/fail messages -->

                    </div>

                </div>

                <div id="success"></div>
                <!-- For success/fail messages -->
                <button type="submit" value="1" class="btn btn-primary">Makaleyi Güncelle </button>
            </form>
        </div>

    </div>

    <!-- /.row -->

    <hr>


    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    </body>

    </html>

@endsection