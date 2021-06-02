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
                    <a href="{{ route('app.meals.create') }}" class="btn-shadow btn btn-info">
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
        <div class="col-md-4">
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
                        </tr>
                        </thead>
                        <tbody>
                        {{--                     <form action="{{ route('app.foods.store') }}" method="post" enctype="multipart/form-data">--}}
                        @foreach($foods as $row)
                            @foreach($morning as $mor)
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


                                        <a class="btn btn-secondary btn-sm"
                                           href="{{ route('app.meals.show.new',['food_id'=>$row->id,'post_id'=>$mor->id,'check'=>"Morning"]) }}"><i
                                                class="fas fa-eye"></i>
                                            <span>Morning</span>
                                        </a>
{{--                                        <div class="main-card mb-3 card">--}}
{{--                                            <div class="card-body">--}}
{{--                                                <h5 class="card-title">Morning</h5>--}}
{{--                                                <div class="dropdown d-inline-block">--}}
{{--                                                    <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-primary">Basic--}}
{{--                                                    </button>--}}
{{--                                                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu" style="">--}}
{{--                                                        <div class="dropdown-menu-header">--}}
{{--                                                            <div class="dropdown-menu-header-inner bg-success">--}}
{{--                                                                <div class="menu-header-image opacity-1" style="background-image: url('assets/images/dropdown-header/abstract3.jpg');"></div>--}}
{{--                                                                <div class="menu-header-content text-left">--}}
{{--                                                                    <h5 class="menu-header-title">Time</h5>--}}
{{--                                                                    <h6 class="menu-header-subtitle">Please Select a time slot from below</h6>--}}
{{--                                                                    <div class="menu-header-btn-pane">--}}
{{--                                                                        <button class="mr-2 btn btn-dark btn-sm">Time</button>--}}
{{--                                                                        <button class="btn-icon btn-icon-only btn btn-warning btn-sm">--}}
{{--                                                                            <i class="pe-7s-config btn-icon-wrapper"> </i>--}}
{{--                                                                        </button>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <a href="{{ route('app.meals.show.new',['food_id'=>$row->id,'post_id'=>$mor->id,'check'=>"Morning",'time'=>$row->id]) }}"  tabindex="0" class="dropdown-item">10.00 PM</a>--}}
{{--                                                        <button type="button" tabindex="0" class="dropdown-item">Settings</button>--}}
{{--                                                        <button type="button" tabindex="0" class="dropdown-item">Actions</button>--}}
{{--                                                        <div tabindex="-1" class="dropdown-divider"></div>--}}
{{--                                                        <button type="button" tabindex="0" class="dropdown-item">Dividers</button>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}



{{--                                            </div>--}}
{{--                                        </div>--}}

                                        <a class="btn btn-secondary btn-sm"
                                           href="{{ route('app.meals.show.new',['food_id'=>$row->id,'post_id'=>$mor->id,'check'=>"Noon"]) }}"><i
                                                class="fas fa-eye"></i>
                                            <span>Noon</span>
                                        </a>

                                        <a class="btn btn-secondary btn-sm"
                                           href="{{ route('app.meals.update.time',$mor->id) }}"><i
                                                class="fas fa-eye"></i>
                                            <span>generate invoiaaaace</span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @endforeach
                        {{--                        </form>--}}
                        </tbody>
                        <
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <h3>Morning <span class="badge badge-pill badge-primary">491 Calories</span></h3>
            <div class="main-card mb-6 card">
                <div class="table-responsive">
                    <table id="datatable-morning"
                           class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th>Name</th>
                            <th class="text-center">image</th>
                            <th class="text-center">Food Group</th>
                            <th class="text-center">Calories</th>
                            <th class="text-center">Fat</th>
                            <th class="text-center">Protein</th>
                            <th class="text-center">carbohydrate</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($morning as $roww)
                            @php
                                $row=  \App\Models\Food::where('id',$roww->food_id)->first();
                            @endphp
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
                                    <div class="badge badge-success">{{ $row->fat }}</div>
                                </td>
                                <td class="text-center">
                                    <div class="badge badge-success">{{ $row->protein }}</div>
                                </td>
                                <td class="text-center">
                                    <div class="badge badge-success">{{ $row->carbohydrate }}</div>
                                </td>
{{--                                <td class="text-center">--}}
{{--                                    <input id="email" type="text" class="form-control"--}}
{{--                                           name="time">--}}
{{--                                </td>--}}
{{--                                <td class="text-center">--}}
{{--                                    <a class="btn btn-danger mb-2" onclick="updateid({{$row->id}})">Update</a>--}}
{{--                                    <form id="update-id-{{$row->id}}"--}}
{{--                                          action="{{route('app.meals.update.time',$row->id)}}"--}}
{{--                                          method="post" style="display: none">--}}
{{--                                        @csrf--}}
{{--                                        @method('PUT')--}}
{{--                                    </form>--}}
{{--                                </td>--}}
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <h3>Noon <span class="badge badge-pill badge-primary">491 Calories</span></h3>
            <div class="main-card mb-6 card">
                <div class="table-responsive">
                    <table id="datatable-morning"
                           class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th>Name</th>
                            <th class="text-center">image</th>
                            <th class="text-center">Food Group</th>
                            <th class="text-center">Calories</th>
                            <th class="text-center">Fat</th>
                            <th class="text-center">Protein</th>
                            <th class="text-center">carbohydrate</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($noon as $roww)
                            @php
                                $row=  \App\Models\Food::where('id',$roww->food_id)->first();
                            @endphp
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
                                    <div class="badge badge-success">{{ $row->fat }}</div>
                                </td>
                                <td class="text-center">
                                    <div class="badge badge-success">{{ $row->protein }}</div>
                                </td>
                                <td class="text-center">
                                    <div class="badge badge-success">{{ $row->carbohydrate }}</div>
                                </td>
                                <td class="text-center">
                                    <a class="btn btn-secondary btn-sm" href="{{ route('app.users.show',$row->id) }}"><i
                                            class="fas fa-eye"></i>
                                        <span>Add</span>
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
