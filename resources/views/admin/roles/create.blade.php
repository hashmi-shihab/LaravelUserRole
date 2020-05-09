@extends('admin.master')

@section('content')
    <section class="content-header">
        <h1>
            Add Role
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
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border" >
                @if(count($errors)>0)
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aira-hidden="true">
                            &times;
                        </button>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="{{route('roles.store')}}">
                @csrf
                @method('POST')
                <div class="box-body">
                  <div class="form-group">
                    <label for="name" class="required-field">Role's Name&nbsp</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" autocomplete="off" value="{{ old('name') }}">
                  </div>
                      <div class="form-group">
                        <label for="permission" class="required-field">Role's Permissions&nbsp</label>
                        <br><label><input type="checkbox" id="select_all"> Select All</label>
                        <div class="row">
                          <div class="col-md-12">
                              @foreach($permissions as $permission)

                                    <div class="col-md-3" style="border:1px solid Black;  margin:10px;">
                                      <div class="row text-center" style="border-bottom:1px solid Black;">
                                          @foreach($permission as $per)
                                              @if($loop->first)
                                              <strong>{{$per['for']}}</strong>
                                                  @endif
                                           @endforeach
                                      </div>
                                        @foreach($permission as $per)
                                          <label><input class="case" type="checkbox" value="{{$per['id']}}" name="permission[]"> <lable>
                                              {{$per['name']}}</lable></label>
                                        @endforeach
                                          <br>
                                    </div>

                              @endforeach
                          </div>
                        </div>
                      </div>
                </div>
                <!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Create</button>
                  </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </section>
@endsection
@section('jsscript')
<script>
$(document).ready(function() {
  $("#select_all").change(function(){
    if(this.checked){
      $(".case").each(function(){
        this.checked=true;
      })
    }else{
      $(".case").each(function(){
        this.checked=false;
      })
    }
  });

  $(".case").click(function () {
    if ($(this).is(":checked")){
      var isAllChecked = 0;
      $(".case").each(function(){
        if(!this.checked)
           isAllChecked = 1;
      })
      if(isAllChecked == 0){ $("#select_all").prop("checked", true); }
    }else {
      $("#select_all").prop("checked", false);
    }
  });
});
</script>
@endsection
