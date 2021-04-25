<!DOCTYPE html>
<html lang="en">
@include('store/_partials/head')
<body>
<!-- Navigation-->
@include('store/_partials/navnew')
<!-- Page Header-->
@include('store/_partials/header')
<!-- Main Content-->
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
