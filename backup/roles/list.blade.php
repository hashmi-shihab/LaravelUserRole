@extends('admin.master')

@section('content')

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border" style="text-align: center">
                <h3 class="box-title">Role List</h3>
            </div>
              <div class="box-header">
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
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SL</th>
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
                  <td>{{ $i++ }}</td>
                  <td>
                      <form action="{{ route('roles.destroy', $role->id) }}" method="POST">
                          <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-sm btn-success">Edit</a>
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete?')">Delete</button>
                      </form>
                    </td>
                    <td>{{ $role->name }}</td>
                </tr>
                @endforeach
                @endif
                </tbody>
                <tfoot>
                <tr>
                  <th>SL</th>
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

