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
                    <a href="{{ route('app.foods.create') }}"  class="btn-shadow btn btn-info">
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
            <div class="src-area">
                <form method="GET" action="{{route('app.foods.index')}}">

                    <input class="src-input" value="1" type="id" placeholder="Type of search" name="id">
                    <button  type="submit"><i class="ion-ios-search-strong"></i>ssdsdsd</button>
                </form>
            </div>
        </div>


    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-6 card">
                <div class="table-responsive">
{{--                    <table id="datatable" class="align-middle mb-0 table table-borderless table-striped table-hover">--}}
                    <table  class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th>Nameww</th>
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
    <script>
        $(document).ready(function () {
            // Datatable
            $("#datatable").DataTable( {
                "pagingType": "full_numbers"
            } );
        });

    </script>





    <script type="text/javascript">
        $(document).ready(function () {

            $('#country').on('keyup',function() {
                var query = $(this).val();
                $.ajax({

                    url:"{{ route('app.food.search') }}",

                    type:"GET",

                    data:{'country':query},

                    success:function (data) {

                        $('#country_list').html(data);
                    }
                })
                // end of ajax call
            });


            $(document).on('click', 'li', function(){

                var value = $(this).text();
                $('#country').val(value);
                $('#country_list').html("");
            });
        });
    </script>
@endpush
