@extends('blog_theme/main')
@section('content')

    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <h2>{{$post->title}}</h2>
            <p>{{{$post->path}}}</p>
        </div>
    </div>
    <div class="card">
        <div class="card-block">
            <form action="/post/{{$post->id}}/comment" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <textarea name="body" placeholder="Jusu komentaras" class="form-control">
                    </textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-dark">Rodyti</button>
                </div>
            </form>
        </div>
    </div>
<div class="comments">
    @foreach($post->comments as $comment)
        <li>{{$comment}}</li>
    @endforeach
</div>
@endsection
