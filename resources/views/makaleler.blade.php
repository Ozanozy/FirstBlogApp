<html>
<head><title>Blog.net</title></head>
<body>
<div class="container">
<h2>Makalelerim</h2>
@foreach($makaleler as $makalem)
<div> <a href="makale/{{$makalem->makale_id}}">{{$makalem->baslik }}</a> </div>
@endforeach
</div>

</body>
</html>