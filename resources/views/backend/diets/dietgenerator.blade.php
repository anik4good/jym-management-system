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
                                    <input type="text" placeholder="Food name" name="name" class="form-control">
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
                            <th class="">ID</th>
                            <th>Name</th>
                            {{--                            <th class="">image</th>--}}
                            <th class="">Food Group</th>
                            <th class="">Calories</th>
                            <th class="">Fat</th>
                            <th class="">Protein</th>
                            <th class="">Carbs</th>
                            <th class="">Sugar</th>
                            <th class="">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($foods as $row)
                            <tr>
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->name }}</td>
                                {{--                                <td>--}}
                                {{--                                    <div class="widget-content-left">--}}
                                {{--                                        <img width="40" class="rounded-circle"--}}
                                {{--                                             src="{{ $row->image }}">--}}
                                {{--                                    </div>--}}
                                {{--                                </td>--}}
                                <td class="">
                                    <div class="badge badge-success">{{ $row->foodgroup }}</div>
                                </td>
                                <td class="">{{ $row->calories }}</td>
                                <td class="">{{ $row->fat }}</td>
                                <td class="">{{ $row->protein }}</td>
                                <td class="">{{ $row->carbohydrate }}</td>
                                <td class="">{{ $row->sugars }}</td>
                                <td class="">
                                    <form action="{{ route('app.diets.add.food') }}" method="post"
                                          enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" value="{{$row->id}}" name="food_id">
                                        <input type="hidden" value="{{$post_id}}" name="post_id">
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
                <div class="col-md-6">
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
                                                    class="widget-numbers text-success">{{$morning_all['fat'] + $noon_all['fat'] + $night_all['fat']}}%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pt-0 pb-0 card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="widget-content p-0">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Total Protein</div>
                                                <div class="widget-subheading">Normal</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-success">{{ $morning_all['protein'] + $noon_all['protein'] + $night_all['protein'] }}gm</div>
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
                                                <div class="widget-heading">Total Carbs</div>
                                                <div class="widget-subheading">Normal</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div   class="widget-numbers text-success">{{ $morning_all['carbohydrate'] + $noon_all['carbohydrate'] + $night_all['carbohydrate'] }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pt-0 pb-0 card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="widget-content p-0">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Total Sugars</div>
                                                <div class="widget-subheading">Normal</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div   class="widget-numbers text-success">{{ $morning_all['sugars'] + $noon_all['sugars'] + $night_all['sugars'] }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>


                <div class="col-md-6">
                    <li class="list-group-item">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <a class="mb-2 mr-2 btn-transition btn btn-outline-primary btn-lg btn-block"
                                   href="{{ route('app.diet.show.single',$post_id) }}">Generate Food
                                </a>
                            </div>
                        </div>
                    </li>
                </div>
            </div>


        </div>
    </div>


    <div class="row">
        <div class="col-md-4">
            <div class="main-card mb-3 card">
                <div class="card-body"><h5 class="card-title">Breakfast</h5>
                    <form method="POST"
                          action="{{  route('app.diets.update.time',$post_id)  }}"
                          enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <input type="hidden" name="post_id" value="{{$post_id}}">
                        <input type="hidden" name="period" value="breakfast">
                        <input type="time" name="time" id="">
                        <button type="submit" class="btn btn-outline-success">
                            <span class="btn-icon-wrapper pr-2 opacity-7">
                            <i class="fas fa-plus-circle fa-w-20"></i>
                        </span>
                            {{ __('Add Time') }}
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
                            <th>Sugar</th>
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
                                    <span class="">{{ $row->id }} </span>
                                </td>
                                <td>
                                    <span class="">{{ Str::limit($row->name) }}</span>
                                </td>
                                <td>
                                    <span class="">{{ $row->calories }}</span>
                                </td>
                                <td>
                                    <span class="">{{ $row->fat }}</span>
                                </td>
                                <td>
                                    <span class="">{{ $row->protein }}</span>
                                </td>
                                <td>
                                    <span class="">{{ $row->carbohydrate }}</span>
                                </td>
                                <td>
                                    <span class="">{{ $row->sugars }}</span>
                                </td>
                                <td><span class="">{{ $roww->time }}</span></td>
                                <td>

                                    <button type="button" class="btn btn-danger btn-sm"
                                            onclick="deleteData({{ $row->id }})">
                                        <i class="fas fa-trash-alt"></i>
                                        <span></span>
                                    </button>
                                    <form id="delete-form-{{ $row->id }}"
                                          action="{{ route('app.diets.destroy',$roww->id) }}" method="POST"
                                          style="display: none;">
                                        @csrf()
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>

                        @endforeach
                        <tr>
                            <td>
                                <span class="badge badge-info">Total</span>
                            </td>
                            <td>
                                <span class="badge badge-info">{{ count($morning) }} Foods</span>
                            </td>
                            <td>
                                <span class="badge badge-info"> {{$morning_all['calories'] }}</span>
                            </td>
                            <td>
                                <span class="badge badge-info"> {{$morning_all['fat'] }}</span>
                            </td>
                            <td>
                                <span class="badge badge-info"> {{$morning_all['protein'] }}</span>
                            </td>
                            <td>
                                <span class="badge badge-info"> {{$morning_all['carbohydrate'] }}</span>
                            </td>
                            <td>
                                <span class="badge badge-info"> {{$morning_all['sugars'] }}</span>
                            </td>


                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="main-card mb-3 card">
                <div class="card-body"><h5 class="card-title">Lunch</h5>
                    <form method="POST"
                          action="{{  route('app.diets.update.time',$post_id)  }}"
                          enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <input type="hidden" name="post_id" value="{{$post_id}}">
                        <input type="hidden" name="period" value="lunch">
                        <input type="time" name="time" id="">
                        <button type="submit" class="btn btn-outline-success">
                            <span class="btn-icon-wrapper pr-2 opacity-7">
                            <i class="fas fa-plus-circle fa-w-20"></i>
                        </span>
                            {{ __('Add Time') }}
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
                            <th>Sugar</th>
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
                                    <span class="">{{ $row->id }} </span>
                                </td>
                                <td>
                                    <span class="">{{ Str::limit($row->name) }}</span>
                                </td>
                                <td>
                                    <span class="">{{ $row->calories }}</span>
                                </td>
                                <td>
                                    <span class="">{{ $row->fat }}</span>
                                </td>
                                <td>
                                    <span class="">{{ $row->protein }}</span>
                                </td>
                                <td>
                                    <span class="">{{ $row->carbohydrate }}</span>
                                </td>
                                <td>
                                    <span class="">{{ $row->sugars }}</span>
                                </td>
                                <td><span class="">{{ $roww->time }}</span></td>
                                <td>

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

                        @endforeach
                        <tr>
                            <td>
                                <span class="badge badge-info">Total</span>
                            </td>
                            <td>
                                <span class="badge badge-info">{{ count($noon) }} Foods</span>
                            </td>
                            <td>
                                <span class="badge badge-info"> {{$noon_all['calories'] }}</span>
                            </td>
                            <td>
                                <span class="badge badge-info"> {{$noon_all['fat'] }}</span>
                            </td>
                            <td>
                                <span class="badge badge-info"> {{$noon_all['protein'] }}</span>
                            </td>
                            <td>
                                <span class="badge badge-info"> {{$noon_all['carbohydrate'] }}</span>
                            </td>
                            <td>
                                <span class="badge badge-info"> {{$noon_all['sugars'] }}</span>
                            </td>


                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="main-card mb-3 card">
                <div class="card-body"><h5 class="card-title">Dinner</h5>
                    <form method="POST"
                          action="{{  route('app.diets.update.time',$post_id)  }}"
                          enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <input type="hidden" name="post_id" value="{{$post_id}}">
                        <input type="hidden" name="period" value="dinner">
                        <input type="time" name="time" id="">
                        <button type="submit" class="btn btn-outline-success">
                            <span class="btn-icon-wrapper pr-2 opacity-7">
                            <i class="fas fa-plus-circle fa-w-20"></i>
                        </span>
                            {{ __('Add Time') }}
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
                            <th>Sugar</th>
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
                                    <span class="">{{ $row->id }} </span>
                                </td>
                                <td>
                                    <span class="">{{ Str::limit($row->name) }}</span>
                                </td>
                                <td>
                                    <span class="">{{ $row->calories }}</span>
                                </td>
                                <td>
                                    <span class="">{{ $row->fat }}</span>
                                </td>
                                <td>
                                    <span class="">{{ $row->protein }}</span>
                                </td>
                                <td>
                                    <span class="">{{ $row->carbohydrate }}</span>
                                </td>
                                <td>
                                    <span class="">{{ $row->sugars }}</span>
                                </td>
                                <td><span class="">{{ $roww->time }}</span></td>
                                <td>

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

                        @endforeach
                        <tr>
                            <td>
                                <span class="badge badge-info">Total</span>
                            </td>
                            <td>
                                <span class="badge badge-info">{{ count($night) }} Foods</span>
                            </td>
                            <td>
                                <span class="badge badge-info"> {{$night_all['calories'] }}</span>
                            </td>
                            <td>
                                <span class="badge badge-info"> {{$night_all['fat'] }}</span>
                            </td>
                            <td>
                                <span class="badge badge-info"> {{$night_all['protein'] }}</span>
                            </td>
                            <td>
                                <span class="badge badge-info"> {{$night_all['carbohydrate'] }}</span>
                            </td>
                            <td>
                                <span class="badge badge-info"> {{$night_all['sugars'] }}</span>
                            </td>


                        </tr>
                        </tbody>
                    </table>
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
