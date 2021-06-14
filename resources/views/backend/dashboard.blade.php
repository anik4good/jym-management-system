@extends('layouts.backend.app')
@section('title','Dashboard')
@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
@endpush
@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-car icon-gradient bg-mean-fruit">
                    </i>
                </div>
                <div>Dashboard</div>
            </div>
        </div>
    </div>


    @if($role==='user')
        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="card mb-3 widget-content">
                    <div class="widget-content-outer">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left">
                                <div class="widget-heading">Name</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-success">{{ $user->name }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card mb-3 widget-content">
                    <div class="widget-content-outer">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left">
                                <div class="widget-heading">Current Age</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-success">{{ $user->userprofile->age }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card mb-3 widget-content">
                    <div class="widget-content-outer">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left">
                                <div class="widget-heading">Current Height</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-success">{{ $user->userprofile->height }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card mb-3 widget-content">
                    <div class="widget-content-outer">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left">
                                <div class="widget-heading">Current Weight</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-success">{{ $user->userprofile->weight }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card mb-3 widget-content">
                    <div class="widget-content-outer">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left">
                                <div class="widget-heading">Current BMI</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-success">{{ $user->userprofile->bmi }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card mb-3 widget-content">
                    <div class="widget-content-outer">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left">
                                <div class="widget-heading">Current BloodPressure</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-success">80-120</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">Health History</div>
                    <div class="table-responsive">
                        <table id="datatable_health" class="align-middle mb-0 table table-borderless table-striped table-hover">
                            <thead>
                            <tr>
                                <th class="">#</th>
                                <th>Height</th>
                                <th class="">Weight</th>
                                <th class="">Age</th>
                                <th class="">Status</th>
                                <th class="">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($user_all as $key=>$row)
                                <tr>
                                    <td class="">{{ $key + 1 }}</td>
                                    <td class="">{{ $row->height }}</td>
                                    <td class="">{{ $row->weight }}</td>
                                    <td class="">{{ $row->age }}</td>
                                    <td class="">{{ $row->created_at->diffforhumans() }}</td>
                                    <td class="">
                                        <a class="btn btn-info btn-sm" href="{{ route('app.profile.index') }}"><i
                                                class="fas fa-eye"></i>
                                            <span>Update</span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>

    @else
        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="card mb-3 widget-content">
                    <div class="widget-content-outer">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left">
                                <div class="widget-heading">Total Food in database</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-success">{{ $total_foods }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card mb-3 widget-content">
                    <div class="widget-content-outer">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left">
                                <div class="widget-heading">Total Clients</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-success">{{ $usersCount }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card mb-3 widget-content">
                    <div class="widget-content-outer">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left">
                                <div class="widget-heading">Total Diets</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-warning">{{ count($diets) }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card mb-3 widget-content">
                    <div class="widget-content-outer">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left">
                                <div class="widget-heading">Total Clients This Month</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-danger">{{  $users_this_month }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card mb-3 widget-content">
                    <div class="widget-content-outer">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left">
                                <div class="widget-heading">Total Clients last Month</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-danger">{{  $users_last_month }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">Diets</div>
                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                            <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Diet Name</th>
                                <th >Assign to Client</th>
                                <th class="text-center">Created at</th>
                                <th class="text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($diets as $key=>$diet)
                                <tr>
                                    <td class="text-center text-muted">{{ $key + 1 }}</td>
                                    <td class="text-center">

                                        {{ $diet->name }}
                                    </td>
                                    <td>
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-3">
                                                    <div class="widget-content-left">
                                                        <img width="40" class="rounded-circle"
                                                             src="{{ $diet->user->getFirstMediaUrl('avatar') != null ? $diet->user->getFirstMediaUrl('avatar','thumb') : config('app.placeholder').'160' }}"
                                                             alt="User Avatar">
                                                    </div>
                                                </div>
                                                <div class="widget-content-left flex2">
                                                    <div class="widget-heading">{{ $diet->user->name }}</div>
                                                    <div class="widget-subheading opacity-7">
                                                        @if ($diet->user->role)
                                                            <span
                                                                class="badge badge-info">{{ $diet->user->role->name }}</span>
                                                        @else
                                                            <span class="badge badge-danger">No role found :(</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="text-center">

                                        {{ $diet->created_at->diffforhumans() }}
                                    </td>
                                    <td class="text-center">
                                        <a class="btn btn-info btn-sm"
                                           href="{{ route('app.diet.show.single',$diet->id) }}"><i
                                                class="fas fa-eye"></i>
                                            <span>Details</span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">Last Logged In Users</div>
                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                            <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Name</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Last Login At</th>
                                <th class="text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $key=>$user)
                                <tr>
                                    <td class="text-center text-muted">#{{ $key + 1 }}</td>
                                    <td>
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-3">
                                                    <div class="widget-content-left">
                                                        <img width="40" class="rounded-circle"
                                                             src="{{ $user->getFirstMediaUrl('avatar') != null ? $user->getFirstMediaUrl('avatar','thumb') : config('app.placeholder').'160' }}"
                                                             alt="User Avatar">
                                                    </div>
                                                </div>
                                                <div class="widget-content-left flex2">
                                                    <div class="widget-heading">{{ $user->name }}</div>
                                                    <div class="widget-subheading opacity-7">
                                                        @if ($user->role)
                                                            <span
                                                                class="badge badge-info">{{ $user->role->name }}</span>
                                                        @else
                                                            <span class="badge badge-danger">No role found :(</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">{{ $user->email }}</td>
                                    <td class="text-center">{{ $user->last_login_at }}</td>
                                    <td class="text-center">
                                        <a class="btn btn-info btn-sm"
                                           href="{{ route('app.users.show',$user->id) }}"><i
                                                class="fas fa-eye"></i>
                                            <span>Details</span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endif


@endsection

@push('js')
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            // Datatable
            $("#datatable_health").DataTable();
        });
    </script>
@endpush
