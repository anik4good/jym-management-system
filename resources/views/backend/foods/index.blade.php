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
                    <a href="#import_food" data-toggle="modal" class="btn-shadow btn btn-info">
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







{{--        <!-- BEGIN MODAL -->--}}
{{--        <div id="import_food" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">--}}
{{--            <div class="modal-dialog">--}}
{{--                <div class="modal-content">--}}
{{--                    <div class="modal-header">--}}
{{--                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>--}}
{{--                        <h4 class="modal-title">File Data Instructions</h4>--}}
{{--                    </div>--}}
{{--                    <div class="modal-body">--}}
{{--                        <h2>Upload File Instructions</h2>--}}
{{--                        <form action="{{ route('app.foods.store') }}" method="post" enctype="multipart/form-data">--}}
{{--                            @csrf--}}
{{--                            <div class="card-body">--}}
{{--                                <div class="fileinput fileinput-new margin-bottom-10" data-provides="fileinput">--}}
{{--                                    <label>Select File (xls, xlsx)</label>--}}
{{--                                    <div class="input-group input-large">--}}
{{--                                        <div class="custom-file">--}}
{{--                                            <input type="file" id="contactsFile" name="file" class="custom-file-input"--}}
{{--                                                   required accept=".xls,.xlsx,.csv">--}}
{{--                                            <label class="custom-file-label" for="customFile">Choose file</label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="form-actions">--}}
{{--                                <button type="submit" class="btn btn-primary">Import</button>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                    <div class="modal-footer">--}}
{{--                        <button type="button" class="btn default" data-dismiss="modal">Close</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- END MODAL -->--}}


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
            $("#datatable").DataTable( {
                "pagingType": "full_numbers"
            } );
        });

    </script>
@endpush
