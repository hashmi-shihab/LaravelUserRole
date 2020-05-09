@extends('admin.master')

@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border" style="text-align: center">
                <h3 class="box-title">Edit Role</h3>
            </div>
              <div class="box-header">
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
            <form role="form" method="POST" action="{{ route('roles.update', $role->id) }}">
                @csrf
                @method('PUT')

                <div class="box-body">
                   <div class="form-group">
                    <label for="name" class="required-field">Name&nbsp</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" autocomplete="off" value="{{ old('name', $role->name) }}">
                  </div>

                    <div class="form-group">
                        <label for="permission" class="required-field">Role's Permissions&nbsp</label>
                        <br><label><input type="checkbox" id="select_all"> Select All</label>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-3" style="border:1px solid Black;  margin:10px;">
                                    <div class="row text-center" style="border-bottom:1px solid Black;">
                                        <strong>Land Class</strong>
                                    </div>
                                    <label><input class="case" type="checkbox" value="1" name="permission[]" {{ (in_array("1", $permissions)) ? "checked":"unchecked" }}> <lable>LandClassController-Menu</lable></label>
                                    <label><input class="case" type="checkbox" value="2" name="permission[]" {{ (in_array("2", $permissions)) ? "checked":"unchecked" }}> <lable>LandClassController-Create</lable></label>
                                    <label><input class="case" type="checkbox" value="3" name="permission[]" {{ (in_array("3", $permissions)) ? "checked":"unchecked" }}> <lable>LandClassController-List</lable></label>
                                    <label><input class="case" type="checkbox" value="4" name="permission[]" {{ (in_array("4", $permissions)) ? "checked":"unchecked" }}> <lable>LandClassController-Edit</lable></label>
                                    <label><input class="case" type="checkbox" value="5" name="permission[]" {{ (in_array("5", $permissions)) ? "checked":"unchecked" }}> <lable>LandClassController-Delete</lable></label>
                                    <br>
                                </div>

                                <div class="col-md-3" style="border:1px solid Black;  margin:10px; margin-left: 80px">
                                    <div class="row text-center" style="border-bottom:1px solid Black;">
                                        <strong>Land Type</strong>
                                    </div>
                                    <label><input class="case" type="checkbox" value="6" name="permission[]" {{ (in_array("6", $permissions)) ? "checked":"unchecked" }}> <lable>LandTypeController-Menu</lable></label>
                                    <label><input class="case" type="checkbox" value="7" name="permission[]" {{ (in_array("7", $permissions)) ? "checked":"unchecked" }}> <lable>LandTypeController-Create</lable></label>
                                    <label><input class="case" type="checkbox" value="8" name="permission[]" {{ (in_array("8", $permissions)) ? "checked":"unchecked" }}> <lable>LandTypeController-List</lable></label>
                                    <label><input class="case" type="checkbox" value="9" name="permission[]" {{ (in_array("9", $permissions)) ? "checked":"unchecked" }}> <lable>LandTypeController-Edit</lable></label>
                                    <label><input class="case" type="checkbox" value="10" name="permission[]" {{ (in_array("10", $permissions)) ? "checked":"unchecked" }}> <lable>LandTypeController-Delete</lable></label>
                                    <br>
                                </div>

                                <div class="col-md-3" style="border:1px solid Black;  margin:10px; margin-left: 80px">
                                    <div class="row text-center" style="border-bottom:1px solid Black">
                                        <strong>Texture</strong>
                                    </div>
                                    <label><input class="case" type="checkbox" value="11" name="permission[]" {{ (in_array("11", $permissions)) ? "checked":"unchecked" }}> <lable>TextureController-Menu</lable></label>
                                    <label><input class="case" type="checkbox" value="12" name="permission[]" {{ (in_array("12", $permissions)) ? "checked":"unchecked" }}> <lable>TextureController-Create</lable></label>
                                    <label><input class="case" type="checkbox" value="13" name="permission[]" {{ (in_array("13", $permissions)) ? "checked":"unchecked" }}> <lable>TextureController-List</lable></label>
                                    <label><input class="case" type="checkbox" value="14" name="permission[]" {{ (in_array("14", $permissions)) ? "checked":"unchecked" }}> <lable>TextureController-Edit</lable></label>
                                    <label><input class="case" type="checkbox" value="15" name="permission[]" {{ (in_array("15", $permissions)) ? "checked":"unchecked" }}> <lable>TextureController-Delete</lable></label>
                                    <br>
                                </div>


                                <div class="col-md-3" style="border:1px solid Black;  margin:10px;">
                                    <div class="row text-center" style="border-bottom:1px solid Black;">
                                        <strong>Cultivation Type</strong>
                                    </div>
                                    <label><input class="case" type="checkbox" value="16" name="permission[]" {{ (in_array("16", $permissions)) ? "checked":"unchecked" }}> <lable>CultivationTypeController-Menu</lable></label>
                                    <label><input class="case" type="checkbox" value="17" name="permission[]" {{ (in_array("17", $permissions)) ? "checked":"unchecked" }}> <lable>CultivationTypeController-Create</lable></label>
                                    <label><input class="case" type="checkbox" value="18" name="permission[]" {{ (in_array("18", $permissions)) ? "checked":"unchecked" }}> <lable>CultivationTypeController-List</lable></label>
                                    <label><input class="case" type="checkbox" value="19" name="permission[]" {{ (in_array("19", $permissions)) ? "checked":"unchecked" }}> <lable>CultivationTypeController-Edit</lable></label>
                                    <label><input class="case" type="checkbox" value="20" name="permission[]" {{ (in_array("20", $permissions)) ? "checked":"unchecked" }}> <lable>CultivationTypeController-Delete</lable></label>
                                    <br>
                                </div>

                                <div class="col-md-3" style="border:1px solid Black;  margin:10px; margin-left: 80px">
                                    <div class="row text-center" style="border-bottom:1px solid Black;">
                                        <strong>State</strong>
                                    </div>
                                    <label><input class="case" type="checkbox" value="21" name="permission[]" {{ (in_array("21", $permissions)) ? "checked":"unchecked" }}> <lable>StateController-Menu</lable></label>
                                    <label><input class="case" type="checkbox" value="22" name="permission[]" {{ (in_array("22", $permissions)) ? "checked":"unchecked" }}> <lable>StateController-Create</lable></label>
                                    <label><input class="case" type="checkbox" value="23" name="permission[]" {{ (in_array("23", $permissions)) ? "checked":"unchecked" }}> <lable>StateController-List</lable></label>
                                    <label><input class="case" type="checkbox" value="24" name="permission[]" {{ (in_array("24", $permissions)) ? "checked":"unchecked" }}> <lable>StateController-Edit</lable></label>
                                    <label><input class="case" type="checkbox" value="25" name="permission[]" {{ (in_array("25", $permissions)) ? "checked":"unchecked" }}> <lable>StateController-Delete</lable></label>
                                    <br>
                                </div>

                                <div class="col-md-3" style="border:1px solid Black;  margin:10px; margin-left: 80px">
                                    <div class="row text-center" style="border-bottom:1px solid Black">
                                        <strong>Soil Nutrition</strong>
                                    </div>
                                    <label><input class="case" type="checkbox" value="26" name="permission[]" {{ (in_array("26", $permissions)) ? "checked":"unchecked" }}> <lable>SoilNutritionController-Menu</lable></label>
                                    <label><input class="case" type="checkbox" value="27" name="permission[]" {{ (in_array("27", $permissions)) ? "checked":"unchecked" }}> <lable>SoilNutritionController-Create</lable></label>
                                    <label><input class="case" type="checkbox" value="28" name="permission[]" {{ (in_array("28", $permissions)) ? "checked":"unchecked" }}> <lable>SoilNutritionController-List</lable></label>
                                    <label><input class="case" type="checkbox" value="29" name="permission[]" {{ (in_array("29", $permissions)) ? "checked":"unchecked" }}> <lable>SoilNutritionController-Edit</lable></label>
                                    <label><input class="case" type="checkbox" value="30" name="permission[]" {{ (in_array("30", $permissions)) ? "checked":"unchecked" }}> <lable>SoilNutritionController-Delete</lable></label>
                                    <br>
                                </div>


                            </div>
                        </div>
                    </div>





                </div>
                <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update</button>
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
