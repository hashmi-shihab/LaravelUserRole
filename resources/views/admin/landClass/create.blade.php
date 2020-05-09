@extends('admin.master')
@section('content')

    <!-- Content Header (User header) -->
    <section class="content-header">
        <h1>
            Add Land Class
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            @can('landClassList',\Illuminate\Support\Facades\Auth::user())
                <li class="active"><a href="{{ route('landClass.index') }}">Land Class's List</a></li>
            @endcan
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
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
                    <form role="form" method="Post" action="{{route('landClass.store')}}">
                        @csrf
                        @method('POST')
                        <div class="box-body">
                            <div class="form-group">
                                <label for="">Land Class Name Bangla</label>
                                <input type="" class="form-control" name="name_bn"  placeholder="Enter Land Class Name Bangla">
                            </div>
                            <div class="form-group">
                                <label for="">Land Class Name English</label>
                                <input type="" class="form-control" name="name_en" placeholder="Enter Land Class Name English">
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>



    @endsection
