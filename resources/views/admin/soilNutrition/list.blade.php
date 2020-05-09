@extends('admin.master')
@section('content')

    <!-- Content Header (User header) -->
    <section class="content-header">
        <h1>
            Soil Nutrition's List
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            @can('soilNutritionList',\Illuminate\Support\Facades\Auth::user())
                <li class="active"><a href="{{ route('soilNutrition.index') }}">Soil Nutrition's List</a></li>
            @endcan
        </ol>
    </section>


    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aira-hidden="true">
                                    &times;
                                </button>
                                <strong>Soil Nutrition</strong>
                                {{session()->get('message')}}
                            </div>
                        @endif
                    </div>

                    <div class="box-body table-responsive no-padding">
                        {{--<table id="example1" class="table table-bordered table-striped table-responsive">
                            <thead>
                            <tr>
                                <th>Land Type</th>
                                <th>Land Class</th>
                                <th>Texture</th>
                                <th>Cultivation</th>
                                <th>District</th>
                                <th>Upazila</th>

                                <th>pH</th>
                                <th>State Of pH</th>

                                <th>Organic Matter</th>
                                <th>State Of Organic Matter</th>

                                <th>calcium</th>
                                <th>State Of Calcium</th>

                                <th>Magnesium</th>
                                <th>State Of Magnesium</th>

                                <th>Potassium</th>
                                <th>State Of Potassium</th>

                                <th>Nitrogen</th>
                                <th>State Of Nitrogen</th>

                                <th>Phosphorus</th>
                                <th>State Of Phosphorus</th>

                                <th>Sulfur</th>
                                <th>State Of Sulfur</th>

                                <th>Boron</th>
                                <th>State Of Boron</th>

                                <th>Copper</th>
                                <th>State Of Copper</th>

                                <th>Ferrous</th>
                                <th>State Of Ferrous</th>

                                <th>Manganese</th>
                                <th>State Of Manganese</th>

                                <th>zinc</th>
                                <th>State Of zinc</th>

                                <th>Delete</th>
                                <th>Edit</th>
                                <th>Details</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($fertilities as $fertility)
                                <tr>
                                    <td>{{$fertility->ltN}}</td>
                                    <td>{{$fertility->lCN}}</td>
                                    <td>{{$fertility->tN}}</td>
                                    <td>{{$fertility->cTN}}</td>
                                    <td>{{$fertility->disN}}</td>
                                    <td>{{$fertility->upaN}}</td>

                                    <td>{{$fertility->pH}}</td>
                                    <td>{{$fertility->spH}}</td>

                                    <td>{{$fertility->organicMatter}}</td>
                                    <td>{{$fertility->soM}}</td>

                                    <td>{{$fertility->calcium}}</td>
                                    <td>{{$fertility->sCa}}</td>

                                    <td>{{$fertility->magnesium}}</td>
                                    <td>{{$fertility->smg}}</td>

                                    <td>{{$fertility->potassium}}</td>
                                    <td>{{$fertility->sK}}</td>

                                    <td>{{$fertility->nitrogen}}</td>
                                    <td>{{$fertility->sN}}</td>

                                    <td>{{$fertility->phosphorus}}</td>
                                    <td>{{$fertility->sP}}</td>

                                    <td>{{$fertility->sulfur}}</td>
                                    <td>{{$fertility->sS}}</td>

                                    <td>{{$fertility->boron}}</td>
                                    <td>{{$fertility->sB}}</td>

                                    <td>{{$fertility->copper}}</td>
                                    <td>{{$fertility->sCu}}</td>

                                    <td>{{$fertility->ferrous}}</td>
                                    <td>{{$fertility->sFe}}</td>

                                    <td>{{$fertility->manganese}}</td>
                                    <td>{{$fertility->sMn}}</td>

                                    <td>{{$fertility->zinc}}</td>
                                    <td>{{$fertility->sZn}}</td>


                                    <td>

                                        <form action="{{route('soilNutrition.destroy',$fertility->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-primary alert-danger fa fa-trash" onclick="return confirm('Are you sure?')"  type="submit"></button>
                                        </form>
                                    </td>

                                    <td><a class="btn btn-primary alert-success fa fa-pencil" href="{{route('soilNutrition.edit',$fertility->id)}}"></a></td>
                                    <td><a class="btn btn-primary alert-dark fa fa-info-circle" href="{{route('soilNutrition.show',$fertility->id)}}"></a></td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Land Type</th>
                                <th>Land Class</th>
                                <th>Texture</th>
                                <th>Cultivation</th>
                                <th>District</th>
                                <th>Upazila</th>

                                <th>pH</th>
                                <th>State Of pH</th>

                                <th>Organic Matter</th>
                                <th>State Of Organic Matter</th>

                                <th>calcium</th>
                                <th>State Of Calcium</th>

                                <th>Magnesium</th>
                                <th>State Of Magnesium</th>

                                <th>Potassium</th>
                                <th>State Of Potassium</th>

                                <th>Nitrogen</th>
                                <th>State Of Nitrogen</th>

                                <th>Phosphorus</th>
                                <th>State Of Phosphorus</th>

                                <th>Sulfur</th>
                                <th>State Of Sulfur</th>

                                <th>Boron</th>
                                <th>State Of Boron</th>

                                <th>Copper</th>
                                <th>State Of Copper</th>

                                <th>Ferrous</th>
                                <th>State Of Ferrous</th>

                                <th>Manganese</th>
                                <th>State Of Manganese</th>

                                <th>zinc</th>
                                <th>State Of zinc</th>

                                <th>Delete</th>
                                <th>Edit</th>
                                <th>Details</th>
                            </tr>
                            </tfoot>
                        </table>--}}

                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Sl.</th>
                                <th>L.T</th>
                                <th>L.C</th>
                                <th>Tex</th>
                                <th>Cul</th>
                                <th>Dis</th>
                                <th>Upa</th>

                                {{--<th>pH</th>
                                <th>S.pH</th>

                                <th>OM</th>
                                <th>S.OM</th>

                                <th>Ca</th>
                                <th>S.Ca</th>

                                <th>Mg</th>
                                <th>S.Mg</th>--}}

                                <th>K</th>
                                <th>S.K</th>

                                <th>N</th>
                                <th>S.N</th>

                                <th>P</th>
                                <th>S.P</th>

                                <th>S</th>
                                <th>S.S</th>

                                {{--<th>B</th>
                                <th>S.B</th>

                                <th>Cu</th>
                                <th>S.Cu</th>

                                <th>Fe</th>
                                <th>S.Fe</th>

                                <th>Mn</th>
                                <th>S.Mn</th>

                                <th>Zn</th>
                                <th>S.Zn</th>--}}

                                {{--<th>Delete</th>
                                <th>Edit</th>
                                <th>Details</th>--}}

                                <th>Actions</th>

                            </tr>
                            </thead>
                            @php
                                $i= 1;
                            @endphp
                            <tbody>
                            @foreach($soilNutritions as $soilNutrition)
                                <tr>
                                    <td>{{$i++}}.</td>
                                    <td>{{$soilNutrition->ltN}}</td>
                                    <td>{{$soilNutrition->lCN}}</td>
                                    <td>{{$soilNutrition->tN}}</td>
                                    <td>{{$soilNutrition->cTN}}</td>
                                    <td>{{$soilNutrition->disN}}</td>
                                    <td>{{$soilNutrition->upaN}}</td>

                                    {{--<td>{{$soilNutrition->pH}}</td>
                                    <td>{{$soilNutrition->spH}}</td>

                                    <td>{{$soilNutrition->organicMatter}}</td>
                                    <td>{{$soilNutrition->soM}}</td>

                                    <td>{{$soilNutrition->calcium}}</td>
                                    <td>{{$soilNutrition->sCa}}</td>

                                    <td>{{$soilNutrition->magnesium}}</td>
                                    <td>{{$soilNutrition->smg}}</td>--}}

                                    <td>{{$soilNutrition->potassium}}</td>
                                    <td>{{$soilNutrition->sK}}</td>

                                    <td>{{$soilNutrition->nitrogen}}</td>
                                    <td>{{$soilNutrition->sN}}</td>

                                    <td>{{$soilNutrition->phosphorus}}</td>
                                    <td>{{$soilNutrition->sP}}</td>

                                    <td>{{$soilNutrition->sulfur}}</td>
                                    <td>{{$soilNutrition->sS}}</td>

                                    {{--<td>{{$soilNutrition->boron}}</td>
                                    <td>{{$soilNutrition->sB}}</td>

                                    <td>{{$soilNutrition->copper}}</td>
                                    <td>{{$soilNutrition->sCu}}</td>

                                    <td>{{$soilNutrition->ferrous}}</td>
                                    <td>{{$soilNutrition->sFe}}</td>

                                    <td>{{$soilNutrition->manganese}}</td>
                                    <td>{{$soilNutrition->sMn}}</td>

                                    <td>{{$soilNutrition->zinc}}</td>
                                    <td>{{$soilNutrition->sZn}}</td>--}}


                                    <td nowarp>
                                        <form action="{{route('soilNutrition.destroy',$soilNutrition->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a class="btn btn-primary alert-dark fa fa-info-circle" href="{{route('soilNutrition.show',$soilNutrition->id)}}"></a>
                                            @can('soilNutrition.update',\Illuminate\Support\Facades\Auth::user())
                                                <a class="btn btn-primary alert-success fa fa-pencil" href="{{route('soilNutrition.edit',$soilNutrition->id)}}"></a>
                                            @endcan
                                            @can('soilNutrition.delete',\Illuminate\Support\Facades\Auth::user())
                                                <button class="btn btn-primary alert-danger fa fa-trash" onclick="return confirm('Are you sure?')"  type="submit"></button>
                                            @endcan
                                        </form>
                                    </td>

                                    {{--<td><a class="btn btn-primary alert-success fa fa-pencil" href="{{route('soilNutrition.edit',$soilNutrition->id)}}"></a></td>
                                    <td><a class="btn btn-primary alert-dark fa fa-info-circle" href="{{route('soilNutrition.show',$soilNutrition->id)}}"></a></td>--}}
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Sl.</th>
                                <th>L.T</th>
                                <th>L.C</th>
                                <th>Tex</th>
                                <th>Cul</th>
                                <th>Dis</th>
                                <th>Upa</th>

                                {{--<th>pH</th>
                                <th>S.pH</th>

                                <th>OM</th>
                                <th>S.OM</th>

                                <th>Ca</th>
                                <th>S.Ca</th>

                                <th>Mg</th>
                                <th>S.Mg</th>--}}

                                <th>K</th>
                                <th>S.K</th>

                                <th>N</th>
                                <th>S.N</th>

                                <th>P</th>
                                <th>S.P</th>

                                <th>S</th>
                                <th>S.S</th>

                                {{--<th>B</th>
                                <th>S.B</th>

                                <th>Cu</th>
                                <th>S.Cu</th>

                                <th>Fe</th>
                                <th>S.Fe</th>

                                <th>Mn</th>
                                <th>S.Mn</th>

                                <th>Zn</th>
                                <th>S.Zn</th>--}}

                                {{--<th>Delete</th>
                                <th>Edit</th>
                                <th>Details</th>--}}

                                <th>Actions</th>
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
                'autoWidth'   : false
            })
        })
    </script>
@endsection
