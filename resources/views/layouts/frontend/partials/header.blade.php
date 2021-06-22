<!-- navbar_start -->
<div class="w-100" style="background-color: #fff;">
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #fff;">
        <div class="container">
            <div class="logo">
                <img src="{{asset('assets/frontend')}}/img/homepage/logo.png" alt="logo" height="">
                <h2 class="navbar-brand" href="#">AMI<span
                    >FIT</span></h2>
            </div>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navbarNav">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" style="text-decoration: underline; color: #FFA300;" href="{{route('frontend.home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">About me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">Package</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">Testimnonials</a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="nav-link text-dark" href="#">Payment</a>
                    </li>
                </ul>
                <button href="form.html" class="btn btn-outline-warning" style="border-radius: 10px;"><a href="{{route('frontend.form')}}">SignUp</a>
                </button>
            </div>
        </div>
    </nav>
</div>
<!-- navbar_end -->
