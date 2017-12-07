<html>
<head><title>
        İmage Upload
</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
<div class="container" >
    <div class="panel panel-primary">
        <div class="panel-heading" >
            <h3>Laravel image upload</h3>
        </div>
        <div class="panel-body">
           <form action="{{ url ('image-upload-demo') }}"  enctype="multipart/form-data" method="post">
            {{csrf_field()}}

               <div class="row"></div>
               <div class="col-md-12"> </div>
               <input type="file" name="image" />
              <div class="col-md-12">
                <button type="submit" class="btn btn-success">Upload </button>
              </div>

           </form>
    </div>
    </div>
    </div>
    </body>
    </div>
    </div>
    </div>
    </html>
