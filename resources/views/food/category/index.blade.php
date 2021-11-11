
@extends('layouts.master')
@section('title','Food Category')
@section('page-header')
    <i class="fa fa-list"></i> Food Category
@stop
@section('css')

@stop


@section('content')

    <div class="page-header">
      <a class="btn btn-xs btn-info" href="{{ route('category.create') }}" style="float: right; margin: 0 2px;"> <i
              class="fa fa-plus"></i> Add @yield('title') </a>


        <h1>
            @yield('page-header')
        </h1>
    </div>

    @include('partials._alert_message')

    <div class="row">
        <div class="col-xs-12">

            <div class="table-responsive" style="border: 1px #cdd9e8 solid;">
                <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                          <th>Category Id</th>
                          <th>Category name</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach($category as $categorys )
                        <tr>
                          <td>{{$categorys->id}}</td>

                          <td>{{$categorys->categoryname}}</td>
                          <td><button type="button" class="btn btn-primary" onclick="window.location='{{ Route("category.edit",$categorys->id) }}'">Update</button></td>
                          <td><button type="button" class="btn btn-danger" onclick="delete_check({{ $categorys->id }})">Delete</button></td>
                        </tr>
                        <form action="{{ route('category.destroy',$categorys->id)}}"
                            id="deleteCheck_{{ $categorys->id}}" method="POST">
                            @csrf
                            @method("DELETE")
                        </form>
                        @endforeach
                    </tbody>
                </table>

            </div>
            {{-- export/print/save --}}
            {{-- <div class="pull-right" style="margin-top:-20px">
                <a href="" style="margin-right: 5px"><img src="{{ asset('assets/images/export-icons/excel-icon.png') }}"></a>
                <a href="" style="margin-right: 5px"><img src="{{ asset('assets/images/export-icons/pdf-icon.png') }}" ></a>
                <a href="" style="margin-right: 5px"><img src="{{ asset('assets/images/export-icons/word-icon.png') }}"></a>
                <a href="" style="margin-right: 5px"><img src="{{ asset('assets/images/export-icons/printer-icon.png') }}"></a>
            </div> --}}

        </div>
    </div>


@endsection

@section('js')

    <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.dataTables.bootstrap.min.js') }}"></script>

    <script src="{{ asset('assets/js/ace-elements.min.js') }}"></script>
    <script src="{{ asset('assets/js/ace.min.js') }}"></script>

    <!-- inline scripts related to this page -->
    <script type="text/javascript">

        function delete_check(id) {
            Swal.fire({
                title: 'Are you sure ?',
                html: "<b>You want to delete permanently !</b>",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                width: 400,
            }).then((result) => {
                if (result.value) {
                    $('#deleteCheck_' + id).submit();
                }
            })

        }

    </script>


    <script type="text/javascript">
        jQuery(function($) {
            $('#dynamic-table').DataTable({
                "ordering": false,
                "bPaginate": false,
                "lengthChange": false,
                "info": false
            });

        })
    </script>
@stop
