@extends('layouts.frontend.app')
@section('title','Your Fitness Mentor')

@push('css')

@endpush

@section('content')
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
                    <p class="lead" style="color: #101820FF;">Improvements in our Physical and mental health should be our main priority. Our body is like a temple, and we should religiously treat it with due diligence, love and respect.
                    </p>
                </div>
                <div class="button1" type="button" style="box-shadow: 2px 2px 5px #bab8b8;">
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
        <div class="membership_w col-md-5 col-sm-12" style="background-color: #FFA300;">
            <div class="img d-flex">
                <img class="img1 img-fluid d-none d-xl-block" src="{{asset('assets/frontend')}}/img/homepage/bg.png"
                     alt="img">
                <div class="text1 pl-3">
                    <h2 class="mt-5">MEMBERSHIP STARTS FROM <span>$45</span> PER MONTH.</h2>
                    <p class="lead text-light mr-3">Lorem ipsum dolor sit
                                                    amet consectetur adipisicing elit. Impedit corporis architecto inventore libero? Nisi architecto veritatis
                                                    fuga beatae vero minus explicabo.</p>
                    <button class="btn btn-outline-light mb-3 float-right">Explore Now</button>
                    <img class="img_1" src="{{asset('assets/frontend')}}/img/homepage/gym-icon.png"alt="gym-icon">
                    <img class="img_2" src="{{asset('assets/frontend')}}/img/homepage/clipart.png" alt="clipart">
                </div>
            </div>
        </div>
        <div class="membership_w calculate col-md-7 col-sm-12">
            <div class="overlay">
                <h4 class="text-light mt-5 ml-3">FREE FITNESS ASSESSMENT.
                </h4>
                <p class="ml-3" style="font-size: 14px;">Answer simple questions and get your personalized fitness report and guidance</p>
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
                     style="box-shadow: 10px 10px 30px #273045; float: right; margin: 20px 100px 10px 0px;">
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
<section id="about" style="margin: 65px 0 65px 0;">
    <div class="container">
        <div class="row">
            <div class="about1 col-md-6">
                <h3>ABOUT <span>ME</span></h3>
                <div class="about_me_text">
                    <p class="lead text-dark m-0 p-0">I am Asm Rashed Kamal, a bodybuilding and physical transformation expert with a worldwide client base from more than 7 countries. I have been professionally training athletes since 2011 and have seen booming success from the following years.</p>
                    <p class="lead text-dark m-0 p-0">Every single day I receive scores of emails from all over the world, where people just like you are desperate for hard-hitting advice that produces real and quantifiable results.</p>
                    <p class="lead text-dark m-0 p-0">My goal has always been to help as many people as possible to realize the eminently achievable goal of significantly lowered body fat and pleasing muscle shape and definition, and I am absolutely evangelical in wanting to spread the gospel of how to really train for results that actually shout to the world “I work out, and I work out smart and hard!</p>
                    <p class="lead text-dark m-0 p-0">Because of the results that my clients are famous for achieving, I am amongst the most sought after and admittedly expensive/valued, personal trainers in the world. And I want to give as many people as possible the chance to benefit from my knowledge and expertise I have developed after years and years of work and hundreds of successful transformations.</p>
                </div>
                <h5 class="mt-2" style="color: #013565;">JOIN IN MY SOCIAL LINK</h5>

                <div class="social_icon">
                    <div class="fb">
                        <a href="https://www.facebook.com/shovonic/" target="_blank"><img src="{{asset('assets/frontend')}}/img/homepage/s_icon/fb.png" alt="fb"></a>
                    </div>
                    <div class="insta">
                        <a href="https://www.instagram.com/Asm.shovon/" target="_blank"><img src="{{asset('assets/frontend')}}/img/homepage/s_icon/insta.png" alt="fb"></a>
                    </div>
                </div>

            </div>
            <div class="about_me_img col-md-6 mt-sm-3 mt-3 mt-md-0">
                <div class="back">
                    <img class="img-fluid" src="{{asset('assets/frontend')}}/img/homepage/back_img.jpg" alt="Image">
                </div>
                <div class="front">
                    <img class="img-fluid" src="{{asset('assets/frontend')}}/img/homepage/photo_2021-06-22_17-18-07.jpg" alt="Image">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about_section_end -->
