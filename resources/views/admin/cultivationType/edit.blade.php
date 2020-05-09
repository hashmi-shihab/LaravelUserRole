@extends('admin.master')
@section('content')

    <section class="content-header">
        <h1>
            Edit Cultivation Type
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            @can('landClassList',\Illuminate\Support\Facades\Auth::user())
            <li class="active"><a href="{{ route('cultivationType.index') }}">Cultivation Type's List</a></li>
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
                    <form role="form" method="POST" action="{{route('cultivationType.update',$cultivationType->id)}}">
                        @csrf
                        @method('PUT')
                        <div class="box-body">
                            <div class="form-group">
                                <label for="">Cultivation Type Bangla Name</label>
                                <input type="" class="form-control" name="name_bn"  placeholder="Enter Cultivation Type Bangla Name" value="{{$cultivationType->name_bn}}">
                            </div>
                            <div class="form-group">
                                <label for="">Cultivation Type English Name</label>
                                <input type="" class="form-control" name="name_en" placeholder="Enter Cultivation Type English Name" value="{{$cultivationType->name_en}}">
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
