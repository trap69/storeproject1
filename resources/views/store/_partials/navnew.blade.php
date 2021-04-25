<nav class="navbar no-gutters navbar-expand-lg navbar-light bg-light">
    <div class=" col-auto ">
        <a class="navbar-brand " href="http://store.test/">
            <img class="img-fluid" alt="logo" src="http://store.test/images//united-pixelworkers.jpg">
        </a>
    </div>
    <div class="row col-11  ">
        <button class="navbar-toggler  mx-auto" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" >
            <span class="navbar-toggler-icon">sveiki</span>
        </button>
        <div class="col-1 collapse navbar-collapse ml-auto" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="#">Features</a>
                <a class="nav-item nav-link" href="#">Pricing</a>
                <li class="nav-tem"><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                <a class="nav-item nav-link disabled" href="#">Disabled</a>
            </div>
        </div>
        <div class=" col-1  align-self-end  bg-primary ml-auto ">
            <a class="" href="http://store.test/cart">
                <i class="fas fa-cart-arrow-down"></i>
                <button class="btn-primary" height="80" alt="logo"> Cart</button>
            </a>
        </div>
        <div class="row col-12 ml-auto ">
            <div class=" bg-danger  navbar-collapse  h-100 " id="navbarResponsive">
                <ul class="navbar-nav flex-row mb-2 ">
                    <li class="">
                        <a class="nav-link py-1 pr-3" href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li class="">
                        <a class="nav-link py-1 pr-3" href="#"><i class="fab fa-github  fa-inverse"></i></a>
                    </li>
                    <li class="">
                        <a class="nav-link py-1 pr-3" href="#"><i class="fab fa-github  fa-inverse"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
