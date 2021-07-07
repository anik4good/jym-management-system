@extends('layouts.frontend.app')
@section('title','Inquery')

@push('css')

@endpush

<!-- navbar_start -->
@include('layouts.frontend.partials.header')
<!-- navbar_end -->
<form method="POST" action="{{ route('frontend.form.store') }}" enctype="multipart/form-data">
@csrf
<!-- gender_selection_start -->
    <section id="gender_selection">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" style="margin-top: 6rem;">
                    <h2 style="color: #003981;">YOUR <span style="color: #FFA300;">GENDER</span></h2>
                </div>
            </div>
            <div class="row male_female">
                <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                    <div class="radio_buttons text-right">
                        <label class="custom_radio">
                            <input type="radio" name="gender" value="Male">
                            <span class="radio_btn">
                  <div class="radio_img">
                    <img src="{{asset('assets/frontend')}}/img/form/1.male.png" alt="male">
                  </div>
                  <h5>Male</h5>
                </span>
                        </label>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                    <div class="radio_buttons text-left">
                        <label class="custom_radio">
                            <input type="radio" name="gender" value="Female">
                            <span class="radio_btn">
                  <div class="radio_img">
                    <img src="{{asset('assets/frontend')}}/img/form/2.female.png" alt="female">
                  </div>
                  <h5>Female</h5>
                </span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- gender_selection_end -->
    <!-- height_weight_section_start -->
    <section id="height_weight" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 style="color: #FFA300;">WHAT IS YOUR <span style="color: #003981;">HEIGHT RANGE?</span></h2>
                </div>
            </div>
            <!-- <div class="row">
              <div class="col-12 text-center">
                <div class="radio_group">
                  <div class="radio-item">
                    <input type="radio" id="imperial" name="ritem" value="ropt1">
                    <label for="imperial">Imperial</label>
                </div>
                <div class="radio-item">
                    <input type="radio" id="metric" name="ritem" value="ropt2">
                    <label for="metric">Metric</label>
                </div>
                </div>
              </div>
            </div> -->
            <div class="row">
                <div class="col-12 slider1">
                    <div class="slidecontainer mt-3">
                        <!-- <p>Inches</p> -->
                        <input style="width: 30%;" type="range" min="1" max="10" value="5" class="slider" id="feet"
                               name="feet">
                        <input style="width: 30%;" type="range" min="1" max="10" value="7" class="slider" id="inches"
                               name="inches">
                    </div>
                    <br>
                    <h5 class="text-center">Height: <span style="color: #FFA300; font-weight: bold;"
                                                          id="feet_output"></span> Feet <span
                            style="color: #FFA300; font-weight: bold;" id="inches_output"></span> Inch</h5>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <h2 style="color: #003981;">HOW MUCH DO <span style="color: #FFA300;">YOU WEIGHT?</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 slider1">
                    <div class="slidecontainer mt-3">
                        <!-- <p>Pounds</p> -->
                        <input style="width: 30%;" type="range" min="1" max="100" value="50" class="slider" id="weight"
                               name="weight">
                    </div>
                    <br>
                    <h5 class="text-center"><span style="color: #FFA300; font-weight: bold;" id="weight_output"></span>
                        KG</h5>
                </div>
            </div>
        </div>
    </section>
    <!-- height_weight_section_end -->
    <!-- age_range_section_start -->
    <section id="age_range">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" style="margin-top: 2rem;">
                    <h2 style="color: #FFA300;">WHAT IS YOUR <span style="color: #003981;">AGE RANGE?</span></h2>
                </div>
            </div>
            <div class="age_selection py-5">
                <div class="row text-center">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="radio_buttons2">
                            <label class="custom_radio2">
                                <input type="radio" name="radio2" data-toggle="collapse" href="#collapseExample">
                                <span class="radio_btn2">
                  <div class="radio_img2">
                    <img src="{{asset('assets/frontend')}}/img/form/1.jpg" alt="TEEN'S">
                  </div>
                  <h5>TEEN'S</h5>
                </span>
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="radio_buttons2">
                            <label class="custom_radio2">
                                <input type="radio" name="radio2" data-toggle="collapse" href="#collapseExample">
                                <span class="radio_btn2">
                  <div class="radio_img2">
                    <img src="{{asset('assets/frontend')}}/img/form/2.jpg" alt="20'S">
                  </div>
                  <h5>20'S</h5>
                </span>
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="radio_buttons2">
                            <label class="custom_radio2">
                                <input type="radio" name="radio2" data-toggle="collapse" href="#collapseExample">
                                <span class="radio_btn2">
                  <div class="radio_img2">
                      <img src="{{asset('assets/frontend')}}/img/form/3.jpg" alt="30'S">
                  </div>
                  <h5>30'S</h5>
                </span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row text-center">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="radio_buttons2">
                            <label class="custom_radio2">
                                <input type="radio" name="radio2" data-toggle="collapse" href="#collapseExample">
                                <span class="radio_btn2">
                  <div class="radio_img2">
                         <img src="{{asset('assets/frontend')}}/img/form/4.jpg" alt="40'S">
                  </div>
                  <h5>40'S</h5>
                </span>
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="radio_buttons2">
                            <label class="custom_radio2">
                                <input type="radio" name="radio2" data-toggle="collapse" href="#collapseExample">
                                <span class="radio_btn2">
                  <div class="radio_img2">
                     <img src="{{asset('assets/frontend')}}/img/form/5.jpg" alt="50'S">
                  </div>
                  <h5>50'S</h5>
                </span>
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="radio_buttons2">
                            <label class="custom_radio2">
                                <input type="radio" name="radio2" data-toggle="collapse" href="#collapseExample">
                                <span class="radio_btn2">
                  <div class="radio_img2">
                   <img src="{{asset('assets/frontend')}}/img/form/6.jpg" alt="60'S">
                  </div>
                  <h5>60'S</h5>
                </span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <input type="number" name="age" class="form-control" placeholder="Please Enter Your Age" required>
                </div>
            </div>
            <br>
        </div>
    </section>
    <!-- age_range_section_end -->

    <!-- Neck_size_start -->
    <section id="neck_size">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 style="color: #003981;">WHAT IS YOUR <span style="color: #FFA300;">NECK SIZE?</span></h2>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <div class="radio_buttons3">
                        <label class="custom_radio3">

                            <span class="radio_btn3">
                  <div class="radio_img3">
                    <img src="{{asset('assets/frontend')}}/img/form/neck_size.svg" alt="40'S">
                  </div>
                </span>
                        </label>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 slider1" style="max-width: 47%;">
                    <div class="slidecontainer" style="margin-top: 5rem;">
                        <!-- <p>Inches</p> -->
                        <input style="width: 65%;" type="range" min="1" max="50" value="7" class="slider" id="necksize"
                               name="necksize">
                    </div>
                    <br>
                    <h5 class="text-center"><span id="neck_size_output"
                                                  style="color: #FFA300; font-weight: bold;"></span> Inches</h5>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <div class="radio_buttons3">
                        <label class="custom_radio3">
                            <input type="checkbox" name="necksize" value="none">
                            <span class="radio_btn3">
                  <div class="radio_img4">
                    <img src="{{asset('assets/frontend')}}/img/form/8.jpg" alt="60'S">
                  </div>
                  <h5>NOT SURE</h5>
                </span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Neck_size_end -->
    <!-- dietary_restriction_section_start -->
    <section id="dietary_restriction">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" style="margin-top: 2rem;">
                    <h2 style="color: #FFA300;">DO YOU HAVE ANY <span
                            style="color: #003981;">DIETARY RESTRICTION?</span></h2>
                </div>
            </div>
            <div class="dietary_restriction py-5">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="radio_buttons5">
                            <label class="custom_radio5">
                                <input type="radio" name="dietrestrictions" value="Halal">
                                <span class="radio_btn5">
                <div class="radio_img5">
                  <img src="{{asset('assets/frontend')}}/img/form/halal.jpg" alt="Halal">
                </div>
                <h5>Halal</h5>
              </span>
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="radio_buttons5">
                            <label class="custom_radio5">
                                <input type="radio" name="dietrestrictions" value="Kosher">
                                <span class="radio_btn5">
                <div class="radio_img5">
                  <img src="{{asset('assets/frontend')}}/img/form/kosher.jpg" alt="Kosher">
                </div>
                <h5>Kosher</h5>
              </span>
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="radio_buttons5">
                            <label class="custom_radio5">
                                <input type="radio" name="dietrestrictions" value="Veg">
                                <span class="radio_btn5">
                <div class="radio_img5">
                  <img src="{{asset('assets/frontend')}}/img/form/veg.jpg" alt="Veg">
                </div>
                <h5>Veg</h5>
              </span>
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="radio_buttons5">
                            <label class="custom_radio5">
                                <input type="radio" name="dietrestrictions" value="Vegan">
                                <span class="radio_btn5">
                  <div class="radio_img5">
                    <img src="{{asset('assets/frontend')}}/img/form/vegan.jpg" alt="Vegan">
                  </div>
                  <h5>Vegan</h5>
                </span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- dietary_restriction_section_end -->
    <!-- waist_size_start -->
    <section id="waist_size">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 style="color: #003981;">WHAT IS YOUR <span style="color: #FFA300;">WAIST SIZE?</span></h2>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <div class="radio_buttons8">
                        <label class="custom_radio8">

                            <span class="radio_btn8">
              <div class="radio_img4">
                <img src="{{asset('assets/frontend')}}/img/form/weist_size.svg" alt="60'S">
              </div>
            </span>
                        </label>
                    </div>
                </div>
                <div class="col-12 slider1" style="max-width: 47%;">
                    <div class="slidecontainer" style="margin-top: 5rem;">
                        <!-- <p>Inches</p> -->
                        <input style="width: 65%;" type="range" min="1" max="100" value="50" class="slider"
                               id="waistsize" name="waist">
                    </div>
                    <br>
                    <h5 class="text-center"><span id="waist_size_output"
                                                  style="color: #FFA300; font-weight: bolder;"></span> inches</h5>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <div class="radio_buttons8">
                        <label class="custom_radio8">
                            <input type="checkbox" name="waist" value="none">
                            <span class="radio_btn8">
              <div class="radio_img9">
                <img src="{{asset('assets/frontend')}}/img/form/8.jpg" alt="40'S">
              </div>
              <h5>NOT SURE</h5>
            </span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- waist_size_end -->
    <!-- body_shape_section_start -->
    <section id="body_shape">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" style="margin-top: 2rem;">
                    <h2 style="color: #FFA300;">WHAT IS YOUR <span style="color: #003981;">CURRENT BODY SHAPE?</span>
                    </h2>
                </div>
            </div>
            <div class="body_shape py-5">
                <div class="row text-center">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="radio_buttons10">
                            <label class="custom_radio10">
                                <input type="radio" name="bodyshape" value="Triangle">
                                <span class="radio_btn10">
                <div class="radio_img10">
                  <img src="{{asset('assets/frontend')}}/img/form/body1.jpg" alt="">
                </div>
              </span>
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="radio_buttons10">
                            <label class="custom_radio10">
                                <input type="radio" name="bodyshape" value="Hourglass">
                                <span class="radio_btn10">
                <div class="radio_img10">
                  <img src="{{asset('assets/frontend')}}/img/form/body2.jpg" alt="">
                </div>
              </span>
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="radio_buttons10">
                            <label class="custom_radio10">
                                <input type="radio" name="bodyshape" value="Oval">
                                <span class="radio_btn10">
                <div class="radio_img10">
                  <img src="{{asset('assets/frontend')}}/img/form/body3.jpg" alt="">
                </div>
              </span>
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="radio_buttons10">
                            <label class="custom_radio10">
                                <input type="radio" name="bodyshape" value="Square">
                                <span class="radio_btn10">
                <div class="radio_img10">
                  <img src="{{asset('assets/frontend')}}/img/form/body4.jpg" alt="">
                </div>
              </span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- body_shape_section_end -->
    <!-- habits_section_start -->
    <section id="habits">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" style="margin-top: 2rem;">
                    <h2 style="color: #003981;">DO YOU HAVE ANY <span style="color: #FFA300;">OF THESE HABITS?</span>
                    </h2>
                </div>
            </div>
            <div class="habits py-5">
                <div class="row text-center">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="radio_buttons11">
                            <label class="custom_radio11">
                                <input type="radio" name="lifestylehabit" value="Smoking">
                                <span class="radio_btn11">
                <div class="radio_img11">
                  <img src="{{asset('assets/frontend')}}/img/form/smoking.jpg" alt="Smoking">
                </div>
                <h5>Smoking</h5>
              </span>
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="radio_buttons11">
                            <label class="custom_radio11">
                                <input type="radio" name="lifestylehabit" value="None">
                                <span class="radio_btn11">
                <div class="radio_img11">
                </div>
                <h5 style="margin-top: 100px;">None</h5>
              </span>
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="radio_buttons11">
                            <label class="custom_radio11">
                                <input type="radio" name="lifestylehabit" value="Drinking">
                                <span class="radio_btn11">
                <div class="radio_img11">
                  <img src="{{asset('assets/frontend')}}/img/form/3.jpg" alt="Drinking">
                </div>
                <h5>Drinking</h5>
              </span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- habits_section_end -->
    <!-- medical_condition_start -->
    <section id="habits">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" style="margin-top: 2rem;">
                    <h2 style="color: #003981;">CURRENT MEDICAL <span style="color: #FFA300;">CONDITION</span>
                    </h2>
                </div>
            </div>
            <div class="col-12 text-center" style="margin-top: 2rem;">
                <h2 style="color: #003981;">BloodPressure
                </h2>
            </div>
            <div class="habits py-5">
                <div class="row text-center">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="radio_buttons11">
                            <label class="custom_radio11">
                                <input type="radio" name="bloodpressure" value="Yes">
                                <span class="radio_btn11">
                <div class="radio_img11">
                 <img src="{{asset('assets/frontend')}}/img/form/yes.jpg" alt="Drinking">
                </div>
                <h5>yes</h5>
              </span>
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="radio_buttons11">
                            <label class="custom_radio11">
                                <input type="radio" name="bloodpressure" value="No">
                                <span class="radio_btn11">
                <div class="radio_img11">
                       <img src="{{asset('assets/frontend')}}/img/form/no.png" alt="Drinking">
                </div>
                <h5>No</h5>
              </span>
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="radio_buttons11">
                            <label class="custom_radio11">
                                <input type="radio" name="bloodpressure" value="Not Sure">
                                <span class="radio_btn11">
                <div class="radio_img11">
                  <img src="{{asset('assets/frontend')}}/img/form/8.jpg" alt="Drinking">
                </div>
             <h5>NOT SURE</h5>
              </span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            {{--bloodsugar--}}
            <div class="col-12 text-center" style="margin-top: 2rem;">
                <h2 style="color: #003981;">BloodSugar
                </h2>
            </div>
            <div class="habits py-5">
                <div class="row text-center">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="radio_buttons11">
                            <label class="custom_radio11">
                                <input type="radio" name="bloodsugar" value="Yes">
                                <span class="radio_btn11">
                <div class="radio_img11">
                 <img src="{{asset('assets/frontend')}}/img/form/yes.jpg" alt="Drinking">
                </div>
                <h5>yes</h5>
              </span>
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="radio_buttons11">
                            <label class="custom_radio11">
                                <input type="radio" name="bloodsugar" value="No">
                                <span class="radio_btn11">
                <div class="radio_img11">
                       <img src="{{asset('assets/frontend')}}/img/form/no.png" alt="Drinking">
                </div>
                <h5>No</h5>
              </span>
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="radio_buttons11">
                            <label class="custom_radio11">
                                <input type="radio" name="bloodsugar" value="Not Sure">
                                <span class="radio_btn11">
                <div class="radio_img11">
                  <img src="{{asset('assets/frontend')}}/img/form/8.jpg" alt="Drinking">
                </div>
             <h5>NOT SURE</h5>
              </span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- food_allergy_section_start -->
    <section id="food_allergy">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" style="margin-top: 2rem;">
                    <h2 style="color: #003981;">DO YOU HAVE ANY <span style="color: #FFA300;">FOOD ELLERGY</span></h2>
                </div>
            </div>
            <div class="food_allergy py-5">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="radio_buttons14">
                            <label class="custom_radio14">
                                <input type="radio" name="foodhabit" value="Peanuts">
                                <span class="radio_btn14">
                <div class="radio_img14">
                  <img src="{{asset('assets/frontend')}}/img/form/peanuts.jpg" alt="peanuts">
                </div>
                <h5>Peanuts</h5>
              </span>
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="radio_buttons14">
                            <label class="custom_radio14">
                                <input type="radio" name="foodhabit" value="Seafood">
                                <span class="radio_btn14">
                <div class="radio_img14">
                  <img src="{{asset('assets/frontend')}}/img/form/sea_food.jpg" alt="sea_food">
                </div>
                <h5>Sea food</h5>
              </span>
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="radio_buttons14">
                            <label class="custom_radio14">
                                <input type="radio" name="foodhabit" value="Fish">
                                <span class="radio_btn14">
                <div class="radio_img14">
                       <img src="{{asset('assets/frontend')}}/img/form/fish.jpg" alt="Fish">
                </div>
                <h5>Fish</h5>
              </span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="radio_buttons14">
                            <label class="custom_radio14">
                                <input type="radio" name="foodhabit" value="Eggs">
                                <span class="radio_btn14">
                <div class="radio_img14">
               <img src="{{asset('assets/frontend')}}/img/form/eggs.jpg" alt="eggs">
                </div>
                <h5>Eggs</h5>
              </span>
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="radio_buttons14">
                            <label class="custom_radio14">
                                <input type="radio" name="foodhabit" value="Milk">
                                <span class="radio_btn14">
                <div class="radio_img14">
                  <img src="{{asset('assets/frontend')}}/img/form/milk.jpg" alt="milk">
                </div>
                <h5>Milk</h5>
              </span>
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="radio_buttons14">
                            <label class="custom_radio14">
                                <input type="radio" name="foodhabit" value="Eggplants">
                                <span class="radio_btn14">
                <div class="radio_img14">
                 <img src="{{asset('assets/frontend')}}/img/form/eggplants.jpg" alt="eggplants">
                </div>
                <h5>Eggplants</h5>
              </span>
                            </label>
                        </div>
                    </div>
                    <br>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="radio_buttons14">
                            <label class="custom_radio14">
                                <input type="radio" name="foodhabit" value="None">
                                <span class="radio_btn14">
                <div class="radio_img14">
                </div>
                <h5 style="margin-top: 100px;">None</h5>
              </span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-body">
                <input type="email" name="email" class="form-control" placeholder="Please Enter Your Email" required>
            </div>
        </div>
    </section>
    <br>
    <!-- food_allergy_section_end -->





    <section id="button">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-5 text-center">
                    <button class="button1" type="submit" style="box-shadow: 10px 10px 30px #606060;">
                        <a class="btn-text" type="submit">Confirm</a>
                        <span class="btn-icon">
            <i class="fa fa-arrow-right"></i>
          </span>
                    </button>
                </div>
            </div>
        </div>
    </section>
