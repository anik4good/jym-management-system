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
                      <a class="navbar-brand" href="#"><span style="color: #FFA300;font-weight: 500;">AMI</span><span style="color: #000;font-weight: 500;">FIT</span></a>
                  </div>
                  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="navbar-nav ml-auto" style="padding-left: 0;">
                          <li class="nav-item">
                              <a class="nav-link active" style="text-decoration: underline; color: #FFA300;" href="#">Home</a>
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
                      <a class="btn btn-outline-warning" style="border-radius: 10px;" href="{{route('register')}}" >Sign Up</a>
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
                  <h2 style="color: #FFA300; font-size: 40px;">CONSULTANCY</h2>
                  <div class="mt-3">
                      <p class="lead" style="font-size: 15px; color: #726f6f;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, accusantium ab! Neque officiis dolorem mollitia exercitationem repudiandae a, voluptates iusto!
                      </p>
                  </div>
                  <div class="button1" type="button" style="box-shadow: 10px 10px 30px #606060;">
                      <a href="#" class="btn-text">Explore Now</a>
                      <span class="btn-icon">
                        <i class="fa fa-arrow-right"></i>
                      </span>
                  </div>
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
              <div class="button1" type="button" style="box-shadow: 10px 10px 30px #273045; float: right; margin: 20px 100px 0px 0px;">
                  <a href="#" class="btn-text">Explore Now</a>
                  <span class="btn-icon">
                  <i class="fa fa-arrow-right"></i>
                </span>
              </div>
              <!-- <button class="btn btn-outline-warning" style="float: right; margin: 20px 100px 0px 0px;">Calculate Now</button> -->
          </div>
      </div>
  </section>
  <!-- membership_section_end -->
  <!-- about_section_start -->
  <section id="about" class="py-5">
      <div class="container">
          <div class="row">
              <div class="col-md-6">
                  <h3 style="color: #FFA300;">ABOUT <span style="color: #013565;">ME</span></h3>
                  <p class="lead" style="font-size: 15px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. At ducimus blanditiis quae nobis minus. Ipsam temporibus hic officia voluptates quas!</p>
                  <p class="lead" style="font-size: 15px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. At ducimus blanditiis quae nobis minus. Ipsam temporibus hic officia voluptates quas!</p>
                  <h5 style="color: #013565; font-weight: 500;">JOIN IN MY SOCIAL LINK</h5>

                  <div class="social_icon">

                      <a href="#"><img src="{{asset('assets/frontend/img/fb.png')}}" alt="fb"></a>
                      <a href="#"><img src="{{asset('assets/frontend/img/insta.png')}}" alt="fb"></a>
                      <a href="#"><img src="{{asset('assets/frontend/img/twitter.png')}}" alt="insta"></a>
                      <a href="#"><img src="{{asset('assets/frontend/img/linkedin.png')}}" alt="insta"></a>

                  </div>

              </div>
              <div class="col-md-6 mt-sm-3 mt-3 mt-md-0">
                  <img class="img-fluid rounded" src="{{asset('assets/frontend/img/11.jpg')}}" alt="Image">
              </div>
          </div>
      </div>
  </section>
  <!-- about_section_end -->
  <!-- service_section_start -->
  <section id="service" class="text-center py-5">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="info-authors mb-5">
                      <h2 class="" style="color: #013565;">WHICH SERVICE <span style="color: #FFA300;">I PROVIDE</span></h2>
                      <p class="lead" style="font-size: 16px;">I provide online & offline consultation, personal training, and corporate group seassions</p>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-12">
                  <div class="card service_box" style="width: 16rem; border-radius: 20px;">
                      <div class="img1">
                          <img class="card-img-top" src="{{asset('assets/frontend/img/1.jpg')}}" alt="Card_image">
                      </div>
                      <div class="img2">
                          <img class="" src="{{asset('assets/frontend/img/18.jpg')}}" alt="Susan Williams">
                      </div>
                      <div class="card-body service_box_body">
                          <p class="card-text">Weight Loss / Management</p>
                      </div>
                  </div>
              </div>

              <div class="col-lg-3 col-md-6 col-sm-12">
                  <div class="card service_box" style="width: 16rem; border-radius: 20px;">
                      <div class="img1">
                          <img class="card-img-top" src="{{asset('assets/frontend/img/2.jpg')}}" alt="Card_image">
                      </div>
                      <div class="img2">
                          <img class="" src="{{asset('assets/frontend/img/18.jpg')}}" alt="Susan Williams">
                      </div>
                      <div class="card-body service_box_body">
                          <p class="card-text">Body Toning & Sculpting</p>
                      </div>
                  </div>
              </div>

              <div class="col-lg-3 col-md-6 col-sm-12">
                  <div class="card service_box" style="width: 16rem; border-radius: 20px;">
                      <div class="img1">
                          <img class="card-img-top" src="{{asset('assets/frontend/img/12.jpg')}}" alt="Card_image">
                      </div>
                      <div class="img2">
                          <img class="" src="{{asset('assets/frontend/img/18.jpg')}}" alt="Susan Williams">
                      </div>
                      <div class="card-body service_box_body">
                          <p class="card-text">Weight Loss/ Management</p>
                      </div>
                  </div>
              </div>

              <div class="col-lg-3 col-md-6 col-sm-12">
                  <div class="card service_box" style="width: 16rem; border-radius: 20px;">
                      <div class="img1">
                          <img class="card-img-top" src="{{asset('assets/frontend/img/7.jpg')}}" alt="Card_image">
                      </div>
                      <div class="img2">
                          <img class="" src="{{asset('assets/frontend/img/18.jpg')}}" alt="Susan Williams">
                      </div>
                      <div class="card-body service_box_body">
                          <p class="card-text">Muscle Building</p>
                      </div>
                  </div>
              </div>


          </div>



          <div class="row mt-4">
              <div class="col-lg-3 col-md-6 col-sm-12">
                  <div class="card service_box" style="width: 16rem; border-radius: 20px;">
                      <div class="img1">
                          <img class="card-img-top" src="{{asset('assets/frontend/img/16.jpg')}}" alt="Card_image">
                      </div>
                      <div class="img2">
                          <img class="" src="{{asset('assets/frontend/img/18.jpg')}}" alt="Susan Williams">
                      </div>
                      <div class="card-body service_box_body">
                          <p class="card-text">Mobility / Flexibility</p>
                      </div>
                  </div>
              </div>

              <div class="col-lg-3 col-md-6 col-sm-12">
                  <div class="card service_box" style="width: 16rem; border-radius: 20px;">
                      <div class="img1">
                          <img class="card-img-top" src="{{asset('assets/frontend/img/11.jpg')}}" alt="Card_image">
                      </div>
                      <div class="img2">
                          <img class="" src="{{asset('assets/frontend/img/18.jpg')}}" alt="Susan Williams">
                      </div>
                      <div class="card-body service_box_body">
                          <p class="card-text">Photoshoot or appearance</p>
                      </div>
                  </div>
              </div>

              <div class="col-lg-3 col-md-6 col-sm-12">
                  <div class="card service_box" style="width: 16rem; border-radius: 20px;">
                      <div class="img1">
                          <img class="card-img-top" src="{{asset('assets/frontend/img/15.jpg')}}" alt="Card_image">
                      </div>
                      <div class="img2">
                          <img class="" src="{{asset('assets/frontend/img/18.jpg')}}" alt="Susan Williams">
                      </div>
                      <div class="card-body service_box_body">
                          <p class="card-text xx">Speed, Strength, Power Development</p>
                      </div>
                  </div>
              </div>

              <div class="col-lg-3 col-md-6 col-sm-12">
                  <div class="card service_box" style="width: 16rem; border-radius: 20px;">
                      <div class="img1">
                          <img class="card-img-top" src="{{asset('assets/frontend/img/8.jpg')}}" alt="Card_image">
                      </div>
                      <div class="img2">
                          <img class="" src="{{asset('assets/frontend/img/18.jpg')}}" alt="Susan Williams">
                      </div>
                      <div class="card-body service_box_body">
                          <p class="card-text">Natritional Advice</p>
                      </div>
                  </div>
              </div>

          </div>

      </div>
  </section>
  <!-- service_section_end -->


  <!-- fitner_membership_section_start -->
  <section id="membership" class="py-5">
      <div class="primary-overlay">
          <div class="container">
              <div class="row">
                  <div class="col-12 text-center">
                      <h2 class="mt-5" style="color: #FFA300;">FITNER MEMBER<span style="color: #fff;">SHIP PRICING</span></h2>
                      <p class="lead text-light" style="font-size: 16px;">I am currently accepting both personal and group contracts. Besic Health and Fitness assessment. </p>
                  </div>
              </div>
              <!-- first_box -->
              <div class="row">
                  <div class="col-md-4">
                      <div class="box d-flex mt-3">
                          <!-- box_left_side -->
                          <div class="left_part" style="border-right: 1px solid#f3f2f2;">
                              <h5 class="mt-4 pl-3" style="color: #013565; ">Classic Membership</h5>
                              <h5 class="mt-4 pl-3 pt-3" style="color: #013565; border-top: 1px solid#f3f2f2;">Basic plan</h5>
                              <h3 class="mt-4 pl-3 pt-3" style="color: #FFA300; border-top: 1px solid#f3f2f2;">$40/Mo</h3>
                              <p class=" pl-3" style="color: #726f6f; font-size: 12px;">Plus tax's & fcos</p>
                          </div>

                          <!-- box_right_side -->
                          <div class="right_part">
                              <div class="d-flex flex-row mt-4">
                                  <div class="p-1 mt-1 ml-1 align-self-start text-light rounded-circle" style="font-size: 6px; background: #013565;">
                                      <i class="fa fa-check"></i>
                                  </div>
                                  <div class="p-1 align-self-end" style="font-size: 11px;">
                                      <p style="color: #606060;">Diet and excercise plan</p>
                                  </div>
                              </div>

                              <div class="d-flex flex-row">
                                  <div class="p-1 mt-1 ml-1 align-self-start text-light rounded-circle" style="font-size: 6px; background: #013565;">
                                      <i class="fa fa-check"></i>
                                  </div>
                                  <div class="p-1 align-self-end" style="font-size: 11px;">
                                      <p style="color: #606060;">Basic Health and Fitness assessment</p>
                                  </div>
                              </div>

                              <div class="d-flex flex-row">
                                  <div class="p-1 mt-1 ml-1 align-self-start text-light rounded-circle" style="font-size: 6px; background: #013565;">
                                      <i class="fa fa-check"></i>
                                  </div>
                                  <div class="p-1 align-self-end" style="font-size: 11px;">
                                      <p style="color: #606060;">Diet and excercise plan</p>
                                  </div>
                              </div>

                              <div class="d-flex flex-row">
                                  <div class="p-1 mt-1 ml-1 align-self-start text-light rounded-circle" style="font-size: 6px; background: #013565;">
                                      <i class="fa fa-check"></i>
                                  </div>
                                  <div class="p-1 align-self-end" style="font-size: 11px;">
                                      <p style="color: #606060;">Lifestyle modification suggestions</p>
                                  </div>
                              </div>
                              <div class="button1" type="button" style="box-shadow: 10px 10px 30px #606060; margin: 5px 9px;">
                                  <a href="#" class="btn-text">Get Started</a>
                                  <span class="btn-icon">
                          <i class="fa fa-arrow-right"></i>
                        </span>
                              </div>

                          </div>

                      </div>
                  </div>


                  <!-- Second_box -->

                  <div class="col-md-4">
                      <div class="box d-flex mt-3" style="background-color: #013565;">
                          <!-- box_left_side -->
                          <div class="left_part" style="border-right: 1px solid#f3f2f2;">
                              <h5 class="mt-4 pl-3" style="color: #013565; color: #fff;">Silver Membership</h5>
                              <h5 class="mt-4 pl-3 pt-3" style="color: #013565; color: #fff; border-top: 1px solid#f3f2f2;">Better Value</h5>
                              <h3 class="mt-4 pl-3 pt-3" style="color: #FFA300; border-top: 1px solid#f3f2f2;">$60/Mo</h3>
                              <p class=" pl-3" style="color: #726f6f; font-size: 12px;">Plus tax's & fcos</p>
                          </div>

                          <!-- box_right_side -->
                          <div class="right_part">
                              <div class="d-flex flex-row mt-4">
                                  <div class="p-1 mt-1 ml-1 align-self-start text-light rounded-circle" style="font-size: 6px; background: #FFA300;">
                                      <i class="fa fa-check"></i>
                                  </div>
                                  <div class="p-1 align-self-end" style="font-size: 11px;">
                                      <p style="color: #fff;">Diet and excercise plan</p>
                                  </div>
                              </div>

                              <div class="d-flex flex-row">
                                  <div class="p-1 mt-1 ml-1 align-self-start text-light rounded-circle" style="font-size: 6px; background: #FFA300;">
                                      <i class="fa fa-check"></i>
                                  </div>
                                  <div class="p-1 align-self-end" style="font-size: 11px;">
                                      <p style="color: #fff;">Basic Health and Fitness assessment</p>
                                  </div>
                              </div>

                              <div class="d-flex flex-row">
                                  <div class="p-1 mt-1 ml-1 align-self-start text-light rounded-circle" style="font-size: 6px; background: #FFA300;">
                                      <i class="fa fa-check"></i>
                                  </div>
                                  <div class="p-1 align-self-end" style="font-size: 11px;">
                                      <p style="color: #fff;">Diet and excercise plan</p>
                                  </div>
                              </div>

                              <div class="d-flex flex-row">
                                  <div class="p-1 mt-1 ml-1 align-self-start text-light rounded-circle" style="font-size: 6px; background: #FFA300;">
                                      <i class="fa fa-check"></i>
                                  </div>
                                  <div class="p-1 align-self-end" style="font-size: 11px;">
                                      <p style="color: #fff;">Lifestyle modification suggestions</p>
                                  </div>
                              </div>
                              <div type="button" style="margin: 5px 20px;">
                                  <a href="#" class="btn btn-outline-warning">Get Started</a>
                              </div>

                          </div>

                      </div>
                  </div>

                  <!-- 3rd_box -->

                  <div class="col-md-4">
                      <div class="box d-flex mt-3">
                          <!-- box_left_side -->
                          <div class="left_part" style="border-right: 1px solid#f3f2f2;">
                              <h5 class="mt-4 pl-3" style="color: #013565; ">Premium Membership</h5>
                              <h5 class="mt-4 pl-3 pt-3" style="color: #013565; border-top: 1px solid#f3f2f2;">Best plan</h5>
                              <h3 class="mt-4 pl-3 pt-3" style="color: #FFA300; border-top: 1px solid#f3f2f2;">$80/Mo</h3>
                              <p class=" pl-3" style="color: #726f6f; font-size: 12px;">Plus tax's & fcos</p>
                          </div>

                          <!-- box_right_side -->
                          <div class="right_part">
                              <div class="d-flex flex-row mt-4">
                                  <div class="p-1 mt-1 ml-1 align-self-start text-light rounded-circle" style="font-size: 6px; background: #013565;">
                                      <i class="fa fa-check"></i>
                                  </div>
                                  <div class="p-1 align-self-end" style="font-size: 11px;">
                                      <p style="color: #606060;">Diet and excercise plan</p>
                                  </div>
                              </div>

                              <div class="d-flex flex-row">
                                  <div class="p-1 mt-1 ml-1 align-self-start text-light rounded-circle" style="font-size: 6px; background: #013565;">
                                      <i class="fa fa-check"></i>
                                  </div>
                                  <div class="p-1 align-self-end" style="font-size: 11px;">
                                      <p style="color: #606060;">Basic Health and Fitness assessment</p>
                                  </div>
                              </div>

                              <div class="d-flex flex-row">
                                  <div class="p-1 mt-1 ml-1 align-self-start text-light rounded-circle" style="font-size: 6px; background: #013565;">
                                      <i class="fa fa-check"></i>
                                  </div>
                                  <div class="p-1 align-self-end" style="font-size: 11px;">
                                      <p style="color: #606060;">Diet and excercise plan</p>
                                  </div>
                              </div>

                              <div class="d-flex flex-row">
                                  <div class="p-1 mt-1 ml-1 align-self-start text-light rounded-circle" style="font-size: 6px; background: #013565;">
                                      <i class="fa fa-check"></i>
                                  </div>
                                  <div class="p-1 align-self-end" style="font-size: 11px;">
                                      <p style="color: #606060;">Lifestyle modification suggestions</p>
                                  </div>
                              </div>
                              <div type="button" style="margin: 5px 20px;">
                                  <a href="#" class="btn btn-outline-warning">Get Started</a>
                              </div>

                          </div>

                      </div>
                  </div>

              </div>



          </div>
      </div>
  </section>
  <!-- fitner_membership_section_start -->


@push('js')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endpush
