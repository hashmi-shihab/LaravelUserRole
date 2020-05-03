@extends('admin.master')
@section('content')
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
                            <b>Land Type</b> <a class="pull-right">{{$fertility->ltN}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Land Class</b> <a class="pull-right">{{$fertility->lCN}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Texture</b> <a class="pull-right">{{$fertility->tN}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Cultivation</b> <a class="pull-right">{{$fertility->cTN}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>District</b> <a class="pull-right">{{$fertility->disN}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Upazila</b> <a class="pull-right">{{$fertility->upaN}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>pH</b> <a class="pull-right">{{$fertility->pH}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>State Of pH</b> <a class="pull-right">{{$fertility->spH}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Organic Matter</b> <a class="pull-right">{{$fertility->organicMatter}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>State Of Organic Matter</b> <a class="pull-right">{{$fertility->soM}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>calcium</b> <a class="pull-right">{{$fertility->calcium}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>State Of Calcium</b> <a class="pull-right">{{$fertility->sCa}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Magnesium</b> <a class="pull-right">{{$fertility->magnesium}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>State Of Magnesium</b> <a class="pull-right">{{$fertility->smg}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Potassium</b> <a class="pull-right">{{$fertility->potassium}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>State Of Potassium</b> <a class="pull-right">{{$fertility->sK}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Nitrogen</b> <a class="pull-right">{{$fertility->nitrogen}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>State Of Nitrogen</b> <a class="pull-right">{{$fertility->sN}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Phosphorus</b> <a class="pull-right">{{$fertility->phosphorus}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>State Of Phosphorus</b> <a class="pull-right">{{$fertility->sP}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Sulfur</b> <a class="pull-right">{{$fertility->sulfur}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>State Of Sulfur</b> <a class="pull-right">{{$fertility->sS}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Boron</b> <a class="pull-right">{{$fertility->boron}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>State Of Boron</b> <a class="pull-right">{{$fertility->sB}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Copper</b> <a class="pull-right">{{$fertility->copper}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>State Of Copper</b> <a class="pull-right">{{$fertility->sCu}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Ferrous</b> <a class="pull-right">{{$fertility->ferrous}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>State Of Ferrous</b> <a class="pull-right">{{$fertility->sFe}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Manganese</b> <a class="pull-right">{{$fertility->manganese}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>State Of Manganese</b> <a class="pull-right">{{$fertility->sMn}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>zinc</b> <a class="pull-right">{{$fertility->zinc}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>State Of zinc</b> <a class="pull-right">{{$fertility->sZn}}</a>
                        </li>

                    </ul>


                    <div class="row"></div>
                    <div class="col-md-2">
                        <a href="{{route('fertilityClass.edit',$fertility->id)}}" type="submit"  class="btn btn-info">Edit</a>
                    </div>
                    <div class="col-md-2">
                        <form action="{{ route('fertilityClass.destroy',$fertility->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-primary alert-danger" onclick="return confirm('Are you sure?')"  type="submit">Delete</button>
                        </form>
                    </div>
                </div>

            </div>
            <!-- /.box-body -->
        </div>

    </div>



@endsection





