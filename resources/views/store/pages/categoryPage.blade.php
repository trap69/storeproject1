@extends('store/main')
@section('content')
    @foreach($posts as $post)
        <div class="post-preview">
            <a href="/post/{{$post->id}}">
                <h2 class="post-title">{{$post->title}}</h2>
                <h3 class="post-subtitle">{{$post->content}}</h3>
            </a>
            <p class="post-meta">
                <button class="btn-danger">
                    {{$post->category->sortBy('category')}}
                </button>

                Posted by
                <a href="#!">Start Bootstrap</a>
                {{$post->created_at}}
            </p>
        </div>
        <hr />

    @endforeach
    <!-- Pager-->
    <div class="clearfix"><a class="btn btn-primary float-right" href="#!">Older Posts →</a></div>
@endsection
