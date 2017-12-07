@foreach($comments as $comment)
    <div class="media">
        <a class="pull-left" href="#"></a>
        <div class="media-body">
        <h4 class="media-heading">
        <h3>{{$comment->makale_id}}</h3> <small>{{$comment->comment_text}}</small>
        </h4>
        </div>
    </div>
@endforeach




