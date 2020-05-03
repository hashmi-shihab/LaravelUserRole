@extends('admin.master')
@section('content')
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border" style="text-align: center">
                        <h3 class="box-title">Cultivation Type Edit</h3>
                        @if(count($errors)>0)
                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger">

                                    <button type="button" class="close" data-dismiss="alert" aira-hidden="true">
                                        &times;
                                    </button>
                                    {{$error}}
                                </div>
                            @endforeach
                        @endif

                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="Post" action="{{route('soilNutrition.update',$soilNutrition->id)}}">
                        @csrf
                        @method('PUT')
                        <div class="box-body">

                            <div class="form-group">
                                <label>Land Type</label>
                                <select class="form-control" name="land_type_id">
                                    <option value="">Choose Land Type </option>
                                    @foreach($landTypes as $key=> $landType)
                                        @if($soilNutrition->land_type_id == $key)
                                            <option selected value="{{$key}}">{{$landType}}</option>
                                        @else
                                        <option value="{{$key}}">{{$landType}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>land Class</label>
                                <select class="form-control" name="land_Class_id">
                                    <option value="">Choose land Class </option>
                                    @foreach($landClasses as $key=>$landClass)
                                        @if($soilNutrition->land_Class_id == $key)
                                        <option selected value="{{$key}}">{{$landClass}}</option>
                                        @else
                                            <option value="{{$key}}">{{$landClass}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Texture</label>
                                <select class="form-control" name="texture_id">
                                    <option value="">Choose Texture </option>
                                    @foreach($textures as $key=>$texture)
                                        @if($soilNutrition->texture_id == $key)
                                        <option selected value="{{$key}}">{{$texture}}</option>
                                        @else
                                            <option value="{{$key}}">{{$texture}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Cultivation Type</label>
                                <select class="form-control" name="cultivation_type_id">
                                    <option value="">Choose Cultivation Type </option>
                                    @foreach($cultivationTypes as $key=>$cultivationType)
                                        @if($soilNutrition->cultivation_type_id == $key)
                                        <option selected value="{{$key}}">{{$cultivationType}}</option>
                                        @else
                                            <option value="{{$key}}">{{$cultivationType}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>District</label>
                                <select class="form-control" name="district_id">
                                    <option value="">Choose District </option>
                                    @foreach($districts as $district)
                                        @if($soilNutrition->district_id == $district->id)
                                        <option selected value="{{$district->id}}">{{$district->name}}</option>
                                        @else
                                            <option value="{{$district->id}}">{{$district->name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Upazila</label>
                                <select class="form-control" name="upazila_id">
                                    <option value="">Choose Upazila </option>
                                    @foreach($upazilas as $upazila)
                                        @if($soilNutrition->upazila_id == $upazila->id)
                                        <option selected value="{{$upazila->id}}">{{$upazila->name}}</option>
                                        @else
                                            <option value="{{$upazila->id}}">{{$upazila->name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>















                            <div class="form-group">
                                <label for="">pH</label>
                                <input type="" class="form-control" name="pH"  placeholder="Enter pH" value="{{$soilNutrition->pH}}">
                            </div>
                            <div class="form-group">
                                <label>State of pH</label>
                                <select class="form-control" name="stateOfpH_id">
                                    <option value="">Choose State </option>
                                    @foreach($states as $key=>$state)
                                        @if($soilNutrition->stateOfpH_id ==$key)
                                        <option selected value="{{$key}}">{{$state}}</option>
                                        @else
                                            <option value="{{$key}}">{{$state}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>











                            <div class="form-group">
                                <label for="">Organic Matter</label>
                                <input type="" class="form-control" name="organicMatter" placeholder="Enter Organic Matter" value="{{$soilNutrition->organicMatter}}">
                            </div>
                            <div class="form-group">
                                <label>State Of Organic Matter</label>
                                <select class="form-control" name="stateOforganicMatter_id">
                                    <option value="">Choose State </option>
                                    @foreach($states as $key=>$state)
                                        @if($soilNutrition->stateOforganicMatter_id ==$key)
                                        <option selected value="{{$key}}">{{$state}}</option>
                                        @else
                                            <option value="{{$key}}">{{$state}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>








                            <div class="form-group">
                                <label for="">Calcium</label>
                                <input type="" class="form-control" name="calcium"  placeholder="Enter Calcium" value="{{$soilNutrition->calcium}}">
                            </div>
                            <div class="form-group">
                                <label>State Of Calcium</label>
                                <select class="form-control" name="stateOfcalcium_id">
                                    <option value="">Choose State </option>
                                    @foreach($states as $key=>$state)
                                        @if($soilNutrition->stateOfcalcium_id == $key)
                                        <option selected value="{{$key}}">{{$state}}</option>
                                        @else
                                            <option value="{{$key}}">{{$state}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>










                            <div class="form-group">
                                <label for="">Magnesium</label>
                                <input type="" class="form-control" name="magnesium" placeholder="Enter Magnesium" value="{{$soilNutrition->magnesium}}">
                            </div>
                            <div class="form-group">
                                <label>State Of Magnesium</label>
                                <select class="form-control" name="stateOfmagnesium_id">
                                    <option value="">Choose State </option>
                                    @foreach($states as $key=>$state)
                                        @if($soilNutrition->stateOfmagnesium_id == $key)
                                        <option selected value="{{$key}}">{{$state}}</option>
                                        @else
                                            <option value="{{$key}}">{{$state}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>






                            <div class="form-group">
                                <label for="">Potassium</label>
                                <input type="" class="form-control" name="potassium"  placeholder="Enter Potassium" value="{{$soilNutrition->potassium}}">
                            </div>
                            <div class="form-group">
                                <label>State Of Potassium</label>
                                <select class="form-control" name="stateOfpotassium_id">
                                    <option value="">Choose State </option>
                                    @foreach($states as $key=>$state)
                                        @if($soilNutrition->stateOfpotassium_id == $key)
                                        <option selected value="{{$key}}">{{$state}}</option>
                                        @else
                                            <option value="{{$key}}">{{$state}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>








                            <div class="form-group">
                                <label for="">Nitrogen</label>
                                <input type="" class="form-control" name="nitrogen" placeholder="Enter Nitrogen" value="{{$soilNutrition->nitrogen}}">
                            </div>
                            <div class="form-group">
                                <label>State Of Nitrogen</label>
                                <select class="form-control" name="stateOfnitrogen_id">
                                    <option value="">Choose State </option>
                                    @foreach($states as $key=>$state)
                                        @if($soilNutrition->stateOfnitrogen_id == $key)
                                        <option selected value="{{$key}}">{{$state}}</option>
                                        @else
                                            <option value="{{$key}}">{{$state}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>





                            <div class="form-group">
                                <label for="">Phosphorus</label>
                                <input type="" class="form-control" name="phosphorus"  placeholder="Enter Phosphorus" value="{{$soilNutrition->phosphorus}}">
                            </div>
                            <div class="form-group">
                                <label>State Of Phosphorus</label>
                                <select class="form-control" name="stateOfphosphorus_id">
                                    <option value="">Choose State </option>
                                    @foreach($states as $key=>$state)
                                        @if($soilNutrition->stateOfphosphorus_id == $key)
                                        <option selected value="{{$key}}">{{$state}}</option>
                                        @else
                                            <option value="{{$key}}">{{$state}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>






                            <div class="form-group">
                                <label for="">Sulfur</label>
                                <input type="" class="form-control" name="sulfur" placeholder="Enter Sulfur" value="{{$soilNutrition->sulfur}}">
                            </div>
                            <div class="form-group">
                                <label>State Of Sulfur</label>
                                <select class="form-control" name="stateOfsulfur_id">
                                    <option value="">Choose State </option>
                                    @foreach($states as $key=>$state)
                                        @if($soilNutrition->stateOfsulfur_id == $key)
                                        <option selected value="{{$key}}">{{$state}}</option>
                                        @else
                                            <option value="{{$key}}">{{$state}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>



                            <div class="form-group">
                                <label for="">Boron</label>
                                <input type="" class="form-control" name="boron"  placeholder="Enter Boron" value="{{$soilNutrition->boron}}">
                            </div>
                            <div class="form-group">
                                <label>State Of Boron</label>
                                <select class="form-control" name="stateOfboron_id">
                                    <option value="">Choose State </option>
                                    @foreach($states as $key=>$state)
                                        @if($soilNutrition->stateOfboron_id ==$key)
                                        <option selected value="{{$key}}">{{$state}}</option>
                                        @else
                                            <option value="{{$key}}">{{$state}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>








                            <div class="form-group">
                                <label for="">Copper</label>
                                <input type="" class="form-control" name="copper" placeholder="Enter Copper" value="{{$soilNutrition->copper}}">
                            </div>
                            <div class="form-group">
                                <label>State Of Copper</label>
                                <select class="form-control" name="stateOfcopper_id">
                                    <option value="">Choose State </option>
                                    @foreach($states as $key=>$state)
                                        @if($soilNutrition->stateOfcopper_id == $key)
                                        <option selected value="{{$key}}">{{$state}}</option>
                                        @else
                                            <option value="{{$key}}">{{$state}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>








                            <div class="form-group">
                                <label for="">Ferrous</label>
                                <input type="" class="form-control" name="ferrous"  placeholder="Enter Ferrous" value="{{$soilNutrition->ferrous}}">
                            </div>
                            <div class="form-group">
                                <label>State Of Ferrous</label>
                                <select class="form-control" name="stateOfferrous_id">
                                    <option value="">Choose State </option>
                                    @foreach($states as $key=>$state)
                                        @if($soilNutrition->stateOfferrous_id == $key)
                                        <option selected value="{{$key}}">{{$state}}</option>
                                        @else
                                            <option value="{{$key}}">{{$state}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>




                            <div class="form-group">
                                <label for="">Manganese</label>
                                <input type="" class="form-control" name="manganese" placeholder="Enter Manganese" value="{{$soilNutrition->manganese}}">
                            </div>
                            <div class="form-group">
                                <label>State Of Manganese</label>
                                <select class="form-control" name="stateOfmanganese_id">
                                    <option value="">Choose State </option>
                                    @foreach($states as $key=>$state)
                                        @if($soilNutrition->stateOfmanganese_id ==$key)
                                        <option selected value="{{$key}}">{{$state}}</option>
                                        @else
                                            <option value="{{$key}}">{{$state}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>




                            <div class="form-group">
                                <label for="">Zinc</label>
                                <input type="" class="form-control" name="zinc" placeholder="Enter Zinc" value="{{$soilNutrition->zinc}}">
                            </div>
                            <div class="form-group">
                                <label>State Of Zinc</label>
                                <select class="form-control" name="stateOfzinc_id">
                                    <option value="">Choose State </option>
                                    @foreach($states as $key=>$state)
                                        @if($soilNutrition->stateOfzinc_id ==$key)
                                        <option selected value="{{$key}}">{{$state}}</option>
                                        @else
                                            <option value="{{$key}}">{{$state}}</option>
                                        @endif
                                    @endforeach
                                </select>
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
