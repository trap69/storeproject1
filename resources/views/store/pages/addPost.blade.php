@extends('store/main')

@section('content')
    <div class="row">
        @include('store/_partials/errors')
        <div class="col-md-12">
            <br/>
            <h3 align="center">Add data</h3>
            <br/>
            <form method="post" action="{{url('store')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <input type="text" name="title" class="form-control" placeholder="iveskite pavadinima"/>
                </div>
                <div class="form-group"><input type="text" name="content" class="form-control" placeholder="iveskite contenta"/>
                </div>
                <div class="form-group">
                    <select name="category" class="form-select" >
                        <option selected aria-label="Disabled select" disabled>Pasirinkite kategorija</option>
                        <option value="chill">SPICY</option>
                        <option value="grill">Dublis</option>
                        <option value="vanila">Tretus</option>
                        <option value="kebab">kebobas</option>
                    </select></div>
                <div class="form-group custom-file">
                    <input type="file" class="custom-file-input text-black" name="img" id="path">
                    <label class="custom-file-label text-black" for="listingImage">Pasirinkite faila</label>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-dark"/> SEND IT </button>
                </div>
            </form>

        </div>
    </div>

@endsection
