<!DOCTYPE html>
<html lang="en">
@include('store/_partials/head')
<body>
<!-- Navigation-->
@include('store/_partials/navnew')
<!-- Page Header-->
@include('store/_partials/header')

@section('content')
    @foreach($posts as $post)
    @endforeach
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
@include('store/_partials/footer')
<!-- Bootstrap core JS-->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Core theme JS-->
<script src="{{URL::asset('js/styles.js')}}"></script>
</body>
</html>