<!-- service_section_start -->
<section id="service" class="text-center" style="margin: 65px 0 65px 0;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="info-authors mb-3">
                    <h2 class="" style="color: #013565;">OUR <span style="color: #FFA300;">SERVICES</span></h2>
                    <p class="lead" style="font-size: 16px; color: #273045;">I provide online & offline consultation, personal training, and
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
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed odit quas rerum nobis possimus dolore ratione veritatis, architecto quia id ad tempore at suscipit praesentium aspernatur neque esse? Voluptas, est.</p>
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
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed odit quas rerum nobis possimus dolore ratione veritatis, architecto quia id ad tempore at suscipit praesentium aspernatur neque esse? Voluptas, est.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 i">
                    <div class="c text-center">
                        <div class="wrap">
                            <img src="{{asset('assets/frontend')}}/img/homepage/3.jpg" alt="#" width="270" height="270" class="img-responsive">
                            <div class="info">
                                <img src="{{asset('assets/frontend')}}/img/homepage/round_dumble.jpg" alt="">
                                <h4 class="position">Resistance Training</h4>
                            </div>
                        </div>
                        <div class="more">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed odit quas rerum nobis possimus dolore ratione veritatis, architecto quia id ad tempore at suscipit praesentium aspernatur neque esse? Voluptas, est.</p>
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
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed odit quas rerum nobis possimus dolore ratione veritatis, architecto quia id ad tempore at suscipit praesentium aspernatur neque esse? Voluptas, est.</p>
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
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed odit quas rerum nobis possimus dolore ratione veritatis, architecto quia id ad tempore at suscipit praesentium aspernatur neque esse? Voluptas, est.</p>
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
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed odit quas rerum nobis possimus dolore ratione veritatis, architecto quia id ad tempore at suscipit praesentium aspernatur neque esse? Voluptas, est.</p>
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
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed odit quas rerum nobis possimus dolore ratione veritatis, architecto quia id ad tempore at suscipit praesentium aspernatur neque esse? Voluptas, est.</p>
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
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed odit quas rerum nobis possimus dolore ratione veritatis, architecto quia id ad tempore at suscipit praesentium aspernatur neque esse? Voluptas, est.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <h5 class="text-dark">DIRECT ACCESS TO YOUR PERSONAL TRAINER</h5>
                    <p class="text-dark" style="font-size: 14px; text-align: justify; color: #101820FF;">This unique offering is the same as having one of our trainers coaching you in person with two distinct differences:
                                                                                                         1) You MUST be motivated to get the most out of this. To reap the full benefit of our one to one individualized coaching, you will need to be dedicated, disciplined, and focused. Anything less and you will be wasting your money and our time.
                                                                                                         2) You get the benefit of our top level online coaching expertise, and do not underestimate the power and usefulness of having a world class trainer at your disposal, at a massively discounted price to what we charge in our gyms across the globe.</p>
                </div>
            </div>
        </div>

</section>
<!-- service_section_end -->

