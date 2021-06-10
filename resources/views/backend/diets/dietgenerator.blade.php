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
                        {{ __('Create Meals') }}
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <form method="GET" action="{{route('app.diet.generator.show.single')}}">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">Inline</h5>
                        <input type="hidden" name="diet_id" value="{{$post_id}}">
                        <div class="position-relative form-group">
                            <div>
                                <div class="custom-checkbox custom-control custom-control-inline">
                                    <select type="select" id="exampleCustomSelect" name="data" class="custom-select">
                                        <option value="">Select Data</option>
                                        <option>calories</option>
                                        <option>fat</option>
                                        <option>protein</option>
                                        <option>carbohydrate</option>
                                    </select>
                                </div>
                                <div class="custom-checkbox custom-control custom-control-inline">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-danger">From</button>
                                    </div>
                                    <input type="text" placeholder="Start" name="start" class="form-control">
                                    <div class="input-group-append">
                                        <button class="btn btn-success">To</button>
                                    </div>
                                    <input type="text" placeholder="End" name="end" class="form-control">
                                </div>
                                <div class="custom-checkbox custom-control custom-control-inline">
                                    <button class="btn btn-outline-success btn-lg btn-block">Filter
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-6 card">
                <div class="table-responsive">
                    <table id="datatable" class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th>Name</th>
                            <th class="text-center">image</th>
                            <th class="text-center">Food Group</th>
                            <th class="text-center">Calories</th>
                            <th class="text-center">Actions</th>
                            <th class="text-center"></th>
                            <th class="text-center"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($foods as $row)
                            <tr>
                                <td>
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="widget-content-left flex2">
                                                    <div class="widget-heading">{{ $row->id}}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    {{ Str::limit($row->name,10)}}
                                </td>
                                <td>
                                    <div class="widget-content-left">
                                        <img width="40" class="rounded-circle"
                                             src="{{ $row->image }}">
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="badge badge-success">{{ $row->foodgroup }}</div>
                                </td>
                                <td class="text-center">
                                    <div class="badge badge-success">{{ $row->calories }}</div>
                                </td>
                                <td class="text-center">
                                    <form action="{{ route('app.diets.add.food') }}" method="post"
                                          enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" value="{{$row->id}}" name="food_id">
                                        <input type="hidden" value="{{$post_id}}" name="post_id">
                                        {{--                                        <input type="hidden" value="Morning" name="check">--}}
                                        <button class="btn btn-secondary btn-sm"
                                                type="submit" name="check" value="Morning"><i
                                                class="fas fa-eye"></i>
                                            <span>Breakfast</span>
                                        </button>
                                        <button class="btn btn-secondary btn-sm"
                                                type="submit" name="check" value="noon"><i
                                                class="fas fa-eye"></i>
                                            <span>Lunch</span>
                                        </button>
                                        <button class="btn btn-secondary btn-sm"
                                                type="submit" name="check" value="night"><i
                                                class="fas fa-eye"></i>
                                            <span>Dinner</span>
                                        </button>
                                    </form>
                                </td>
                            </tr>

                        @endforeach
                        {{--                        </form>--}}
                        </tbody>
                    </table>
                    {{$foods->links()}}
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="main-card mb-3 card">
            <div class="no-gutters row">
                <div class="col-md-4">
                    <div class="pt-0 pb-0 card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="widget-content p-0">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Total Calories</div>
                                                <div class="widget-subheading">Normal</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div
                                                    class="widget-numbers text-success">{{ $morning_all['calories'] + $noon_all['calories'] + $night_all['calories'] }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="widget-content p-0">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Total Fat</div>
                                                <div class="widget-subheading badge-dangerc">Danger</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div
                                                    class="widget-numbers text-success">{{$morning_all['fat'] + $noon_all['fat'] + $night_all['fat']}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pt-0 pb-0 card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="widget-content p-0">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Followers</div>
                                                <div class="widget-subheading">People Interested</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger">45,9%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="widget-content p-0">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Products Sold</div>
                                                <div class="widget-subheading">Total revenue streams</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-warning">$3M</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pt-0 pb-0 card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="widget-content p-0">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Total Orders</div>
                                                <div class="widget-subheading">Last year expenses</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-success">1896</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="widget-content p-0">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Clients</div>
                                                <div class="widget-subheading">Total Clients Profit</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-primary">$12.6k</div>
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


    <div class="row">
        <div class="col-md-4">
            <div class="main-card mb-3 card">
                <div class="card-body"><h5 class="card-title">Breakfast {{$morning_all['calories']}}</h5>
                    <form method="POST"
                          action="{{  route('app.diets.update.time',$post_id)  }}"
                          enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <input type="hidden" name="post_id" value="{{$post_id}}">
                        <input type="hidden" name="period" value="morning">
                        <input type="time" name="time" id="">
                        <button type="submit" class="btn btn-success btn-sm">
                            <i class="fas fa-ticket-alt"></i>
                            <span></span>
                        </button>
                    </form>
                    <table class="mb-0 table table-responsive">
                        <thead>
                        <tr>
                            <th>Food ID</th>
                            <th>name</th>
                            <th>Calories</th>
                            <th>Fat</th>
                            <th>Protien</th>
                            <th>Carbohydrate</th>
                            <th>Time</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($morning as $roww)
                            @php
                                $row=  \App\Models\Food::where('id',$roww->food_id)->first();
                            @endphp
                            <tr>
                                <td>
                                    @if ($row->id)
                                        <span class="badge badge-info">{{ $row->id }}</span>
                                    @else
                                        <div class="badge badge-danger">Inactive</div>
                                    @endif
                                </td>
                                <td>
                                    @if ($row->id)
                                        <span class="">{{ Str::limit($row->name) }}</span>
                                    @else
                                        <div class="badge badge-danger">Inactive</div>
                                    @endif
                                </td>
                                <td>
                                    @if ($row->id)
                                        <span class="">{{ $row->calories }}</span>
                                    @else
                                        <div class="badge badge-danger">Inactive</div>
                                    @endif
                                </td>
                                <td>
                                    @if ($row->id)
                                        <span class="">{{ $row->fat }}</span>
                                    @else
                                        <div class="badge badge-danger">Inactive</div>
                                    @endif
                                </td>
                                <td>
                                    @if ($row->id)
                                        <span class="">{{ $row->protein }}</span>
                                    @else
                                        <div class="badge badge-danger">Inactive</div>
                                    @endif
                                </td>
                                <td>
                                    @if ($row->id)
                                        <span class="">{{ $row->carbohydrate }}</span>
                                    @else
                                        <div class="badge badge-danger">Inactive</div>
                                    @endif
                                </td>
                                <td>
                                    @if ($row->id)
                                        <span class="">{{ $roww->time }}</span>
                                    @else
                                        <div class="badge badge-danger">Inactive</div>
                                    @endif
                                </td>
                                <td>
                                    <a class="btn btn-secondary btn-sm"
                                       href="{{ route('app.users.show',$row->id) }}"><i
                                            class="fas fa-eye"></i>
                                        <span></span>
                                    </a>
                                    <button type="button" class="btn btn-danger btn-sm"
                                            onclick="deleteData({{ $row->id }})">
                                        <i class="fas fa-trash-alt"></i>
                                        <span></span>
                                    </button>
                                    <form id="delete-form-{{ $row->id }}"
                                          action="{{ route('app.diets.destroy',$roww->id) }}" method="POST"
                                          style="display: none;"
                                    >
                                        @csrf()
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="main-card mb-3 card">
                <div class="card-body"><h5 class="card-title">Lunch {{$noon_all['calories']}}</h5>
                    <form method="POST"
                          action="{{  route('app.diets.update.time',$post_id)  }}"
                          enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <input type="hidden" name="post_id" value="{{$post_id}}">
                        <input type="hidden" name="period" value="noon">
                        <input type="time" name="time" id="">
                        <button type="submit" class="btn btn-success btn-sm">
                            <i class="fas fa-ticket-alt"></i>
                            <span></span>
                        </button>
                    </form>
                    <table class="mb-0 table table-responsive">
                        <thead>
                        <tr>
                            <th>Food ID</th>
                            <th>name</th>
                            <th>Calories</th>
                            <th>Fat</th>
                            <th>Protien</th>
                            <th>Carbohydrate</th>
                            <th>Time</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($noon as $roww)
                            @php
                                $row=  \App\Models\Food::where('id',$roww->food_id)->first();
                            @endphp
                            <tr>
                                <td>
                                    @if ($row->id)
                                        <span class="badge badge-info">{{ $row->id }}</span>
                                    @else
                                        <div class="badge badge-danger">Inactive</div>
                                    @endif
                                </td>
                                <td>
                                    @if ($row->id)
                                        <span class="">{{ $row->name }}</span>
                                    @else
                                        <div class="badge badge-danger">Inactive</div>
                                    @endif
                                </td>
                                <td>
                                    @if ($row->id)
                                        <span class="">{{ $row->calories }}</span>
                                    @else
                                        <div class="badge badge-danger">Inactive</div>
                                    @endif
                                </td>
                                <td>
                                    @if ($row->id)
                                        <span class="">{{ $row->fat }}</span>
                                    @else
                                        <div class="badge badge-danger">Inactive</div>
                                    @endif
                                </td>
                                <td>
                                    @if ($row->id)
                                        <span class="">{{ $row->protein }}</span>
                                    @else
                                        <div class="badge badge-danger">Inactive</div>
                                    @endif
                                </td>
                                <td>
                                    @if ($row->id)
                                        <span class="">{{ $row->carbohydrate }}</span>
                                    @else
                                        <div class="badge badge-danger">Inactive</div>
                                    @endif
                                </td>
                                <td>
                                    @if ($row->id)
                                        <span class="">{{ $roww->time }}</span>
                                    @else
                                        <div class="badge badge-danger">Inactive</div>
                                    @endif
                                </td>
                                <td>
                                    <a class="btn btn-secondary btn-sm"
                                       href="{{ route('app.users.show',$row->id) }}"><i
                                            class="fas fa-eye"></i>
                                        <span></span>
                                    </a>
                                    <button type="button" class="btn btn-danger btn-sm"
                                            onclick="deleteData({{ $row->id }})">
                                        <i class="fas fa-trash-alt"></i>
                                        <span></span>
                                    </button>
                                    <form id="delete-form-{{ $row->id }}"
                                          action="{{ route('app.diets.destroy.noon',$roww->id) }}" method="POST"
                                          style="display: none;">
                                        @csrf()
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="main-card mb-3 card">
                <div class="card-body"><h5 class="card-title">Dinner {{$night_all['calories']}}</h5>
                    <form method="POST"
                          action="{{  route('app.diets.update.time',$post_id)  }}"
                          enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <input type="hidden" name="post_id" value="{{$post_id}}">
                        <input type="time" name="time" id="">
                        <input type="hidden" name="period" value="night">
                        <button type="submit" class="btn btn-success btn-sm">
                            <i class="fas fa-ticket-alt"></i>
                            <span></span>
                        </button>
                    </form>
                    <table class="mb-0 table table-responsive">
                        <thead>
                        <tr>
                            <th>Food ID</th>
                            <th>name</th>
                            <th>Calories</th>
                            <th>Fat</th>
                            <th>Protien</th>
                            <th>Carbohydrate</th>
                            <th>Time</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($night as $roww)
                            @php
                                $row=  \App\Models\Food::where('id',$roww->food_id)->first();
                            @endphp
                            <tr>
                                <td>
                                    @if ($row->id)
                                        <span class="badge badge-info">{{ $row->id }}</span>
                                    @else
                                        <div class="badge badge-danger">Inactive</div>
                                    @endif
                                </td>
                                <td>
                                    @if ($row->id)
                                        <span class="">{{ $row->name }}</span>
                                    @else
                                        <div class="badge badge-danger">Inactive</div>
                                    @endif
                                </td>
                                <td>
                                    @if ($row->id)
                                        <span class="">{{ $row->calories }}</span>
                                    @else
                                        <div class="badge badge-danger">Inactive</div>
                                    @endif
                                </td>
                                <td>
                                    @if ($row->id)
                                        <span class="">{{ $row->fat }}</span>
                                    @else
                                        <div class="badge badge-danger">Inactive</div>
                                    @endif
                                </td>
                                <td>
                                    @if ($row->id)
                                        <span class="">{{ $row->protein }}</span>
                                    @else
                                        <div class="badge badge-danger">Inactive</div>
                                    @endif
                                </td>
                                <td>
                                    @if ($row->id)
                                        <span class="">{{ $row->carbohydrate }}</span>
                                    @else
                                        <div class="badge badge-danger">Inactive</div>
                                    @endif
                                </td>
                                <td>
                                    @if ($row->id)
                                        <span class="">{{ $roww->time }}</span>
                                    @else
                                        <div class="badge badge-danger">Inactive</div>
                                    @endif
                                </td>
                                <td>
                                    <a class="btn btn-secondary btn-sm"
                                       href="{{ route('app.users.show',$row->id) }}"><i
                                            class="fas fa-eye"></i>
                                        <span></span>
                                    </a>
                                    <button type="button" class="btn btn-danger btn-sm"
                                            onclick="deleteData({{ $row->id }})">
                                        <i class="fas fa-trash-alt"></i>
                                        <span></span>
                                    </button>
                                    <form id="delete-form-{{ $row->id }}"
                                          action="{{ route('app.diets.destroy.night',$roww->id) }}" method="POST"
                                          style="display: none;">
                                        @csrf()
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="main-card mb-12 card">
                        <div class="card-header">Total Information</div>
                        <div class="card-body">
                            <div class="card-shadow-primary profile-responsive card-border mb-3 card">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-3">
                                                    <div class="icon-wrapper m-0">
                                                        <div class="progress-circle-wrapper">
                                                            <div
                                                                class="circle-progress d-inline-block circle-progress-success">
                                                                <span
                                                                    class="widget-heading widget-numbers-sm text-primary">Calories</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Calories Status</div>
                                                    <div class="widget-subheading bold text-primary">Normal</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="widget-numbers widget-numbers-sm text-primary">
                                                        <span>{{$morning_all['calories'] + $noon_all['calories']}}</span>
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
                                                            <div
                                                                class="circle-progress d-inline-block circle-progress-success">
                                                                <span
                                                                    class="widget-heading widget-numbers-sm text-primary">Fat</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Fat Status</div>
                                                    <div class="widget-subheading bold text-primary">Normal</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="widget-numbers widget-numbers-sm text-primary">
                                                        <span>{{$morning_all['fat']+$noon_all['fat']}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <a class="mb-2 mr-2 btn-transition btn btn-outline-primary btn-lg btn-block"
                                                   href="{{ route('app.diet.show.single',$post_id) }}">Generate Food
                                                </a>
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
    {{--    <script>--}}
    {{--        $(document).ready(function () {--}}
    {{--            // Datatable--}}
    {{--            $("#datatable").DataTable();--}}
    {{--        });--}}
    {{--    </script>--}}
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
