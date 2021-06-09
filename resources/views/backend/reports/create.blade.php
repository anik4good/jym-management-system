@extends('layouts.backend.app')
@section('title','Meals')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
@endpush

@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-users icon-gradient bg-mean-fruit">
                    </i>
                </div>
                <div>{{ __('Create Meals') }}</div>
            </div>
            <div class="page-title-actions">
                <div class="d-inline-block dropdown">
                    <a href="{{ route('app.diets.create') }}" class="btn-shadow btn btn-info">
                        <span class="btn-icon-wrapper pr-2 opacity-7">
                            <i class="fas fa-plus-circle fa-w-20"></i>
                        </span>
                        {{ __('Generate Diet') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">

            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="main-card mb-3 card">
                        <div class="card-header">Generate Diet</div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('app.diets.store') }}" >
                                @csrf

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Enter Diet Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required>


                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="calories" class="col-md-4 col-form-label text-md-right">{{ __('Enter Total Calories') }}</label>

                                    <div class="col-md-6">
                                        <input id="calories" type="text" class="form-control @error('calories') is-invalid @enderror" name="calories" required>

                                        @error('calories')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="meals" class="col-md-4 col-form-label text-md-right">{{ __('Total Meals') }}</label>

                                    <div class="col-md-6">
                                        <input id="meals" type="number"  class="form-control @error('diets') is-invalid @enderror" name="meals" required >

                                        @error('diets')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

{{--                                sending user id for diet creator--}}
                                <input id="user_id" type="hidden" class="form-control @error('user_id') is-invalid @enderror" name="user_id"
                                       value="{{$user->id}}" required>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-arrow-circle-up"></i>
                                            <span>Generate Meal</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="col-md-4">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="main-card mb-12 card">
                        <div class="card-header">User Information</div>
                        <div class="card-body">
                                <div class="card-shadow-primary profile-responsive card-border mb-3 card">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-danger">
                                            <div class="menu-header-image" style="background-image: url('{{asset('/public/assets/backend/images/dropdown-header/abstract1.jpg')}}')">

                                            </div>
                                            <div class="menu-header-content btn-pane-right">
                                                <div class="avatar-icon-wrapper mr-2 avatar-icon-xl">
                                                    <div class="avatar-icon">
                                                        <img src="{{ isset($user) ? $user->getFirstMediaUrl('avatar','thumb') : ''  }}" class="rounded-circle" alt="avatar">

                                                    </div>
                                                </div>
                                                <div>
                                                    <h5 class="menu-header-title">{{$user->name}}</h5>
                                                    <h6 class="menu-header-subtitle">Sales Manager</h6>
                                                </div>
                                                <div class="menu-header-btn-pane">
                                                    <a href="{{ route('app.users.show',$user->id) }}" class="mb-2 mr-2 btn-transition btn btn-outline-warning" >View Profile</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="main-card mb-12 card">
                        <div class="card-header">User Information</div>
                        <div class="card-body">
                            <div class="card-shadow-primary profile-responsive card-border mb-3 card">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-3">
                                                    <div class="icon-wrapper m-0">
                                                        <div class="progress-circle-wrapper">
                                                            <div class="circle-progress d-inline-block circle-progress-success">
                                                                <span class="widget-numbers widget-numbers-sm text-primary">BMI</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">BMI Status</div>
                                                    <div class="widget-subheading bold text-primary">Normal</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="widget-numbers widget-numbers-sm text-primary"><span>{{$user->userprofile->bmi}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-3">
                                                    <div class="icon-wrapper m-0">
                                                        <div class="progress-circle-wrapper">
                                                            <div class="circle-progress d-inline-block circle-progress-success">
                                                                <span class="widget-numbers widget-numbers-sm text-primary">PI</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Ponderal Index Status</div>
                                                    <div class="widget-subheading bold text-primary">Normal</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="widget-numbers widget-numbers-sm text-danger"><span>{{$user->userprofile->ponderalindex}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-3">
                                                    <div class="icon-wrapper m-0">
                                                        <div class="progress-circle-wrapper">
                                                            <div class="circle-progress d-inline-block circle-progress-success">
                                                                <span class="widget-numbers widget-numbers-sm text-primary">BFAT</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Body fat Status</div>
                                                    <div class="widget-subheading bold text-primary">Normal</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="widget-numbers widget-numbers-sm text-primary"><span>{{$user->userprofile->bodyfat}}%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-3">
                                                    <div class="icon-wrapper m-0">
                                                        <div class="progress-circle-wrapper">
                                                            <div class="circle-progress d-inline-block circle-progress-success">
                                                                <span class="widget-numbers widget-numbers-sm text-primary">BMR</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">BMR Status</div>
                                                    <div class="widget-subheading bold text-primary">Normal</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="widget-numbers widget-numbers-sm text-warning"><span>{{$user->userprofile->bmr}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-3">
                                                    <div class="icon-wrapper m-0">
                                                        <div class="progress-circle-wrapper">
                                                            <div class="circle-progress d-inline-block circle-progress-success">
                                                                <span class="widget-numbers widget-numbers-sm text-primary">BSA</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">BSA Status</div>
                                                    <div class="widget-subheading bold text-primary">Normal</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="widget-numbers widget-numbers-sm text-danger"><span>{{$user->userprofile->bsa}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('js')
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function () {
            // Datatable
            $("#datatable").DataTable();
        });
    </script>
    <script>
        $(document).ready(function () {
            // Datatable
            $("#datatable-morning").DataTable();
        });
    </script>


    <script type="text/javascript">
        function updateid(id) {
            event.preventDefault();
            document.getElementById('update-id-' + id).submit();
        }
    </script>

@endpush
