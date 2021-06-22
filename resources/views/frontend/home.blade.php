@extends('layouts.frontend.app')

@push('css')

@endpush
<body>
<!-- navbar_start -->
@include('layouts.frontend.partials.header')
<!-- navbar_end -->
<!-- header_section_start -->
<section id="header_section" class="bg-light pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-6 text-dark" style="margin-top: 7rem !important;">
                <div class="headline">
                    <h2>AMIFIT</h2>
                    <img src="{{asset('assets/frontend')}}/img/homepage/gym-icon.png" class="mb-3 mx-2" alt="gymlogo">
                    <h2>FITNESS</h2>
                </div>
                <h2 style="color: #FFA300; font-size: 40px;">CONSULTANCY</h2>
                <div class="headline_p mt-3">
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. Distinctio, accusantium ab! Neque officiis dolorem mollitia exercitationem
                                    repudiandae a, voluptates
                                    iusto!
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
                <img class="img-fluid" src="{{asset('assets/frontend')}}/img/homepage/Male-Gym-Fitness.png" alt="img">
            </div>
        </div>
    </div>
</section>
<!-- header_section_end -->
<!-- membership_section_start -->
<section id="membership">
    <div class="row">
        <div class="col-md-5 col-sm-12" style="background-color: #FFA300;">
            <div class="img d-flex">
                <img class="img1 img-fluid d-none d-xl-block" src="{{asset('assets/frontend')}}/img/homepage/bg.png"
                     alt="img">
                <div class="text1 pl-3">
                    <h2 class="mt-5">MEMBERSHIP STARTS FROM <span>$45.5</span> PER MONTH.</h2>
                    <p class="lead text-light mr-3">Lorem ipsum dolor sit
                                                    amet consectetur adipisicing elit. Impedit corporis architecto
                                                    inventore libero? Nisi architecto veritatis
                                                    fuga beatae vero minus explicabo.</p>
                    <button class="btn btn-outline-light mb-3 float-right">Explore Now</button>
                    <img class="img_1" src="{{asset('assets/frontend')}}/img/homepage/gym-icon.png" alt="gym-icon">
                    <img class="img_2" src="{{asset('assets/frontend')}}/img/homepage/clipart.png" alt="clipart">
                </div>
            </div>
        </div>
        <div class="calculate col-md-7">
            <div class="overlay">
                <h4 class="text-light mt-5 ml-3">CALCULATE YOUR BMI CALCULATE BODY.
                </h4>
                <div class="calculate1">
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
                            <div class="select-container select1">
                                <select class="form-control ">
                                    <option class="yy" value="" selected>Gender</option>
                                    <option value="">Male</option>
                                    <option value="">Female</option>
                                    <option value="">Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="p-2">
                            <div class="select-container select1">
                                <select class="form-control ">
                                    <option class="yy" value="" selected>Selet Activities</option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                </select>
                            </div>
                        </div>
                        <div class="p-2">
                            <input class="form form-control" placeholder="Occupation" type="text">
                        </div>
                    </div>
                </div>
                <div class="button1" type="button"
                     style="box-shadow: 10px 10px 30px #273045; float: right; margin: 20px 120px 10px 0px;">
                    <a href="#" class="btn-text">Calculate Now</a>
                    <span class="btn-icon">
              <i class="fa fa-arrow-right"></i>
            </span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- membership_section_end -->
<!-- about_section_start -->
<section id="about" class="py-5">
    <div class="container">
        <div class="row">
            <div class="about1 col-md-6">
                <h3>ABOUT <span>ME</span></h3>
                <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. At ducimus
                                blanditiis quae nobis minus. Ipsam temporibus hic officia voluptates quas!</p>
                <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. At ducimus
                                blanditiis quae nobis minus. Ipsam temporibus hic officia voluptates quas!</p>
                <h5>JOIN IN MY SOCIAL LINK</h5>
                <div class="social_icon">
                    <a href="#"><img src="{{asset('assets/frontend')}}/img/homepage/s_icon/fb.png" alt="fb"></a>
                    <a href="#"><img src="{{asset('assets/frontend')}}/img/homepage/s_icon/insta.png" alt="fb"></a>
                    <a href="#"><img src="{{asset('assets/frontend')}}/img/homepage/s_icon/twitter.png" alt="twitter"></a>
                    <a href="#"><img src="{{asset('assets/frontend')}}/img/homepage/s_icon/linkedin.png" alt="insta"></a>
                </div>
            </div>
            <div class="col-md-6 mt-sm-3 mt-3 mt-md-0">
                <img class="img-fluid rounded" src="{{asset('assets/frontend')}}/img/homepage/16.jpg" alt="Image">
            </div>
        </div>
    </div>
