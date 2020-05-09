@extends('admin.master')

@section('content')
    <section class="content-header">
        <h1>
            Role's List
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            @can('rolesList',\Illuminate\Support\Facades\Auth::user())
                <li class="active"><a href="{{ route('roles.index') }}">Role's List</a></li>
            @endcan
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              @if(session()->has('message'))
                  <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert" aira-hidden="true">
                          &times;
                      </button>
                      <strong>Role</strong>
                      {{session()->get('message')}}
                  </div>
              @endif
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SL.</th>
                  <th>Action</th>
                  <th>Name</th>
                </tr>
                </thead>
                <tbody>
                @if(count($roles))
                @php
                $i = 1;
                @endphp
                @foreach($roles as $key => $role)
                <tr>
                  <td>{{ $i++ }}.</td>
                  <td nowrap>
                      <form action="{{ route('roles.destroy', $role->id) }}" method="POST">
                          @can('roles.update',\Illuminate\Support\Facades\Auth::user())
                            <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-primary alert-success fa fa-pencil"></a>
                          @endcan
                          @csrf
                          @method('DELETE')
                          @can('roles.delete',\Illuminate\Support\Facades\Auth::user())
                            <button type="submit" class="btn btn-primary alert-danger fa fa-trash" onclick="return confirm('Are you sure to delete?')"></button>
                          @endcan
                      </form>
                    </td>
                    <td>{{ $role->name }}</td>
                </tr>
                @endforeach
                @endif
                </tbody>
                <tfoot>
                <tr>
                  <th>SL.</th>
                  <th>Action</th>
                  <th>Name</th>
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
    <!-- /.content -->
    <!-- DataTables -->
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
                'autoWidth'   : true
            })
        });
    </script>


@endsection

