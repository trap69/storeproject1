<!DOCTYPE html>
<html lang="en">
@extends('store/_partials/head')
<body>
<!-- Navigation-->
@include('store/_partials/navnew')
<!-- Page Header-->
@include('store/_partials/header')
<!-- Main Content-->
<tr>
    <th scope="col" class="border-bottom-0">#</th>
    <th scope="col" class="border-bottom-0">First Name</th>
    <th scope="col" class="border-bottom-0">Last Name</th>
    <th scope="col" class="border-bottom-0">Country</th>
    <th scope="col" class="border-bottom-0">City</th>
    <th scope="col" class="border-bottom-0">Phone</th>
</tr>
</thead>

@foreach($posts for $post)
    <tbody>

    <tr>
        <td>{{$post->title}}</td>
        <td>{{$post->title}}</td>
        <td>{{$post->title}}</td>
        <td>Benin</td>
        <td>Ripabottoni</td>
        <td>1-512-760-9094</td>
    </tr>

    <tr>
        <td>2</td>
        <td>Clark</td>
        <td>Angela</td>
        <td>Estonia</td>
        <td>Borghetto di Vara</td>
        <td>1-660-850-1647</td>
    </tr>
    @endforeach
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                @yield('content')
            </div>
        </div>
    </div>
    <hr />


    <!-- Footer-->
    @include('store/_partials/footer')
    <!-- Bootstrap core JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Core theme JS-->
    <script src="{{URL::asset('js/styles.js')}}"></script>
</body>
</html>
