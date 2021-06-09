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
                <div> {{ $diet->name  }} for {{$diet->user->name}}</div>
            </div>
            <div class="page-title-actions">
                <div class="d-inline-block dropdown">
                    <a href="{{ route('app.diets.create') }}" class="btn-shadow btn btn-info">
                        <span class="btn-icon-wrapper pr-2 opacity-7">
                            <i class="fas fa-plus-circle fa-w-20"></i>
                        </span>
                        {{ __('Generate PDF') }}
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-2 col-xl-2 col-md-2">
            <div class="card mb-3 widget-content bg-night-fade">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading">Total Calories</div>
                        {{--                        <div class="widget-subheading">Last year expenses</div>--}}
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-white">
                            <span>{{$morning_all['calories'] + $noon_all['calories']  + $night_all['calories']}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-xl-2 col-md-2">
            <div class="card mb-3 widget-content bg-happy-green">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading">Total Fat</div>
                        <div class="widget-subheading"></div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-dark"><span>{{$morning_all['fat'] + $noon_all['fat']  + $night_all['fat']}}%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-xl-2 col-md-2">
            <div class="card mb-3 widget-content bg-arielle-smile">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading">Total Protein</div>
                        <div class="widget-subheading"></div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-white"><span>{{$morning_all['protein'] + $noon_all['protein'] + $night_all['protein']}}g</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-xl-2 col-md-2">
            <div class="card mb-3 widget-content bg-premium-dark">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading">Total Carbs</div>
                        <div class="widget-subheading"></div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-warning"><span>{{$morning_all['carbohydrate'] + $noon_all['carbohydrate']  + $night_all['carbohydrate']}}g</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-xl-2 col-md-2">
            <div class="card mb-3 widget-content">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Total Sugars</div>
                        <div class="widget-subheading"></div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-success"><span>{{$morning_all['sugars'] + $noon_all['sugars']  + $night_all['sugars']}}g</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-lg-4 col-xl-4 col-md-4">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="widget-content p-0">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Total Orders</div>
                                            <div class="widget-subheading"></div>
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
                                            <div class="widget-subheading"></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-primary">$12.6k</div>
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
                                            <div class="widget-heading">Followers</div>
                                            <div class="widget-subheading"></div>
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
                                            <div class="widget-subheading"></div>
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
        </div>
    </div>


    <div class="row">
        <div class="col-md-4">
            <div class="main-card mb-3 card">
                <div class="card-body"><h5 class="card-title">Morning {{$morning_all['calories']}}</h5>
                    <table class="mb-0 table table-responsive">
                        <thead>
                        <tr>
                            <th>Food name</th>
                            <th>Calories</th>
                            <th>Fat</th>
                            <th>Protien</th>
                            <th>Carbohydrate</th>
                            <th>Time</th>
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
                            </tr>
                        </tbody>
                        @endforeach
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
