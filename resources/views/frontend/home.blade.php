@extends('layouts.frontend.app')

@push('css')
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- google_font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- font_awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/regular.min.css" integrity="sha512-Nqct4Jg8iYwFRs/C34hjAF5og5HONE2mrrUV1JZUswB+YU7vYSPyIjGMq+EAQYDmOsMuO9VIhKpRUa7GjRKVlg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush
  <body>
    <!-- navbar_start -->
    <div class="w-100" style="background-color: #fff;">
      <div class="container">
        <nav class="navbar navbar-expand-md fixed-top" style="background-color: #fff;">
          <div class="container">
            <div class="logo">
              <img src="{{asset('assets/frontend/img/logo.png')}}" style="width: 50px;" alt="logo">
              <a class="navbar-brand" href="#"><span style="color: #FBB12F;font-weight: 500;">AMI</span><span style="color: #000;font-weight: 500;">FIT</span></a>
            </div>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav">
              <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto" style="padding-left: 0;">
                <li class="nav-item">
                  <a class="nav-link active" style="text-decoration: underline; color: #FBB12F;" href="#">Home</a>
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
                <button class="btn btn-outline-warning" style="border-radius: 10px;">Sign Up</button>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <!-- navbar_end -->
    <!-- header_section_start -->
    <section id="header_section" class="bg-light pt-5">
      <div class="container">
          <div class="row">
              <div class="col-md-12 col-lg-6 text-dark" style="margin-top: 7rem !important;">
                <div class="headline">
                  <h2 style="color: #013565; font-size: 40px; font-weight: 500; display: inline;">AMIFIT</h2>
                  <img src="{{asset('assets/frontend/img/gym-icon.png')}}" class="mb-3" style="width: 100px;" alt="gymlogo">
                  <h2 style="color: #013565; font-size: 40px; font-weight: 500; display: inline;">FITNESS</h2>
                </div>
                <h2 style="color: #FBB12F; font-size: 40px;">CONSULTANCY</h2>
                    <div class="mt-3">
                        <p class="lead" style="font-size: 15px; color: #726f6f;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, accusantium ab! Neque officiis dolorem mollitia exercitationem repudiandae a, voluptates iusto!
                        </p>
                    </div>
                    <button class="btn btn-warning text-light">Explore Now</button>
              </div>
              <div class="col-md-12 col-lg-6">
                <img class="img-fluid" src="{{asset('assets/frontend/img/Male-Gym-Fitness.png')}}" alt="img">
            </div>
          </div>
      </div>
  </section>
  <!-- header_section_end -->
  <!-- membership_section_start -->
  <section id="membership_section" class="">
        <div class="row">
            <div class="col-md-5" style="background-color: #FFA300;">
              <div class="d-flex">
                  <img class="img-fluid" style="width: 300px; display: inline;" src="{{asset('assets/frontend/img/bg.png')}}" alt="img">
                <div class="text">
                  <h2 class="mt-5" style="color: #fff; font-size: 28px; width: 245px;">MEMBERSHIP STARTS FROM <span style="color: #013565;">$45</span> PER MONTH.</h2>
                  <p class="lead text-light" style="font-size: 13px; width: 80%; float: right;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit corporis architecto inventore libero? Nisi architecto veritatis fuga beatae vero minus explicabo.</p>
                  <button class="btn btn-outline-light px-4 float-right">Explore Now</button>
              </div>
              </div>
            </div>
            <div class="col-md-7 mt-sm-3 mt-3 mt-md-0" style="background-color: #013565;">
              <h4 class="text-light mt-5" style="font-weight: 400; width: 350px;">CALCULATE YOUR BMI CALCULATE BODY.</h4>
              <div class="calculate">
                <div class="d-flex flex-row">
                  <div class="p-2">
                    <input class="form form-control" placeholder="Height/Inch..." type="text">
                  </div>
                  <div class="p-2">
                    <input class="form form-control" placeholder="Weight..." type="text">
                  </div>
                  <div class="p-2">
                    <input class="form form-control" placeholder="Age..." type="text">
                  </div>
                </div>
                <div class="d-flex flex-row">
                  <div class="p-2">
                    <select class="form-control form-select" style="width: 212px;">
                      <option selected>Gender</option>
                      <option value="1">Male</option>
                      <option value="2">Female</option>
                      <option value="3">Other</option>
                    </select>
                  </div>
                  <div class="p-2">
                    <select class="form-control form-select" style="width: 212px;">
                      <option selected>Selet Activities</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                    </select>
                  </div>
                  <div class="p-2">
                    <input class="form form-control" placeholder="Occupation" type="text">
                  </div>
                </div>
              </div>
              <button class="btn btn-outline-warning" style="float: right; margin: 20px 100px 0px 0px;">Calculate Now</button>
            </div>
        </div>
</section>
  <!-- membership_section_end -->


@push('js')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endpush
