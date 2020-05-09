@extends('admin.master')
@section('content')

    <section class="content-header">
        <h1>
            State's List
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            @can('stateList',\Illuminate\Support\Facades\Auth::user())
                <li class="active"><a href="{{ route('state.index') }}">State's List</a></li>
            @endcan
        </ol>
    </section>


    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
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

                    <div class="box-body table-responsive no-padding">
                        <table id="example1" class="table table-bordered table-striped table-responsive">
                            <thead>
                            <tr>
                                <th>Sl.</th>
                                <th>State Bangla Name</th>
                                <th>State English Name</th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            @php
                             $i=1;
                            @endphp
                            <tbody>
                            @foreach($states as $state)
                                <tr>
                                    <td>{{$i++}}.</td>
                                    <td>{{$state->name_bn}}</td>
                                    <td>{{$state->name_en}}</td>

                                    <td nowrap>
                                        <form action="{{route('state.destroy',$state->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a class="btn btn-primary alert-dark fa fa-info-circle" href="{{route('state.show',$state->id)}}"></a>
                                            @can('state.update',\Illuminate\Support\Facades\Auth::user())
                                                <a class="btn btn-primary alert-success fa fa-pencil" href="{{route('state.edit',$state->id)}}"></a>
                                            @endcan
                                            @can('state.delete',\Illuminate\Support\Facades\Auth::user())
                                                <button class="btn btn-primary alert-danger fa fa-trash" onclick="return confirm('Are you sure?')"  type="submit"></button>
                                            @endcan
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Sl.</th>
                                <th>State Bangla Name</th>
                                <th>State English Name</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>






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
