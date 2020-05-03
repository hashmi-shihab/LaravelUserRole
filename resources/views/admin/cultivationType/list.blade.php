@extends('admin.master')
@section('content')

    <div class="box">
        <div class="box-header" style="text-align: center">
            <h3 class="box-title">Cultivation Type List</h3>

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
                    <strong>Cultivation Type</strong>
                    {{session()->get('message')}}

                </div>

            @endif
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped table-responsive">
                <thead>
                <tr>
                    <th>Cultivation Type Bangla Name</th>
                    <th>Cultivation Type English Name</th>
                    <th>Delete</th>
                    <th>Edit</th>
                    <th>Details</th>

                </tr>
                </thead>
                <tbody>
                @foreach($cultivationTypes as $cultivationType)
                    <tr>
                        <td>{{$cultivationType->name_bn}}</td>
                        <td>{{$cultivationType->name_en}}</td>

                        <td>

                            <form action="{{route('cultivationType.destroy',$cultivationType->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-primary alert-danger fa fa-trash" onclick="return confirm('Are you sure?')"  type="submit"></button>
                            </form>
                        </td>

                        <td><a class="btn btn-primary alert-success fa fa-pencil" href="{{route('cultivationType.edit',$cultivationType->id)}}"></a></td>
                        <td><a class="btn btn-primary alert-dark fa fa-info-circle" href="{{route('cultivationType.show',$cultivationType->id)}}"></a></td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>Cultivation Type Bangla Name</th>
                    <th>Cultivation Type English Name</th>
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
