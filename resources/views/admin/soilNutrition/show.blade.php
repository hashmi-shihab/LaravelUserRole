@extends('admin.master')
@section('content')
    <section class="content-header">
        <h1>
            Soil Nutrition's Details
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            @can('soilNutritionList',\Illuminate\Support\Facades\Auth::user())
            <li class="active"><a href="{{ route('soilNutrition.index') }}">Soil Nutrition's List</a></li>
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
                            <b>Land Type</b> <a class="pull-right">{{$soilNutrition->ltN}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Land Class</b> <a class="pull-right">{{$soilNutrition->lCN}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Texture</b> <a class="pull-right">{{$soilNutrition->tN}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Cultivation</b> <a class="pull-right">{{$soilNutrition->cTN}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>District</b> <a class="pull-right">{{$soilNutrition->disN}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Upazila</b> <a class="pull-right">{{$soilNutrition->upaN}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>pH</b> <a class="pull-right">{{$soilNutrition->pH}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>State Of pH</b> <a class="pull-right">{{$soilNutrition->spH}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Organic Matter</b> <a class="pull-right">{{$soilNutrition->organicMatter}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>State Of Organic Matter</b> <a class="pull-right">{{$soilNutrition->soM}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>calcium</b> <a class="pull-right">{{$soilNutrition->calcium}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>State Of Calcium</b> <a class="pull-right">{{$soilNutrition->sCa}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Magnesium</b> <a class="pull-right">{{$soilNutrition->magnesium}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>State Of Magnesium</b> <a class="pull-right">{{$soilNutrition->smg}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Potassium</b> <a class="pull-right">{{$soilNutrition->potassium}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>State Of Potassium</b> <a class="pull-right">{{$soilNutrition->sK}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Nitrogen</b> <a class="pull-right">{{$soilNutrition->nitrogen}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>State Of Nitrogen</b> <a class="pull-right">{{$soilNutrition->sN}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Phosphorus</b> <a class="pull-right">{{$soilNutrition->phosphorus}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>State Of Phosphorus</b> <a class="pull-right">{{$soilNutrition->sP}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Sulfur</b> <a class="pull-right">{{$soilNutrition->sulfur}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>State Of Sulfur</b> <a class="pull-right">{{$soilNutrition->sS}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Boron</b> <a class="pull-right">{{$soilNutrition->boron}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>State Of Boron</b> <a class="pull-right">{{$soilNutrition->sB}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Copper</b> <a class="pull-right">{{$soilNutrition->copper}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>State Of Copper</b> <a class="pull-right">{{$soilNutrition->sCu}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Ferrous</b> <a class="pull-right">{{$soilNutrition->ferrous}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>State Of Ferrous</b> <a class="pull-right">{{$soilNutrition->sFe}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Manganese</b> <a class="pull-right">{{$soilNutrition->manganese}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>State Of Manganese</b> <a class="pull-right">{{$soilNutrition->sMn}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>zinc</b> <a class="pull-right">{{$soilNutrition->zinc}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>State Of zinc</b> <a class="pull-right">{{$soilNutrition->sZn}}</a>
                        </li>

                    </ul>


                    <div class="row"></div>
                    @can('soilNutrition.update',\Illuminate\Support\Facades\Auth::user())
                        <div class="col-md-2">
                            <a href="{{route('soilNutrition.edit',$soilNutrition->id)}}" type="submit"  class="btn btn-info">Edit</a>
                        </div>
                    @endcan
                    @can('soilNutrition.delete',\Illuminate\Support\Facades\Auth::user())
                        <div class="col-md-2">
                            <form action="{{ route('soilNutrition.destroy',$soilNutrition->id)}}" method="post">
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





