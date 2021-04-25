@extends('store/main')

@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('store/_partials/errors')
            <br/>
            <h3 align="center">Add data</h3>
            <br/>
            <form method="post" action="/storeupdate/{{$post->id}}">
                {{csrf_field()}}
                {{method_field('PATCH') }}
                <div class="form-group">
                    <input type="text" name="title" class="form-control" placeholder="iveskite pavadinima"
                           value="{{$post->title}}">
                </div>
                <div class="form-group">
                    <textarea name="content" class="form-control"
                              placeholder="iveskite contenta">{{$post->content}}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-dark"/>
                    SEND IT </button>
                </div>
            </form>

        </div>
    </div>

@endsection