</section>
<!-- about_section_end -->
<!-- service_section_start -->

<!-- service_section_start -->
<section id="service" class="text-center py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="info-authors mb-5">
                    <h2 class="" style="color: #013565;">WHICH SERVICE <span style="color: #FFA300;">I PROVIDE</span></h2>
                    <p class="lead" style="font-size: 16px;">I provide online & offline consultation, personal training, and
                                                             corporate group seassions</p>
                </div>
            </div>
        </div>

        <div class="section ourTeam">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 i">
                    <div class="c text-center">
                        <div class="wrap">
                            <img src="{{asset('assets/frontend')}}/img/homepage/1.jpg" alt="#" width="270" height="270" class="img-responsive">
                            <div class="info">
                                <img src="{{asset('assets/frontend')}}/img/homepage/round_dumble.jpg" alt="">
                                <h4 class="position">Weight Loss/Management</h4>
                            </div>
                        </div>
                        <div class="more">
                            <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed odit quas rerum nobis possimus dolore ratione veritatis, architecto quia id ad tempore at suscipit praesentium aspernatur neque esse? Voluptas, est.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 i">
                    <div class="c text-center">
                        <div class="wrap">
                            <img src="{{asset('assets/frontend')}}/img/homepage/2.jpg" alt="#" width="270" height="270" class="img-responsive">
                            <div class="info">
                                <img src="{{asset('assets/frontend')}}/img/homepage/round_dumble.jpg" alt="">
                                <h4 class="position">Body Toning & Sculpting</h4>
                            </div>
                        </div>
                        <div class="more">
                            <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed odit quas rerum nobis possimus dolore ratione veritatis, architecto quia id ad tempore at suscipit praesentium aspernatur neque esse? Voluptas, est.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 i">
                    <div class="c text-center">
                        <div class="wrap">
                            <img src="{{asset('assets/frontend')}}/img/homepage/3.png" alt="#" width="270" height="270" class="img-responsive">
                            <div class="info">
                                <img src="{{asset('assets/frontend')}}/img/homepage/round_dumble.jpg" alt="">
                                <h4 class="position">Resistance Training</h4>
                            </div>
                        </div>
                        <div class="more">
                            <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed odit quas rerum nobis possimus dolore ratione veritatis, architecto quia id ad tempore at suscipit praesentium aspernatur neque esse? Voluptas, est.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 i">
                    <div class="c text-center">
                        <div class="wrap">
                            <img src="{{asset('assets/frontend')}}/img/homepage/4.jpg" alt="#" width="270" height="270" class="img-responsive">
                            <div class="info">
                                <img src="{{asset('assets/frontend')}}/img/homepage/round_dumble.jpg" alt="">
                                <h4 class="position">Muscle Building</h4>
                            </div>
                        </div>
                        <div class="more">
                            <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed odit quas rerum nobis possimus dolore ratione veritatis, architecto quia id ad tempore at suscipit praesentium aspernatur neque esse? Voluptas, est.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
            <div class="section ourTeam">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 i">
                        <div class="c text-center">
                            <div class="wrap">
                                <img src="{{asset('assets/frontend')}}/img/homepage/5.jpg" alt="#" width="270" height="270" class="img-responsive">
                                <div class="info">
                                    <img src="{{asset('assets/frontend')}}/img/homepage/round_dumble.jpg" alt="">
                                    <h4 class="position">Mobility/Flexibility</h4>
                                </div>
                            </div>
                            <div class="more">
                                <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed odit quas rerum nobis possimus dolore ratione veritatis, architecto quia id ad tempore at suscipit praesentium aspernatur neque esse? Voluptas, est.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 i">
                        <div class="c text-center">
                            <div class="wrap">
                                <img src="{{asset('assets/frontend')}}/img/homepage/6.jpg" alt="#" width="270" height="270" class="img-responsive">
                                <div class="info">
                                    <img src="{{asset('assets/frontend')}}/img/homepage/round_dumble.jpg" alt="">
                                    <h4 class="position">Photoshoot or appearance</h4>
                                </div>
                            </div>
                            <div class="more">
                                <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed odit quas rerum nobis possimus dolore ratione veritatis, architecto quia id ad tempore at suscipit praesentium aspernatur neque esse? Voluptas, est.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 i">
                        <div class="c text-center">
                            <div class="wrap">
                                <img src="{{asset('assets/frontend')}}/img/homepage/7.jpg" alt="#" width="270" height="270" class="img-responsive">
                                <div class="info">
                                    <img src="{{asset('assets/frontend')}}/img/homepage/round_dumble.jpg" alt="">
                                    <h4 class="position">Speed, Strength, Power Development</h4>
                                </div>
                            </div>
                            <div class="more">
                                <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed odit quas rerum nobis possimus dolore ratione veritatis, architecto quia id ad tempore at suscipit praesentium aspernatur neque esse? Voluptas, est.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 i">
                        <div class="c text-center">
                            <div class="wrap">
                                <img src="{{asset('assets/frontend')}}/img/homepage/8.jpg" alt="#" width="270" height="270" class="img-responsive">
                                <div class="info">
                                    <img src="{{asset('assets/frontend')}}/img/homepage/round_dumble.jpg" alt="">
                                    <h4 class="position">Nutritional Advice</h4>
                                </div>
                            </div>
                            <div class="more">
                                <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed odit quas rerum nobis possimus dolore ratione veritatis, architecto quia id ad tempore at suscipit praesentium aspernatur neque esse? Voluptas, est.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </div>
