@extends('admin.layouts.layout')

@section('title')

edit site setting

@endsection

@section('content')

<!--  start header -->
  <section class="content-header">


        <h1>
        edit site setting


        </h1>
        <ol class="breadcrumb">
          <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active" ><a href="{{url('/adminpanel/siteSetting')}}"> site setting</a></li>

        </ol>
      </section>

<!--  end  header -->

  <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">edit site setting </h3>
                    </div>

                    <div class="box-body">

                    <form action="{{url('/adminpanel/siteSetting')}}" method="post">
                    {{csrf_field()}}

            @foreach($siteSetting as $setting)


                        <div class="form-group{{ $errors->has('$setting->nameSiteSetting') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-3 ">{{$setting->slug}}</label>

                            <div class="col-md-8">
                            @if($setting->type == 0)

                {!! Form::text ( $setting->nameSiteSetting, $setting->value ,['class' =>'form-control']) !!}
  <div class="clearfix"></div>
                                                 <br>
                @else

{!! Form::textarea ( $setting->nameSiteSetting, $setting->value ,['class' =>'form-control']) !!}
 <div class="clearfix"></div>
                                                 <br>
                @endif
                                @if ($errors->has('$setting->nameSiteSetting'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('$setting->nameSiteSetting') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


@endforeach



  <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> confirm
                                </button>
                            </div>
                        </div>

</form>


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



