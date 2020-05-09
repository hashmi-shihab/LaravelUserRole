@extends('admin.master')
@section('content')

    <section class="content-header">
        <h1>
            {{$landClass->name_en}} Details
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            @can('landClassList',\Illuminate\Support\Facades\Auth::user())
                <li class="active"><a href="{{ route('landClass.index') }}">Land Class's List</a></li>
            @endcan
        </ol>
    </section>
    <br>
    <div class="content">

        <div class="col-md-6" {{--style="padding: 0 0 0 280px"--}}>
            @csrf
            <div class="box box-primary">
                <div class="box-body box-profile">
                    {{--<img class="profile-user-img img-responsive img-circle" src="{{asset('images/hostImage/'.$host->image)}}" alt="User profile picture">--}}

                    {{--<h3 class="profile-username text-center">{{$host->name}}</h3>

                    <p class="text-muted text-center">{{$host->certification}}</p>--}}

                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>Land Class Name Bangla</b> <a class="pull-right">{{$landClass->name_bn}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Land Class Name English</b> <a class="pull-right">{{$landClass->name_en}}</a>
                        </li>

                    </ul>


                <div class="row"></div>
                    <div class="col-md-2">
                    <a href="{{route('landClass.edit',$landClass->id)}}" type="submit"  class="btn btn-info">Edit</a>
                    </div>
                    <div class="col-md-2">
                        @can('landClass.delete',\Illuminate\Support\Facades\Auth::user())
                            <form action="{{ route('landClass.destroy',$landClass->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-primary alert-danger" onclick="return confirm('Are you sure?')"  type="submit">Delete</button>
                            </form>
                        @endcan
                    </div>
                </div>

                </div>
                <!-- /.box-body -->
            </div>
        </div>


    @endsection