</section>
<!-- service_section_end -->
{{--<section id="service" class="text-center py-5">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-12">--}}
{{--                <div class="info-authors mb-5">--}}
{{--                    <h2 class="" style="color: #013565;">WHICH SERVICE <span style="color: #FFA300;">I PROVIDE</span>--}}
{{--                    </h2>--}}
{{--                    <p class="lead" style="font-size: 16px;">I provide online & offline consultation, personal training,--}}
{{--                                                             and--}}
{{--                                                             corporate group seassions</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mt-3 md-sm-0">--}}
{{--                <div class="card service_box">--}}
{{--                    <div class="img1">--}}
{{--                        <img class="card-img-top" src="{{asset('assets/frontend')}}/img/homepage/1.jpg" alt="Card_image">--}}
{{--                    </div>--}}
{{--                    <div class="img2">--}}
{{--                        <img class="img-fluid" style="background-color: #CC8A14;" src="{{asset('assets/frontend')}}/img/homepage/round_dumble.jpg"--}}
{{--                             alt="Susan Williams">--}}
{{--                    </div>--}}
{{--                    <div class="card-body service_box_body">--}}
{{--                        <p class="card-text">Weight Loss / Management</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mt-3 md-sm-0">--}}
{{--                <div class="card service_box">--}}
{{--                    <div class="img1">--}}
{{--                        <img class="card-img-top" src="{{asset('assets/frontend')}}/img/homepage/2.jpg" alt="Card_image">--}}
{{--                    </div>--}}
{{--                    <div class="img2">--}}
{{--                        <img class="" src="{{asset('assets/frontend')}}/img/homepage/round_dumble.jpg" alt="Susan Williams">--}}
{{--                    </div>--}}
{{--                    <div class="card-body service_box_body">--}}
{{--                        <p class="card-text">Body Toning & Sculpting</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mt-3 md-sm-0">--}}
{{--                <div class="card service_box2" style="width: 16rem; border-radius: 20px;">--}}
{{--                    <div class="d-flex py-3">--}}
{{--                        <img class="img-fluid" src="{{asset('assets/frontend')}}/img/homepage/fruit.jpg" style="filter: blur(5px);" alt="img">--}}
{{--                        <div class="service_body2">--}}
{{--                            <img src="{{asset('assets/frontend')}}/img/homepage/37497.png" alt="">--}}
{{--                            <h5 style="font-size: 16px;">Resistance Training</h5>--}}
{{--                            <p style="font-size: 13px; width: 95%; margin-top: 20px;">Lorem ipsum dolor sit amet--}}
{{--                                                                                      consectetur,--}}
{{--                                                                                      adipisicing elit. Ullam sit vero--}}
{{--                                                                                      cumque neque voluptate, ex--}}
{{--                                                                                      necessitatibus exercitationem a--}}
{{--                                                                                      accusamus--}}
{{--                                                                                      autem, nostrum excepturi odit--}}
{{--                                                                                      maxime! Neque?</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mt-3 md-sm-0">--}}
{{--                <div class="card service_box">--}}
{{--                    <div class="img1">--}}
{{--                        <img class="card-img-top" src="{{asset('assets/frontend')}}/img/homepage/4.jpg" alt="Card_image">--}}
{{--                    </div>--}}
{{--                    <div class="img2">--}}
{{--                        <img class="" src="{{asset('assets/frontend')}}/img/homepage/round_dumble.jpg" alt="Susan Williams">--}}
{{--                    </div>--}}
{{--                    <div class="card-body service_box_body">--}}
{{--                        <p class="card-text">Muscle Building</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row mt-4">--}}
{{--            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mt-3 md-sm-0">--}}
{{--                <div class="card service_box">--}}
{{--                    <div class="img1">--}}
{{--                        <img class="card-img-top" src="{{asset('assets/frontend')}}/img/homepage/5.jpg" alt="Card_image">--}}
{{--                    </div>--}}
{{--                    <div class="img2">--}}
{{--                        <img class="" src="{{asset('assets/frontend')}}/img/homepage/round_dumble.jpg" alt="Susan Williams">--}}
{{--                    </div>--}}
{{--                    <div class="card-body service_box_body">--}}
{{--                        <p class="card-text">Mobility / Flexibility</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mt-3 md-sm-0">--}}
{{--                <div class="card service_box">--}}
{{--                    <div class="img1">--}}
{{--                        <img class="card-img-top" src="{{asset('assets/frontend')}}/img/homepage/6.jpg" alt="Card_image">--}}
{{--                    </div>--}}
{{--                    <div class="img2">--}}
{{--                        <img class="" src="{{asset('assets/frontend')}}/img/homepage/round_dumble.jpg" alt="Susan Williams">--}}
{{--                    </div>--}}
{{--                    <div class="card-body service_box_body">--}}
{{--                        <p class="card-text">Photoshoot or appearance</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mt-3 md-sm-0">--}}
{{--                <div class="card service_box">--}}
{{--                    <div class="img1">--}}
{{--                        <img class="card-img-top" src="{{asset('assets/frontend')}}/img/homepage/7.jpg" alt="Card_image">--}}
{{--                    </div>--}}
{{--                    <div class="img2">--}}
{{--                        <img class="" src="{{asset('assets/frontend')}}/img/homepage/round_dumble.jpg" alt="Susan Williams">--}}
{{--                    </div>--}}
{{--                    <div class="card-body service_box_body">--}}
{{--                        <p class="card-text xx">Speed, Strength, Power Development</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mt-3 md-sm-0">--}}
{{--                <div class="card service_box">--}}
{{--                    <div class="img1">--}}
{{--                        <img class="card-img-top" src="{{asset('assets/frontend')}}/img/homepage/8.jpg" alt="Card_image">--}}
{{--                    </div>--}}
{{--                    <div class="img2">--}}
{{--                        <img class="" src="{{asset('assets/frontend')}}/img/homepage/round_dumble.jpg" alt="Susan Williams">--}}
{{--                    </div>--}}
{{--                    <div class="card-body service_box_body">--}}
{{--                        <p class="card-text">Nutritional Advice</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- service_section_end -->
<!-- fitner_membership_section_start -->
<section id="fitner_membership" class="py-5">
    <div class="primary-overlay">
        <div class="container">
            <div class="row">
                <div class="fm_t col-12 text-center">
                    <h2 class="mt-5">FITNER MEMBER<span>SHIP PRICING</span></h2>
                    <p class="lead text-light">I am currently accepting both personal and group
                                               contracts. Besic Health and Fitness assessment. </p>
                </div>
            </div>
            <!-- first_box -->
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <div class="box d-flex mt-3">
                        <!-- box_left_side -->
                        <div class="left_part" style="border-right: 1px solid#f3f2f2;">
                            <h5 class="mt-4 pl-3" style="color: #013565; ">Classic Membership</h5>
                            <h5 class="mt-4 pl-3 pt-3" style="color: #013565; border-top: 1px solid#f3f2f2;">Basic
                                                                                                             plan</h5>
                            <h3 class="mt-4 pl-3 pt-3" style="color: #FFA300; border-top: 1px solid#f3f2f2;">$40/Mo</h3>
                            <p class=" pl-3" style="color: #726f6f; font-size: 12px;">Plus tax's & fcos</p>
                        </div>
                        <!-- box_right_side -->
                        <div class="right_part">
                            <div class="d-flex flex-row mt-4">
                                <div class="p-1 mt-1 ml-1 align-self-start text-light rounded-circle"
                                     style="font-size: 6px; background: #013565;">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="p-1 align-self-end" style="font-size: 10px;">
                                    <p style="color: #606060;">Diet and excercise plan</p>
                                </div>
                            </div>
                            <div class="d-flex flex-row">
                                <div class="p-1 mt-1 ml-1 align-self-start text-light rounded-circle"
                                     style="font-size: 6px; background: #013565;">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="p-1 align-self-end" style="font-size: 10px;">
                                    <p style="color: #606060;">Basic Health and Fitness assessment</p>
                                </div>
                            </div>
                            <div class="d-flex flex-row">
                                <div class="p-1 mt-1 ml-1 align-self-start text-light rounded-circle"
                                     style="font-size: 6px; background: #013565;">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="p-1 align-self-end" style="font-size: 10px;">
                                    <p style="color: #606060;">Diet and excercise plan</p>
                                </div>
                            </div>
                            <div class="d-flex flex-row">
                                <div class="p-1 mt-1 ml-1 align-self-start text-light rounded-circle"
                                     style="font-size: 6px; background: #013565;">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="p-1 align-self-end" style="font-size: 10px;">
                                    <p style="color: #606060;">Lifestyle modification suggestions</p>
                                </div>
                            </div>
                            <div class="button1" type="button"
                                 style="box-shadow: 10px 10px 30px #606060; margin: 5px 9px;">
                                <a href="#" class="btn-text">Get Started</a>
                                <span class="btn-icon">
                    <i class="fa fa-arrow-right"></i>
                  </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Second_box -->
                <div class="col-md-12 col-lg-4">
                    <div class="box d-flex mt-3" style="background-color: #013565;">
                        <!-- box_left_side -->
                        <div class="left_part" style="border-right: 1px solid#525252;">
                            <h5 class="mt-4 pl-3" style="color: #013565; color: #fff;">Silver Membership</h5>
                            <h5 class="mt-4 pl-3 pt-3"
                                style="color: #013565; color: #fff; border-top: 1px solid#525252;">Better
                                                                                                   Value</h5>
                            <h3 class="mt-4 pl-3 pt-3" style="color: #FFA300; border-top: 1px solid#525252;">$60/Mo</h3>
                            <p class=" pl-3" style="color: #726f6f; font-size: 12px;">Plus tax's & fcos</p>
                        </div>
                        <!-- box_right_side -->
                        <div class="right_part">
                            <div class="d-flex flex-row mt-4">
                                <div class="p-1 mt-1 ml-1 align-self-start text-light rounded-circle"
                                     style="font-size: 6px; background: #FFA300;">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="p-1 align-self-end" style="font-size: 10px;">
                                    <p style="color: #fff;">Diet and excercise plan</p>
                                </div>
                            </div>
                            <div class="d-flex flex-row">
                                <div class="p-1 mt-1 ml-1 align-self-start text-light rounded-circle"
                                     style="font-size: 6px; background: #FFA300;">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="p-1 align-self-end" style="font-size: 10px;">
                                    <p style="color: #fff;">Basic Health and Fitness assessment</p>
                                </div>
                            </div>
                            <div class="d-flex flex-row">
                                <div class="p-1 mt-1 ml-1 align-self-start text-light rounded-circle"
                                     style="font-size: 6px; background: #FFA300;">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="p-1 align-self-end" style="font-size: 10px;">
                                    <p style="color: #fff;">Diet and excercise plan</p>
                                </div>
                            </div>
                            <div class="d-flex flex-row">
                                <div class="p-1 mt-1 ml-1 align-self-start text-light rounded-circle"
                                     style="font-size: 6px; background: #FFA300;">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="p-1 align-self-end" style="font-size: 10px;">
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
                <div class="col-md-12 col-lg-4">
                    <div class="box d-flex mt-3">
                        <!-- box_left_side -->
                        <div class="left_part" style="border-right: 1px solid#f3f2f2;">
                            <h5 class="mt-4 pl-3" style="color: #013565; ">Premium Membership</h5>
                            <h5 class="mt-4 pl-3 pt-3" style="color: #013565; border-top: 1px solid#f3f2f2;">Best
                                                                                                             plan</h5>
                            <h3 class="mt-4 pl-3 pt-3" style="color: #FFA300; border-top: 1px solid#f3f2f2;">$80/Mo</h3>
                            <p class=" pl-3" style="color: #726f6f; font-size: 12px;">Plus tax's & fcos</p>
                        </div>
                        <!-- box_right_side -->
                        <div class="right_part">
                            <div class="d-flex flex-row mt-4">
                                <div class="p-1 mt-1 ml-1 align-self-start text-light rounded-circle"
                                     style="font-size: 6px; background: #013565;">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="p-1 align-self-end" style="font-size: 10px;">
                                    <p style="color: #606060;">Diet and excercise plan</p>
                                </div>
                            </div>
                            <div class="d-flex flex-row">
                                <div class="p-1 mt-1 ml-1 align-self-start text-light rounded-circle"
                                     style="font-size: 6px; background: #013565;">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="p-1 align-self-end" style="font-size: 10px;">
                                    <p style="color: #606060;">Basic Health and Fitness assessment</p>
                                </div>
                            </div>
                            <div class="d-flex flex-row">
                                <div class="p-1 mt-1 ml-1 align-self-start text-light rounded-circle"
                                     style="font-size: 6px; background: #013565;">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="p-1 align-self-end" style="font-size: 10px;">
                                    <p style="color: #606060;">Diet and excercise plan</p>
                                </div>
                            </div>
                            <div class="d-flex flex-row">
                                <div class="p-1 mt-1 ml-1 align-self-start text-light rounded-circle"
                                     style="font-size: 6px; background: #013565;">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="p-1 align-self-end" style="font-size: 10px;">
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
<!-- fitner_membership_section_end -->
<!-- clint_portfolio_start -->
<section id="clint_portfolio" class="py-5">
    <div class="container">
        <div class="portfolio_text row">
            <div class="col-12 text-center">
                <h2>CLINT <span>PORTFOLIO</span></h2>
                <p>In regard using gym work experience to help with my collage course I was able to
                   do so, I would attend and participate in spinning classes, aerobics classes.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="portfolio_box d-flex py-3">
                    <img src="{{asset('assets/frontend')}}/img/homepage/9.jpeg" style="filter: blur(3px);" alt="img">
                    <div class="portfolio_body">
                        <h4>Arya Shojaei</h4>
                        <p>Wrestler. US</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="portfolio_box d-flex py-3">
                    <img src="{{asset('assets/frontend')}}/img/homepage/10.jpeg" alt="img">
                    <div class="portfolio_body" style="background-color: rgba(0,0,0, 0.5);">
                        <h4>Farhaan Muhib</h4>
                        <p>Model</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="portfolio_box d-flex py-3">
                    <img src="{{asset('assets/frontend')}}/img/homepage/11.jpeg" alt="img">
                    <div class="portfolio_body" style="background-color: rgba(0,0,0, 0.5);">
                        <h4>Fatema Zaman</h4>
                        <p>Business Woman</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="portfolio_box d-flex py-3">
                    <img src="{{asset('assets/frontend')}}/img/homepage/12.jpeg" alt="img">
                    <div class="portfolio_body" style="background-color: rgba(0,0,0, 0.5);">
                        <h4>Mustafa Munawar</h4>
                        <p>Fitness Model</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="portfolio_box d-flex py-3">
                    <img src="{{asset('assets/frontend')}}/img/homepage/13.jpeg" alt="img">
                    <div class="portfolio_body" style="background-color: rgba(0,0,0, 0.5);">
                        <h4>Atiq Aziz Sadat</h4>
                        <p>Corporate Professional</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="portfolio_box d-flex py-3">
                    <img src="{{asset('assets/frontend')}}/img/homepage/14.jpeg" alt="img">
                    <div class="portfolio_body" style="background-color: rgba(0,0,0, 0.5);">
                        <h4>Fatema Zaman</h4>
                        <p>Freestyle Footballer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 text-center">
        <div class="button1 xx" type="button" style="box-shadow: 10px 10px 30px #606060;">
            <a href="#" class="btn-text">View All</a>
            <span class="btn-icon">
          <i class="fa fa-arrow-right"></i>
        </span>
        </div>
    </div>
</section>
<!-- clint_portfolio_end -->
<!-- about_me_start -->
<section id="about_me" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 style="color: #FFA300; text-align: center;">WHAT CLIENT <span
                        style="color: #013565;">ABOUT ME?</span>
                </h3>
                <div class="img" style="text-align: center;">
                    <img class="img3" src="{{asset('assets/frontend')}}/img/homepage/about_me.png" style="width: 450px;">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about_me_end -->
<!-- footer_section_start -->
@include('layouts.frontend.partials.footer')
<!-- footer_section_end -->
@push('js')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
@endpush
