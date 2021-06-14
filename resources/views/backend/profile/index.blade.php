@extends('layouts.backend.app')
@section('title','Profile')

@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-user icon-gradient bg-mean-fruit">
                    </i>
                </div>
                <div>Profile</div>
            </div>
        </div>
    </div>
    <form method="POST" action="{{ route('app.profile.update') }}" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">PROFILE PHOTO</div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="col-6 mx-auto">
                                <div class="position-relative form-group">
                                    <label for="avatar">Avatar (Only Image are allowed) </label>
                                    <input type="file" name="avatar" id="avatar"
                                           class="dropify @error('avatar') is-invalid @enderror"
                                           data-default-file="{{ Auth::user()->getFirstMediaUrl('avatar','thumb') ?? '' }}">
                                    @error('avatar')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="main-card mb-3 card">
                    <div class="card-header">CONTACT INFORMATION</div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                       name="name" value="{{ Auth::user()->name ?? old('name') }}" required
                                       autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email"
                                   class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ Auth::user()->email ?? old('email') }}" required
                                       autocomplete="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>
                            <div class="col-md-6">
                                <select type="select" id="exampleCustomSelect" name="gender" class="custom-select" {{Auth::user()->userprofile->gender!=null?'disabled':''}}>
                                    <option {{Auth::user()->userprofile->gender=='Male'?'selected':''}} >Male</option>
                                    <option {{Auth::user()->userprofile->gender=='Female'?'selected':''}}>Female</option>

                                </select>
                                @error('gender')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="weight" class="col-md-4 col-form-label text-md-right">{{ __('Weight') }}</label>
                            <div class="col-md-6">
                                <input id="weight" type="number"
                                       class="form-control @error('weight') is-invalid @enderror" name="weight"
                                       value="{{Auth::user()->userprofile->weight}}" required autocomplete="weight"
                                       autofocus>
                                @error('weight')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="height" class="col-md-4 col-form-label text-md-right">{{ __('Height') }}</label>
                            <div class="col-md-6">
                                <input id="height" type="number"
                                       class="form-control @error('height') is-invalid @enderror" name="height"
                                       value="{{ Auth::user()->userprofile->height }}" required autocomplete="height"
                                       autofocus>
                                @error('height')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Age') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="number" class="form-control @error('age') is-invalid @enderror"
                                       name="age" value="{{ Auth::user()->userprofile->age }}" required
                                       autocomplete="age" autofocus>
                                @error('age')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Necksize') }}</label>
                            <div class="col-md-6">
                                <input id="necksize" type="number" class="form-control @error('necksize') is-invalid @enderror"
                                       name="necksize" value="{{ Auth::user()->userprofile->necksize }}" required
                                       autocomplete="necksize" autofocus>
                                @error('necksize')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="waist" class="col-md-4 col-form-label text-md-right">{{ __('Waist Size') }}</label>
                            <div class="col-md-6">
                                <input id="waist" type="number" class="form-control @error('waist') is-invalid @enderror"
                                       name="waist" value="{{ Auth::user()->userprofile->waist }}" required
                                       autocomplete="waist" autofocus>
                                @error('waist')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="main-card mb-3 card">
                    <div class="card-header">CONTACT INFORMATION</div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="dietrestrictions" class="col-md-4 col-form-label text-md-right">{{ __('Diet Restrictions') }}</label>
                            <div class="col-md-6">
                                <select type="select" id="exampleCustomSelect" name="dietrestrictions" class="custom-select" >
                                    <option {{Auth::user()->userprofile->dietrestrictions=='Beef'?'selected':''}} >Beef</option>
                                    <option {{Auth::user()->userprofile->dietrestrictions=='Burger'?'selected':''}}>Burger</option>
                                    <option {{Auth::user()->userprofile->dietrestrictions=='None'?'selected':''}}>None</option>

                                </select>
                                @error('dietrestrictions')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bodyshape" class="col-md-4 col-form-label text-md-right">{{ __('Current Body Shape') }}</label>
                            <div class="col-md-6">
                                <select type="select" id="exampleCustomSelect" name="bodyshape" class="custom-select">
                                    <option {{Auth::user()->userprofile->bodyshape=='1'?'selected':''}} >1</option>
                                    <option {{Auth::user()->userprofile->bodyshape=='2'?'selected':''}}>2</option>
                                    <option {{Auth::user()->userprofile->bodyshape=='3'?'selected':''}}>3</option>

                                </select>
                                @error('bodyshape')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lifestylehabit" class="col-md-4 col-form-label text-md-right">{{ __('Lifestyle Habit') }}</label>
                            <div class="col-md-6">
                                <select type="select" id="exampleCustomSelect" name="lifestylehabit" class="custom-select" >
                                    <option {{Auth::user()->userprofile->lifestylehabit=='1'?'selected':''}} >1</option>
                                    <option {{Auth::user()->userprofile->lifestylehabit=='2'?'selected':''}}>2</option>
                                    <option {{Auth::user()->userprofile->lifestylehabit=='3'?'selected':''}}>None</option>

                                </select>
                                @error('lifestylehabit')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="bloodpresure" class="col-md-4 col-form-label text-md-right">{{ __('Blood Presure') }}</label>
                            <div class="col-md-6">
                                <select type="select" id="exampleCustomSelect" name="bloodpresure" class="custom-select" >
                                    <option {{Auth::user()->userprofile->bloodpresure=='1'?'selected':''}} >Yes</option>
                                    <option {{Auth::user()->userprofile->bloodpresure=='2'?'selected':''}}>No</option>

                                </select>
                                @error('bloodpresure')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="bloodpresure" class="col-md-4 col-form-label text-md-right">{{ __('Blood Sugar') }}</label>
                            <div class="col-md-6">
                                <select type="select" id="exampleCustomSelect" name="bloodsugar" class="custom-select" >
                                    <option {{Auth::user()->userprofile->bloodsugar=='1'?'selected':''}} >Yes</option>
                                    <option {{Auth::user()->userprofile->bloodsugar=='2'?'selected':''}}>No</option>

                                </select>
                                @error('bloodsugar')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="foodhabit" class="col-md-4 col-form-label text-md-right">{{ __('Food Habit') }}</label>
                            <div class="col-md-6">
                                <select type="select" id="exampleCustomSelect" name="foodhabit" class="custom-select" >
                                    <option {{Auth::user()->userprofile->foodhabit=='1'?'selected':''}} >Yes</option>
                                    <option {{Auth::user()->userprofile->foodhabit=='2'?'selected':''}}>No</option>

                                </select>
                                @error('foodhabit')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="targetfitness" class="col-md-4 col-form-label text-md-right">{{ __('Target Fitness') }}</label>
                            <div class="col-md-6">
                                <select type="select" id="exampleCustomSelect" name="targetfitness" class="custom-select" >
                                    <option {{Auth::user()->userprofile->targetfitness=='1'?'selected':''}} >Yes</option>
                                    <option {{Auth::user()->userprofile->targetfitness=='2'?'selected':''}}>No</option>

                                </select>
                                @error('targetfitness')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-arrow-circle-up"></i>
                                    <span>Update</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
