@extends('layouts.backend.app')
@section('title','Foods')

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
                <div>{{ __('All Foods') }}</div>
            </div>
            <div class="page-title-actions">
                <div class="d-inline-block dropdown">
                    <a href="{{ route('app.foods.create') }}" class="btn-shadow btn btn-info">
                        <span class="btn-icon-wrapper pr-2 opacity-7">
                            <i class="fas fa-plus-circle fa-w-20"></i>
                        </span>
                        {{ __('Import Food') }}
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <form method="GET" action="{{route('app.foods.index')}}">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">Inline</h5>
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
                            <th>Image</th>
                            <th class="text-center">Food Group</th>
                            <th class="text-center">Calories</th>
                            <th class="text-center">Fat</th>
                            <th class="text-center">Protein</th>
                            <th class="text-center">carbohydrate</th>
                            <th class="text-center">Actions</th>
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
                                    {{ $row->name}}
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
                    {{$foods->links()}}
                </div>
            </div>
        </div>
        <hr>
    </div>
@endsection

@push('js')
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

    {{--    <script type="text/javascript">--}}
    {{--        $(document).ready(function () {--}}
    {{--            // Datatable--}}
    {{--            $("#datatable").DataTable({});--}}
    {{--        });--}}
    {{--    </script>--}}


@endpush
