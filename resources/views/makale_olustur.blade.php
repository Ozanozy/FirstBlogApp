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
              action="makale-gonder" method="post" novalidate enctype="multipart/form-data"  >
        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-md-8">

                    {!! csrf_field()!!}
                    <div class="container" >
                    <div class="panel panel-primary">
                        <div class="panel-heading" >
                            <h3>Makalem</h3>
                        </div>
                        <div class="panel-body">



                                <div class="row"></div>
                                <div class="col-md-12"></div>
                                <input type="file" name="image"/>
                                <div class="col-md-12"></div>


                        <div class="control-group form-group">
                        <div class="controls">
                            <label>Makale'nin Başlığı:</label>
                            <input name="baslik" type="text" class="form-control" id="baslik">
                            <p class="help-block"></p>

                        </div>

                        </div>



                    <div class="control-group form-group">
                        <div class="controls">
                            <label>İçerik:</label>
                            <textarea name="yazi" rows="10" cols="100" class="form-control" id="yazi"  required data-validation-
                                      required-message="Please enter your message"
                                      maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->

            </div>

        </div>

        <div id="success"></div>
        <!-- For success/fail messages -->
                        <button type="submit" class="btn btn-success">Gönder</button>

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