<!-- fitness_membership_section_start -->
<section id="fitner_membership" style="margin: 65px 0 65px 0;">
    <div class="primary-overlay">
        <div class="container">
            <div class="row">
                <div class="fm_t col-12 text-center">
                    <h2 class="mt-5">FITNESS MEMBER<span>SHIP PACKAGES</span></h2>
                    <p class="lead text-light">I am currently accepting both personal and group
                                               contracts.</p>
                </div>
            </div>
            <!-- first_box -->
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <div class="box d-flex mt-3">
                        <!-- box_left_side -->
                        <div class="left_part" style="border-right: 1px solid#f3f2f2;">
                            <h5 class="mt-4 pl-3" style="color: #013565; ">Classic Membership</h5>
                            <h5 class="mt-4 pl-3 pt-3" style="color: #013565; border-top: 1px solid#f3f2f2;">Basic plan</h5>
                            <h3 class="mt-4 pl-3 pt-3" style="color: #FFA300; border-top: 1px solid#f3f2f2; font-style: italic;">$45/Mo</h3>
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

                            <!-- <div class="d-flex flex-row">
                              <div class="p-1 mt-1 ml-1 align-self-start text-light rounded-circle"
                                style="font-size: 6px; background: #013565;">
                                <i class="fa fa-check"></i>
                              </div>
                              <div class="p-1 align-self-end" style="font-size: 10px;">
                                <p style="color: #606060;">Diet and excercise plan</p>
                              </div>
                            </div> -->

                            <!-- <div class="d-flex flex-row">
                              <div class="p-1 mt-1 ml-1 align-self-start text-light rounded-circle"
                                style="font-size: 6px; background: #013565;">
                                <i class="fa fa-check"></i>
                              </div>
                              <div class="p-1 align-self-end" style="font-size: 10px;">
                                <p style="color: #606060;">Lifestyle modification suggestions</p>
                              </div>
                            </div> -->
                            <div class="button1" type="button" style="box-shadow: 2px 2px 5px #bab8b8; margin: 100px 10px;">
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
                            <h5 class="mt-4 pl-3 pt-3" style="color: #013565; color: #fff; border-top: 1px solid#525252;">Better
                                                                                                                          Value</h5>
                            <h3 class="mt-4 pl-3 pt-3" style="color: #FFA300; border-top: 1px solid#525252; font-style: italic;">$60/Mo</h3>
                            <p class=" pl-3" style="color: #fff; font-size: 12px;">Plus tax's & fcos</p>
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
                                    <p style="color: #fff;">Advanced Health and Fitness assessment</p>
                                </div>
                            </div>

                            <!-- <div class="d-flex flex-row">
                              <div class="p-1 mt-1 ml-1 align-self-start text-light rounded-circle"
                                style="font-size: 6px; background: #FFA300;">
                                <i class="fa fa-check"></i>
                              </div>
                              <div class="p-1 align-self-end" style="font-size: 10px;">
                                <p style="color: #fff;">Diet and excercise plan</p>
                              </div>
                            </div> -->

                            <!-- <div class="d-flex flex-row">
                              <div class="p-1 mt-1 ml-1 align-self-start text-light rounded-circle"
                                style="font-size: 6px; background: #FFA300;">
                                <i class="fa fa-check"></i>
                              </div>
                              <div class="p-1 align-self-end" style="font-size: 10px;">
                                <p style="color: #fff;">Lifestyle modification suggestions</p>
                              </div>
                            </div> -->
                            <div class="button1" type="button" style="box-shadow: 2px 2px 5px #263453; margin: 100px 10px;">
                                <a href="#" class="btn-text">Get Started</a>
                                <span class="btn-icon">
                    <i class="fa fa-arrow-right"></i>
                  </span>
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
                            <h5 class="mt-4 pl-3 pt-3" style="color: #013565; border-top: 1px solid#f3f2f2;">Best plan</h5>
                            <h3 class="mt-4 pl-3 pt-3" style="color: #FFA300; border-top: 1px solid#f3f2f2; font-style: italic;">$80/Mo</h3>
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
                                    <p style="color: #606060;">Advanced Health and Fitness assessment and more</p>
                                </div>
                            </div>

                            <!-- <div class="d-flex flex-row">
                              <div class="p-1 mt-1 ml-1 align-self-start text-light rounded-circle"
                                style="font-size: 6px; background: #013565;">
                                <i class="fa fa-check"></i>
                              </div>
                              <div class="p-1 align-self-end" style="font-size: 10px;">
                                <p style="color: #606060;">Diet and excercise plan</p>
                              </div>
                            </div> -->

                            <div class="d-flex flex-row">
                                <div class="p-1 mt-1 ml-1 align-self-start text-light rounded-circle"
                                     style="font-size: 6px; background: #013565;">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="p-1 align-self-end" style="font-size: 10px;">
                                    <p style="color: #606060;">Lifestyle modification suggestions</p>
                                </div>
                            </div>
                            <div class="button1" type="button" style="box-shadow: 2px 2px 5px #bab8b8; margin: 30px 10px;">
                                <a href="#" class="btn-text">Get Started</a>
                                <span class="btn-icon">
                    <i class="fa fa-arrow-right"></i>
                  </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- fitness_membership_section_end -->
