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
                <div>{{ __('All Users') }}</div>
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
        {{--        <div class="col-md-6">--}}
        {{--            <div class="main-card mb-6 card">--}}
        {{--                <div class="table-responsive">--}}
        {{--                    <table id="datatable" class="align-middle mb-0 table table-borderless table-striped table-hover">--}}
        {{--                        <thead>--}}
        {{--                        <tr>--}}
        {{--                            <th class="text-center">#</th>--}}
        {{--                            <th>Name</th>--}}
        {{--                            <th class="text-center">Morning</th>--}}
        {{--                            <th class="text-center">Noon</th>--}}
        {{--                            <th class="text-center">Afternoon</th>--}}
        {{--                            <th class="text-center">Night</th>--}}
        {{--                            <th class="text-center">Actions</th>--}}
        {{--                        </tr>--}}
        {{--                        </thead>--}}
        {{--                        <tbody>--}}
        {{--                            @foreach($food as $key=>$user)--}}
        {{--                                <tr>--}}
        {{--                                    <td class="text-center text-muted">#{{ $key + 1 }}</td>--}}
        {{--                                    <td>--}}
        {{--                                        <div class="widget-content p-0">--}}
        {{--                                            <div class="widget-content-wrapper">--}}
        {{--                                                <div class="widget-content-left mr-3">--}}
        {{--                                                    <div class="widget-content-left">--}}
        {{--                                                        <img width="40" class="rounded-circle"--}}
        {{--                                                             src="{{ $user->getFirstMediaUrl('avatar') != null ? $user->getFirstMediaUrl('avatar','thumb') : config('app.placeholder').'160' }}" alt="User Avatar">--}}
        {{--                                                    </div>--}}
        {{--                                                </div>--}}
        {{--                                                <div class="widget-content-left flex2">--}}
        {{--                                                    <div class="widget-heading">{{ $user->name }}</div>--}}
        {{--                                                    <div class="widget-subheading opacity-7">--}}
        {{--                                                        @if ($user->role)--}}
        {{--                                                            <span class="badge badge-info">{{ $user->role->name }}</span>--}}
        {{--                                                        @else--}}
        {{--                                                            <span class="badge badge-danger">No role found :(</span>--}}
        {{--                                                        @endif--}}
        {{--                                                    </div>--}}
        {{--                                                </div>--}}
        {{--                                            </div>--}}
        {{--                                        </div>--}}
        {{--                                    </td>--}}
        {{--                                    @php--}}
        {{--                                    $data = \App\Models\Mealtime::where('food_id',$user->id)->first();--}}
        {{--                                    @endphp--}}
        {{--                                    <td class="text-center">--}}
        {{--                                        @if ($data->morning==1)--}}
        {{--                                            <div class="badge badge-success">{{ $data->morning }}</div>--}}
        {{--                                        @else--}}
        {{--                                            <div class="badge badge-danger">Inactive</div>--}}
        {{--                                        @endif--}}
        {{--                                    </td>--}}
        {{--                                    <td class="text-center">--}}
        {{--                                        @if ($data->noon==1)--}}
        {{--                                            <div class="badge badge-success">{{ $data->noon }}</div>--}}
        {{--                                        @else--}}
        {{--                                            <div class="badge badge-danger">Inactive</div>--}}
        {{--                                        @endif--}}
        {{--                                    </td>--}}
        {{--                                    <td class="text-center">--}}
        {{--                                        @if ($data->afternoon==1)--}}
        {{--                                            <div class="badge badge-success">{{ $data->afternoon }}</div>--}}
        {{--                                        @else--}}
        {{--                                            <div class="badge badge-danger">Inactive</div>--}}
        {{--                                        @endif--}}
        {{--                                    </td>--}}
        {{--                                    <td class="text-center">--}}
        {{--                                        @if ($data->night==1)--}}
        {{--                                            <div class="badge badge-success">{{ $data->night }}</div>--}}
        {{--                                        @else--}}
        {{--                                            <div class="badge badge-danger">Inactive</div>--}}
        {{--                                        @endif--}}
        {{--                                    </td>--}}


        {{--                                    <td class="text-center">--}}
        {{--                                        <a class="btn btn-secondary btn-sm" href="{{ route('app.users.show',$user->id) }}"><i--}}
        {{--                                                class="fas fa-eye"></i>--}}
        {{--                                            <span>Add</span>--}}
        {{--                                        </a>--}}
        {{--                                    </td>--}}
        {{--                                </tr>--}}
        {{--                            @endforeach--}}
        {{--                        </tbody>--}}
        {{--                    </table>--}}
        {{--                </div>--}}
        {{--            </div>--}}


        {{--        </div>--}}
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
        <div class="col-md-4">
            <h3>Import Survey</h3>
            <form action="{{ route('app.foods.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="fileinput fileinput-new margin-bottom-10" data-provides="fileinput">
                        <label>Select File (xls, xlsx)</label>
                        <div class="input-group input-large">
                            <div class="custom-file">
                                <input type="file" id="contactsFile" name="file" class="custom-file-input"
                                       required accept=".xls,.xlsx,.csv">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Import</button>
                </div>
            </form>
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
@endpush
