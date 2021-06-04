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
    <form method="POST" action="{{ route('app.userprofile.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-center">

            <div class="col-12">

            </div>

            <div class="col-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">CONTACT INFORMATION</div>

                    <div class="card-body">
                        <div class="form-group row">
                            <label for="height" class="col-md-4 col-form-label text-md-right">{{ __('height') }}</label>

                            <div class="col-md-1">
                                <input id="age" type="text" class="form-control @error('age') is-invalid @enderror"
                                       name="age" value=""  placeholder="age"
                                       autocomplete="age" autofocus>

                            </div>

                            <div class="col-md-1">
                                <input id="height" type="text" class="form-control @error('height') is-invalid @enderror"
                                       name="height" value=""  placeholder="height"
                                       autocomplete="height" autofocus>

                            </div>

                            <div class="col-md-1">
                                <input id="weight" type="text" class="form-control @error('weight') is-invalid @enderror"
                                       name="weight" value=""  placeholder="weight"
                                       autocomplete="weight" autofocus>

                            </div>


                        </div>

                        <div class="form-group row">
                            <label for="email"
                                   class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-1">
                                <input id="necksize" type="text" class="form-control @error('necksize') is-invalid @enderror"
                                       name="necksize" value=""  placeholder="necksize"
                                       autocomplete="necksize" autofocus>

                            </div>

                            <div class="col-md-1">
                                <input id="waist" type="text" class="form-control @error('waist') is-invalid @enderror"
                                       name="waist" value=""  placeholder="waist"
                                       autocomplete="waist" autofocus>

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
