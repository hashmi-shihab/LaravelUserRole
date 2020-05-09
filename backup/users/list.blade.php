@extends('admin.master')

@section('content')

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border" style="text-align: center">
                <h3 class="box-title">User's List</h3>
            </div>
              <div class="box-header">
                  @if(session()->has('success'))
                      <div class="alert alert-success">
                          <button type="button" class="close" data-dismiss="alert" aira-hidden="true">
                              &times;
                          </button>
                          {{session()->get('success')}}
                      </div>
                  @endif
              </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>SL</th>
                    <th>Action</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Assigned Role</th>
                    <th>Created</th>
                </tr>
                </thead>
                <tbody>
                @if(count($data))
                @php
                $i = 1;
                @endphp
                @foreach($data as $key => $user)
                <tr>
                  <td>{{ $i++ }}</td>
                  <td>
                      <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                          <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-success fa fa-pencil"></a>
                          <a class="btn btn-sm btn-primary alert-dark fa fa-info" href="{{route('users.show',$user->id)}}"></a>
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-danger fa fa-trash" onclick="return confirm('Are you sure to delete?')"></button>
                      </form>
                    </td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td><label class="badge badge-pill">{{$user->role->name}}</label></td>
                    <td>{{ $user->created_at }}</td>
                </tr>
                @endforeach
                @endif
                </tbody>
                <tfoot>
                <tr>
                    <th>SL</th>
                    <th>Action</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Assigned Role</th>
                    <th>Created</th>
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

