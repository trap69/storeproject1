@extends('blog/main')

@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('blog/_partials/errors')
            <br/>
            <h3 align="center">Add data</h3>
            <br/>
            <form method="post" action="/storeupdate/{{$post->id}}">
                {{csrf_field()}}
                <div class="form-group">
                    <input type="text" name="title" class="form-control" placeholder="iveskite pavadinima"/>
                </div>
                <div class="form-group"><input type="text" name="content" class="form-control" placeholder="iveskite contenta"/>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-dark"/> SEND IT </button>
                </div>
        </form>

    </div>
    </div>

@endsection
