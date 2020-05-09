@extends('admin.master')
@section('content')
    <section class="content-header">
        <h1>
            {{$cultivationType->name_en}} Details
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            @can('cultivationTypeList',\Illuminate\Support\Facades\Auth::user())
            <li class="active"><a href="{{ route('cultivationType.index') }}">Cultivation Type's List</a></li>
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
                            <b>Cultivation Type Bangla Name</b> <a class="pull-right">{{$cultivationType->name_bn}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Cultivation Type English Name</b> <a class="pull-right">{{$cultivationType->name_en}}</a>
                        </li>

                    </ul>


                    <div class="row"></div>
                    @can('cultivationType.update',\Illuminate\Support\Facades\Auth::user())
                        <div class="col-md-2">
                            <a href="{{route('cultivationType.edit',$cultivationType->id)}}" type="submit"  class="btn btn-info">Edit</a>
                        </div>
                    @endcan
                    @can('cultivationType.delete',\Illuminate\Support\Facades\Auth::user())
                        <div class="col-md-2">
                            <form action="{{ route('cultivationType.destroy',$cultivationType->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-primary alert-danger" onclick="return confirm('Are you sure?')"  type="submit">Delete</button>
                            </form>
                        </div>
                    @endcan
                </div>

            </div>
            <!-- /.box-body -->
        </div>
    </div>


@endsection