<!-- client_portfolio_start -->
<section id="clint_portfolio" style="margin: 65px 0 65px 0;">
    <div class="container">
        <div class="portfolio_text row">
            <div class="col-12 text-center">
                <h2>CLIENT <span>PORTFOLIO</span></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="flag">
                    <img src="{{asset('assets/frontend')}}/img/homepage/flag/bd.png" alt="bd">
                    <img src="{{asset('assets/frontend')}}/img/homepage/flag/canada.png" alt="canada">
                    <img src="{{asset('assets/frontend')}}/img/homepage/flag/usa.png" alt="USA">
                    <img src="{{asset('assets/frontend')}}/img/homepage/flag/malaysia.png" alt="malaysia">
                    <img src="{{asset('assets/frontend')}}/img/homepage/flag/UK.png" alt="UK">
                    <img src="{{asset('assets/frontend')}}/img/homepage/flag/uganda.jpg" alt="uganda">
                    <img src="{{asset('assets/frontend')}}/img/homepage/flag/Brazil.png" alt="Brazil">
                    <img src="{{asset('assets/frontend')}}/img/homepage/flag/iran.jpg" alt="Iran">
                    <div class="flag_text">
                        <p class="lead">And we are expanding more</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="width: 90%; margin: auto;">
            <div class="col-xl-4 col-lg-12 col-md-12">
                <div class="portfolio_box d-flex py-3">
                    <img src="{{asset('assets/frontend')}}/img/homepage/9.jpeg" alt="img">
                    <div class="portfolio_body">
                        <h4>Arya Shojaei</h4>
                        <p>Wrestler. US</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12 col-md-12">
                <div class="portfolio_box d-flex py-3">
                    <img src="{{asset('assets/frontend')}}/img/homepage/10.jpeg" alt="img">
                    <div class="portfolio_body">
                        <h4>Farhaan Muhib</h4>
                        <p>Model</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12 col-md-12">
                <div class="portfolio_box d-flex py-3">
                    <img src="{{asset('assets/frontend')}}/img/homepage/11.jpeg" alt="img">
                    <div class="portfolio_body">
                        <h4>Fatema Zaman</h4>
                        <p>Business Woman</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="width: 90%; margin: auto;">
            <div class="col-xl-4 col-lg-12 col-md-12">
                <div class="portfolio_box d-flex py-3">
                    <img src="{{asset('assets/frontend')}}/img/homepage/12.jpeg" alt="img">
                    <div class="portfolio_body">
                        <h4>Zannatul Ferdous</h4>
                        <p>Fashion Model</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12 col-md-12">
                <div class="portfolio_box d-flex py-3">
                    <img src="{{asset('assets/frontend')}}/img/homepage/13.jpeg" alt="img">
                    <div class="portfolio_body">
                        <h4>Joan Kalema</h4>
                        <p>Corporate Professional</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12 col-md-12">
                <div class="portfolio_box d-flex py-3">
                    <img src="{{asset('assets/frontend')}}/img/homepage/14.jpeg" alt="img">
                    <div class="portfolio_body">
                        <h4>Atiq Azia Sadat </h4>
                        <p>Freestyle Footballer</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12 col-md-12">
                <div class="portfolio_box d-flex py-3">
                    <img src="{{asset('assets/frontend')}}/img/homepage/15.jpg" alt="img">
                    <div class="portfolio_body">
                        <h4>Rajin Azhar</h4>
                        <p>Professional social companion</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 text-center">
            <div class="button1 xx" style="box-shadow: 2px 2px 5px #bab8b8;"
                 xx type="button">
                <a href="#" class="btn-text">View All</a>
                <span class="btn-icon">
          <i class="fa fa-arrow-right"></i>
        </span>
            </div>
        </div>
    </div>