</form>
<!-- footer_section_start -->
@include('layouts.frontend.partials.footer')
<!-- footer_section_end -->
@push('js')
    <script>
        var feet = document.getElementById("feet");
        var inches = document.getElementById("inches");
        var weight = document.getElementById("weight");
        var neck_size = document.getElementById("necksize");
        var waist_size = document.getElementById("waistsize");

        var feet_output = document.getElementById("feet_output");
        var inches_output = document.getElementById("inches_output");
        var weight_output = document.getElementById("weight_output");
        var neck_size_output = document.getElementById("neck_size_output");
        var waist_size_output = document.getElementById("waist_size_output");


        feet.innerHTML = feet.value;
        inches.innerHTML = inches.value;
        weight.innerHTML = weight.value;
        neck_size.innerHTML = neck_size.value;
        waist_size.innerHTML = waist_size.value;


        feet.oninput = function () {
            feet_output.innerHTML = this.value;
        }

        inches.oninput = function () {
            inches_output.innerHTML = this.value;
        }

        weight.oninput = function () {
            weight_output.innerHTML = this.value;
        }

        neck_size.oninput = function () {
            neck_size_output.innerHTML = this.value;
        }

        waist_size.oninput = function () {
            waist_size_output.innerHTML = this.value;
        }
    </script>


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
