@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all()  as $message)
            <li> {{ $message  }}</li>
            @endforeach
    </div>
    @endif