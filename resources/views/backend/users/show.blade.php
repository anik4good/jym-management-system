@extends('layouts.backend.app')
@section('title','User Details')

@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-users icon-gradient bg-mean-fruit">
                    </i>
                </div>
                <div>{{ __('User Details') }}</div>
            </div>
            <div class="page-title-actions">
                <div class="d-inline-block dropdown">
                    <a href="{{ route('app.meals.createmeal',$user->id) }}" class="btn-shadow btn btn-success">
                        <span class="btn-icon-wrapper pr-2 opacity-7">
                            <i class="fas fa-edit fa-w-20"></i>
                        </span>
                        {{ __('Generate Meal') }}
                    </a>
                    <a href="{{ route('app.users.edit',$user->id) }}" class="btn-shadow btn btn-info">
                        <span class="btn-icon-wrapper pr-2 opacity-7">
                            <i class="fas fa-edit fa-w-20"></i>
                        </span>
                        {{ __('Edit') }}
                    </a>
                    <a href="{{ route('app.users.index') }}" class="btn-shadow btn btn-danger">
                        <span class="btn-icon-wrapper pr-2 opacity-7">
                            <i class="fas fa-arrow-circle-left fa-w-20"></i>
                        </span>
                        {{ __('Back to list') }}
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-2">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <img src="{{ isset($user) ? $user->getFirstMediaUrl('avatar','thumb') : ''  }}"
                         class="img-fluid img-thumbnail" alt="avatar">
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <div class="col-md-10">
            <div class="main-card card">
                <div class="card-body p-0">
                    <table class="table table-hover mb-0">
                        <tbody>
                        <tr>
                            <th scope="row">Name:</th>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Email:</th>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Role:</th>
                            <td>
                                @if ($user->role)
                                    <span class="badge badge-info">{{ $user->role->name }}</span>
                                @else
                                    <span class="badge badge-danger">No role found :(</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Status:</th>
                            <td>
                                @if ($user->status)
                                    <div class="badge badge-success">Active</div>
                                @else
                                    <div class="badge badge-danger">Inactive</div>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Joined At:</th>
                            <td>{{ $user->created_at->diffForHumans() }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Last Modified At:</th>
                            <td>{{ $user->updated_at->diffForHumans() }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Last Login At:</th>
                            <td>{{ $user->last_login_at }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>

    <hr>
    <div class="row">
        <div class="col-md-6">
            <div class="main-card card">
                <div class="card-body p-0">
                    <table class="table table-hover mb-0">
                        <tbody>
                        <tr>
                            <th scope="row">Gender:</th>
                            <td>{{ $user->userprofile->gender }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Height:</th>
                            <td>{{ $user->userprofile->height }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Weight:</th>
                            <td>
                                @if ($user->role)
                                    <span class="badge badge-info">{{ $user->userprofile->weight }}</span>
                                @else
                                    <span class="badge badge-danger">No role found :(</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Age:</th>
                            <td>
                                @if ($user->status)
                                    <span class="badge badge-info">{{ $user->userprofile->age }}</span>
                                @else
                                    <div class="badge badge-danger">Inactive</div>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Neck Size:</th>
                            <td>{{ $user->userprofile->necksize }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Dietrestrictions</th>
                            <td>{{ $user->userprofile->dietrestrictions }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Waist</th>
                            <td>{{ $user->userprofile->waist }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Body Shape</th>
                            <td>{{ $user->userprofile->bodyshape }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Lifestyle Habit</th>
                            <td>{{ $user->userprofile->lifestylehabit }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Blood Presure</th>
                            <td>{{ $user->userprofile->bloodpresure }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
        <div class="col-md-6">
            <div class="main-card card">
                <div class="card-body p-0">
                    <table class="table table-hover mb-0">
                        <tbody>
                        <tr>
                            <th scope="row">Blood Sugar</th>
                            <td>{{ $user->userprofile->bloodsugar }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Food Habit</th>
                            <td>{{ $user->userprofile->foodhabit }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Bloodsugar</th>
                            <td>{{ $user->userprofile->bloodsugar }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Target Fitness</th>
                            <td>{{ $user->userprofile->targetfitness }}</td>
                        </tr>
                        <tr>
                            <th scope="row">BMI</th>
                            <td>
                            @if ($user->status)
                                <span class="badge badge-success">{{ $user->userprofile->bmi }}

                                </span>   <span class="badge badge-primary">Normal</span>
                            @else
                                <div class="badge badge-danger">Inactive</div>
                            @endif
                            <td>
                        </tr>
                        <tr>
                            <th scope="row">Ponderal Index</th>
                            <td>
                                @if ($user->status)
                                    <span class="badge badge-info">{{ $user->userprofile->ponderalindex }}</span>
                                @else
                                    <div class="badge badge-danger">Inactive</div>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Body Fat</th>
                            <td>
                                @if ($user->status)
                                    <span class="badge badge-info">{{ $user->userprofile->bodyfat }}%</span>
                                @else
                                    <div class="badge badge-danger">Inactive</div>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">BMR</th>
                            <td>
                                @if ($user->status)
                                    <span class="badge badge-info">{{ $user->userprofile->bmr }}</span>
                                @else
                                    <div class="badge badge-danger">Inactive</div>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">BSA</th>
                            <td>
                                @if ($user->status)
                                    <span class="badge badge-info">{{ $user->userprofile->bsa }}</span>
                                @else
                                    <div class="badge badge-danger">Inactive</div>
                                @endif</td>
                        </tr>
                        <tr>
                            <th scope="row">Updated At:</th>
                            <td>{{ $user->userprofile->updated_at->diffForHumans() }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
@endsection