</section>
<!-- client_portfolio_end -->
<!-- testimonial_start -->
<section id="testimonial" style="margin: 65px 0 65px 0;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 style="color: #FFA300; text-align: center;">WHAT MY CLIENTS <span style="color: #013565;"> SAY ABOUT ME?</span>
                </h3>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="img__wrap">
                    <img class="img__img" src="{{asset('assets/frontend')}}/img/homepage/about_me.jpg" />
                    <p class="img__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, incidunt laudantium cupiditate ipsum et reiciendis.</p>
                </div>

                <div class="img__wrap2">
                    <img class="img__img2" src="{{asset('assets/frontend')}}/img/homepage/rounded_img/1.jpeg" />
                    <p class="img__description2">
                        Name: <br>
                        Profession: <br>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, fugit.
                    </p>
                </div>

                <div class="img__wrap3">
                    <img class="img__img3" src="{{asset('assets/frontend')}}/img/homepage/rounded_img/2.jpeg" />
                    <p class="img__description3">
                        Name: <br>
                        Profession: <br>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, fugit.
                    </p>
                </div>

                <div class="img__wrap4">
                    <img class="img__img4" src="{{asset('assets/frontend')}}/img/homepage/rounded_img/3.jpeg" />
                    <p class="img__description4">
                        Name: <br>
                        Profession: <br>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, fugit.
                    </p>
                </div>


                <div class="img__wrap5">
                    <img class="img__img5" src="{{asset('assets/frontend')}}/img/homepage/rounded_img/4.jpeg" />
                    <p class="img__description5">
                        Name: <br>
                        Profession: <br>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, fugit.
                    </p>
                </div>


            </div>
        </div>

        <div class="row mt-4">
            <div class="last_text col-12">
                <p class="lead first" style="color: #101820FF;">
                    We should warn you that we expect a lot from our clients. We expect even more from our Online clients. Our focus is absolutely unwavering and is not for everyone. We will do everything necessary to get results, and we do not take passengers.
                    (this exclusivity is important I guess, as I have seen this kind of marketing from top websites, and not only from fitness. Do you think this tone should be all over the writing rather than just this one paragraph?)
                </p>
            </div>
        </div>

        <div class="row mt-4">
            <div class="last_text col-lg-6 col-md-6 col-sm-12">
                <p class="lead second" style="color: #101820FF;">
                    I have seen so many unsuspecting, naïve trainees palmed off with promises of spectacular changes, sometimes faked,  – if they only buy this one or this book their fitness goal will be achieved  and all, These crap don’t even get me started on the fantastically well marketed but wholly limited bodyweight and interval training craze amongst internet marketers, fake gurus and charlatans who poses as fitness experts! I hope you understand there is no magic pill and don’t ask me about a one step solution for your fitness goals.
                </p>
            </div>
            <div class="last_text col-lg-6 col-md-6 col-sm-12">
                <div class="warning_img text-center">
                    <img style="width: 155px;" src="{{asset('assets/frontend')}}/img/homepage/warning.jpg" alt="warning">
                </div>
            </div>

        </div>



    </div>
</section>
<!-- testimonial_end -->




<!-- footer_section_start -->
@include('layouts.frontend.partials.footer')
<!-- footer_section_end -->

@endsection


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
