<nav class="navbar row  navbar-expand-md navbar-dark bg-dark fixed-top  m-0 p-0  " id="mainNav">
    <div class=" no-gutter container-fluid mw-100 m-0 p-0 mb-0">
        <div class=" col-1 m-0 p-0   mx-auto">
            <a class=" navbar-brand m-0 p-0" href="http://store.test/">
                <img class="  mx-auto  " height="110" alt="logo" src="http://store.test/images//united-pixelworkers.jpg">
            </a>
        </div>
        <div class=" no-gutter col-sm-11 col-md-11 col-mx-11 mb-0  mx-auto">
            <button class="navbar-toggler navbar-toggler fixed-left" type="button" data-toggle="collapse"
                    data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation">
                <i class="navbar-toggler-icon"></i>
            </button>
            <div class="row mb-0">
                <div class="collapse col-sm-11 navbar-collapse  m-0 mb-0 p-0 mx-auto " id="navbarResponsive">
                    <ul class="navbar-nav ">
                        <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="category">Category</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="add-post">Add Post</a></li>
                        <li class="nav-tem"><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    </ul>
                </div>
                <div class="col-sm-1 m-0 p-0 mb-0 bg-primary  mx-auto">
                    <a class="" href="http://store.test/cart">
                        <i class="fas fa-cart-arrow-down"></i>
                        <button class="btn-primary" height="80" alt="logo"> Cart</button>
                    </a>
                </div>
            </div>
            <div class="row mb-0">
                <div class=" bg-danger col-sm-12 navbar-collapse m-0 p-0 h-100 " id="navbarResponsive">
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
    </div>

</nav>
