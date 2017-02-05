@extends('admin.layouts.layout')

@section('title')

update RealEstate



@endsection

@section('content')

<!--  start header -->
  <section class="content-header">
        <h1>
      update user



        </h1>
        <ol class="breadcrumb">
          <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active" ><a href="{{url('/adminpanel/bu/'.$bu->id.'/edit')}}">update RealEstate</a></li>

        </ol>
      </section>

<!--  end  header -->

  <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">update RealEstate</h3>
                    </div>

                    <div class="box-body">




{!! Form::model($bu , ['route'=>['adminpanel.bu.update' , $bu->id],'method'=>'PATCH'])!!}
       @include('admin.bu.form')

       {!! Form::close() !!}
     </div>
                </div>
                <!-- /.box -->


                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>









@endsection



