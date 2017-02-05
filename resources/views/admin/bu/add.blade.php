@extends('admin.layouts.layout')

@section('title')

Add Real Estate

@endsection

@section('content')

<!--  start header -->
  <section class="content-header">
        <h1>
        add Real Estate

        </h1>
        <ol class="breadcrumb">
          <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active" ><a href="{{url('/adminpanel/users')}}">add Real Estate</a></li>

        </ol>
      </section>

<!--  end  header -->

  <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">add Real Estate</h3>
                    </div>

                    <div class="box-body">
                    {!! Form::open( ['url'=>'/adminpanel/bu','method'=>'post']) !!}


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



