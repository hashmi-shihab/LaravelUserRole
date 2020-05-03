@extends('admin.master')
@section('content')

    <div class="box">
        <div class="box-header" style="text-align: center" >
            <h3 class="box-title">State List</h3>

            @if(count($errors)>0)

                <ul>
                    @foreach($errors->all() as $error)

                        <li class="alert alert-danger">{{$error}}</li>

                    @endforeach
                </ul>

            @endif


            @if(session()->has('message'))

                <div class="alert alert-success">

                    <button type="button" class="close" data-dismiss="alert" aira-hidden="true">
                        &times;
                    </button>
                    <strong>State</strong>
                    {{session()->get('message')}}

                </div>

            @endif
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped table-responsive">
                <thead>
                <tr>
                    <th>State Bangla Name</th>
                    <th>State English Name</th>
                    <th>Delete</th>
                    <th>Edit</th>
                    <th>Details</th>

                </tr>
                </thead>
                <tbody>
                @foreach($states as $state)
                    <tr>
                        <td>{{$state->name_bn}}</td>
                        <td>{{$state->name_en}}</td>

                        <td>

                            <form action="{{route('state.destroy',$state->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-primary alert-danger fa fa-trash" onclick="return confirm('Are you sure?')"  type="submit"></button>
                            </form>
                        </td>

                        <td><a class="btn btn-primary alert-success fa fa-pencil" href="{{route('state.edit',$state->id)}}"></a></td>
                        <td><a class="btn btn-primary alert-dark fa fa-info-circle" href="{{route('state.show',$state->id)}}"></a></td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>State Bangla Name</th>
                    <th>State English Name</th>
                    <th>Delete</th>
                    <th>Edit</th>
                    <th>Details</th>
                </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.box-body -->
    </div>






@endsection

@section('jsscript')
    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : true,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })
    </script>
@endsection
