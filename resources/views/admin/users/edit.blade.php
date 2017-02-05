@extends('admin.layouts.layout')

@section('title')

update user

{{$user->name}}


@endsection

@section('content')

<!--  start header -->
  <section class="content-header">
        <h1>
      update user

      <<{{$user->name}}>>

        </h1>
        <ol class="breadcrumb">
          <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active" ><a href="{{url('/adminpanel/users/'.$user->id.'edit')}}">update user</a></li>

        </ol>
      </section>

<!--  end  header -->

  <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">update user</h3>
                    </div>

                    <div class="box-body">



{!! Form::model($user , ['route'=>['adminpanel.users.update' , $user->id],'method'=>'PATCH'])!!}
       @include('admin.users.form')

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



<section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">update user password</h3>
                    </div>

                    <div class="box-body">




{!! Form::open( ['url'=>'/adminpanel/users/changePassword/','method'=>'post'])!!}

<input type="hidden" value="{{$user->id}}" name="user_id">

  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-3">Password</label>



                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control" name="password">


                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



<div class="clearfix"></div><br>

 <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> confirm
                                </button>
                            </div>
                        </div>

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



