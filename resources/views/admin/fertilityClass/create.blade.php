@extends('admin.master')
@section('content')

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Fertility Class Create</h3>
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
                    <form role="form" method="Post" action="{{route('fertilityClass.store')}}">
                        @csrf
                        @method('POST')
                        <div class="box-body">

                            <div class="form-group">
                                <label>Land Type</label>
                                <select class="form-control" name="land_type_id">
                                    <option value="">Choose Land Type </option>
                                    @foreach($landTypes as $key=> $landType)
                                        <option value="{{$key}}">{{$landType}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>land Class</label>
                                <select class="form-control" name="land_Class_id">
                                    <option value="">Choose land Class </option>
                                    @foreach($landClasses as $key=>$landClass)
                                        <option value="{{$key}}">{{$landClass}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Texture</label>
                                <select class="form-control" name="texture_id">
                                    <option value="">Choose Texture </option>
                                    @foreach($textures as $key=>$texture)
                                        <option value="{{$key}}">{{$texture}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Cultivation Type</label>
                                <select class="form-control" name="cultivation_type_id">
                                    <option value="">Choose Cultivation Type </option>
                                    @foreach($cultivationTypes as $key=>$cultivationType)
                                        <option value="{{$key}}">{{$cultivationType}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>District</label>
                                <select class="form-control" name="district_id">
                                    <option value="">Choose District </option>
                                    @foreach($districts as $district)
                                        <option value="{{$district->id}}">{{$district->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Upazila</label>
                                <select class="form-control" name="upazila_id">
                                    <option value="">Choose Upazila </option>
                                    @foreach($upazilas as $upazila)
                                        <option value="{{$upazila->id}}">{{$upazila->name}}</option>
                                    @endforeach
                                </select>
                            </div>















                            <div class="form-group">
                                <label for="">pH</label>
                                <input type="" class="form-control" name="pH"  placeholder="Enter pH">
                            </div>
                            <div class="form-group">
                                <label>State of pH</label>
                                <select class="form-control" name="stateOfpH_id">
                                    <option value="">Choose State </option>
                                    @foreach($states as $key=>$state)
                                        <option value="{{$key}}">{{$state}}</option>
                                    @endforeach
                                </select>
                            </div>











                            <div class="form-group">
                                <label for="">Organic Matter</label>
                                <input type="" class="form-control" name="organicMatter" placeholder="Enter Organic Matter">
                            </div>
                            <div class="form-group">
                                <label>State Of Organic Matter</label>
                                <select class="form-control" name="stateOforganicMatter_id">
                                    <option value="">Choose State </option>
                                    @foreach($states as $key=>$state)
                                        <option value="{{$key}}">{{$state}}</option>
                                    @endforeach
                                </select>
                            </div>








                            <div class="form-group">
                                <label for="">Calcium</label>
                                <input type="" class="form-control" name="calcium"  placeholder="Enter Calcium">
                            </div>
                            <div class="form-group">
                                <label>State Of Calcium</label>
                                <select class="form-control" name="stateOfcalcium_id">
                                    <option value="">Choose State </option>
                                    @foreach($states as $key=>$state)
                                        <option value="{{$key}}">{{$state}}</option>
                                    @endforeach
                                </select>
                            </div>










                            <div class="form-group">
                                <label for="">Magnesium</label>
                                <input type="" class="form-control" name="magnesium" placeholder="Enter Magnesium">
                            </div>
                            <div class="form-group">
                                <label>State Of Magnesium</label>
                                <select class="form-control" name="stateOfmagnesium_id">
                                    <option value="">Choose State </option>
                                    @foreach($states as $key=>$state)
                                        <option value="{{$key}}">{{$state}}</option>
                                    @endforeach
                                </select>
                            </div>






                            <div class="form-group">
                                <label for="">Potassium</label>
                                <input type="" class="form-control" name="potassium"  placeholder="Enter Potassium">
                            </div>
                            <div class="form-group">
                                <label>State Of Potassium</label>
                                <select class="form-control" name="stateOfpotassium_id">
                                    <option value="">Choose State </option>
                                    @foreach($states as $key=>$state)
                                        <option value="{{$key}}">{{$state}}</option>
                                    @endforeach
                                </select>
                            </div>








                            <div class="form-group">
                                <label for="">Nitrogen</label>
                                <input type="" class="form-control" name="nitrogen" placeholder="Enter Nitrogen">
                            </div>
                            <div class="form-group">
                                <label>State Of Nitrogen</label>
                                <select class="form-control" name="stateOfnitrogen_id">
                                    <option value="">Choose State </option>
                                    @foreach($states as $key=>$state)
                                        <option value="{{$key}}">{{$state}}</option>
                                    @endforeach
                                </select>
                            </div>





                            <div class="form-group">
                                <label for="">Phosphorus</label>
                                <input type="" class="form-control" name="phosphorus"  placeholder="Enter Phosphorus">
                            </div>
                            <div class="form-group">
                                <label>State Of Phosphorus</label>
                                <select class="form-control" name="stateOfphosphorus_id">
                                    <option value="">Choose State </option>
                                    @foreach($states as $key=>$state)
                                        <option value="{{$key}}">{{$state}}</option>
                                    @endforeach
                                </select>
                            </div>






                            <div class="form-group">
                                <label for="">Sulfur</label>
                                <input type="" class="form-control" name="sulfur" placeholder="Enter Sulfure">
                            </div>
                            <div class="form-group">
                                <label>State Of Sulfur</label>
                                <select class="form-control" name="stateOfsulfur_id">
                                    <option value="">Choose State </option>
                                    @foreach($states as $key=>$state)
                                        <option value="{{$key}}">{{$state}}</option>
                                    @endforeach
                                </select>
                            </div>



                            <div class="form-group">
                                <label for="">Boron</label>
                                <input type="" class="form-control" name="boron"  placeholder="Enter Boron">
                            </div>
                            <div class="form-group">
                                <label>State Of Boron</label>
                                <select class="form-control" name="stateOfboron_id">
                                    <option value="">Choose State </option>
                                    @foreach($states as $key=>$state)
                                        <option value="{{$key}}">{{$state}}</option>
                                    @endforeach
                                </select>
                            </div>








                            <div class="form-group">
                                <label for="">Copper</label>
                                <input type="" class="form-control" name="copper" placeholder="Enter Copper">
                            </div>
                            <div class="form-group">
                                <label>State Of Copper</label>
                                <select class="form-control" name="stateOfcopper_id">
                                    <option value="">Choose State </option>
                                    @foreach($states as $key=>$state)
                                        <option value="{{$key}}">{{$state}}</option>
                                    @endforeach
                                </select>
                            </div>








                            <div class="form-group">
                                <label for="">Ferrous</label>
                                <input type="" class="form-control" name="ferrous"  placeholder="Enter Ferrous">
                            </div>
                            <div class="form-group">
                                <label>State Of Ferrous</label>
                                <select class="form-control" name="stateOfferrous_id">
                                    <option value="">Choose State </option>
                                    @foreach($states as $key=>$state)
                                        <option value="{{$key}}">{{$state}}</option>
                                    @endforeach
                                </select>
                            </div>




                            <div class="form-group">
                                <label for="">Manganese</label>
                                <input type="" class="form-control" name="manganese" placeholder="Enter Manganese">
                            </div>
                            <div class="form-group">
                                <label>State Of Manganese</label>
                                <select class="form-control" name="stateOfmanganese_id">
                                    <option value="">Choose State </option>
                                    @foreach($states as $key=>$state)
                                        <option value="{{$key}}">{{$state}}</option>
                                    @endforeach
                                </select>
                            </div>




                            <div class="form-group">
                                <label for="">Zinc</label>
                                <input type="" class="form-control" name="zinc" placeholder="Enter Zinc">
                            </div>
                            <div class="form-group">
                                <label>State Of Zinc</label>
                                <select class="form-control" name="stateOfzinc_id">
                                    <option value="">Choose State </option>
                                    @foreach($states as $key=>$state)
                                        <option value="{{$key}}">{{$state}}</option>
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
