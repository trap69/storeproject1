@extends('store/main')
@section('content')

    @foreach($posts as $post)
        <div class="post-preview" action="{{url('post')}}">

                <h2 class="post-title">{{$post->title}}</h2>
                <h3 class="post-subtitle">{{$post->content}}</h3>
            </a>
            <div>
                <img src="{{asset($post->path)}}">
            </div>
            </p>
        </div>
        <hr/>
    @endforeach
    <tr>
        <th scope="col" class="border-bottom-0">#</th>
        <th scope="col" class="border-bottom-0">First Name</th>
        <th scope="col" class="border-bottom-0">Last Name</th>
        <th scope="col" class="border-bottom-0">Country</th>
        <th scope="col" class="border-bottom-0">City</th>
        <th scope="col" class="border-bottom-0">Phone</th>
    </tr>
    </thead>


    <tbody>
    @foreach($posts as $row)
        <tr>
            <td>{{$row('id')}}</td>
            <td>{{$row('id')}}</td>
            <td>{{$row('id')}}</td>
            <td>Benin</td>
            <td>Ripabottoni</td>
            <td>1-512-760-9094</td>
        </tr>
    @endforeach
    <tr>
        <td>2</td>
        <td>Clark</td>
        <td>Angela</td>
        <td>Estonia</td>
        <td>Borghetto di Vara</td>
        <td>1-660-850-1647</td>
    </tr>
    <!-- Pager-->
    <div class="clearfix"><a class="btn btn-primary float-right" href="#!">Older Posts →</a></div>
@endsection
