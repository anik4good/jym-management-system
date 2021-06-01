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
                        {{ __('Create User') }}
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
        <div class="col-md-8">
            <h3>Morning</h3>
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
                        @foreach($testfoods as $row)
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
            <h3>Noon</h3>
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
                        @foreach($testfoods as $row)
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
            <h3>Afteroon</h3>
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
                        @foreach($testfoods as $row)
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
            <h3>Night</h3>
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
                        @foreach($testfoods as $row)
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

@endpush
