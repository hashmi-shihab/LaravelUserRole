@extends('admin.master')
@section('content')

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border" style="text-align: center">
                        <h3 class="box-title">State Create</h3>
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
                    <form role="form" method="Post" action="{{route('state.store')}}">
                        @csrf
                        @method('POST')
                        <div class="box-body">
                            <div class="form-group">
                                <label for="">State Bangla Name</label>
                                <input type="" class="form-control" name="name_bn"  placeholder="Enter State Bangla Name">
                            </div>
                            <div class="form-group">
                                <label for="">State English Name</label>
                                <input type="" class="form-control" name="name_en" placeholder="Enter State English Name">
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
