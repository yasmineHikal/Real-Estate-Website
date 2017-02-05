


                        <div class="form-group{{ $errors->has('bu_name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-3 ">Real Estate Name</label>

                            <div class="col-md-8">

                {!! Form::text ("bu_name" , null ,['class' =>'form-control']) !!}
                                @if ($errors->has('bu_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bu_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="clearfix"></div>
                             <br>


     <div class="form-group{{ $errors->has('bu_price') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-3 ">Real Estate price</label>

                            <div class="col-md-8">

                {!! Form::text ("bu_price" , null ,['class' =>'form-control']) !!}
                                @if ($errors->has('bu_price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bu_price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="clearfix"></div>
                             <br>

  <div class="form-group{{ $errors->has('bu_rent') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-3 ">Status</label>

                            <div class="col-md-8">

                {!! Form::select ("bu_rent" ,['0'=>'rent' , '1'=>'ownership' ], null ,['class' =>'form-control']) !!}
                                @if ($errors->has('bu_rent'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bu_rent') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="clearfix"></div>
                             <br>


     <div class="form-group{{ $errors->has('bu_square') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-3 ">Real Estate square</label>

                            <div class="col-md-8">

                {!! Form::text ("bu_square" , null ,['class' =>'form-control']) !!}
                                @if ($errors->has('bu_square'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bu_square') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="clearfix"></div>
                             <br>


     <div class="form-group{{ $errors->has('bu_type') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-3 ">Real Estate type</label>

                            <div class="col-md-8">

                {!! Form::select ("bu_type" ,bu_type(), null ,['class' =>'form-control']) !!}
                                @if ($errors->has('bu_type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bu_type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="clearfix"></div>
                             <br>



     <div class="form-group{{ $errors->has('bu_meta') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-3 ">Real Estate meta</label>

                            <div class="col-md-8">

                {!! Form::text ("bu_meta" , null ,['class' =>'form-control']) !!}
                                @if ($errors->has('bu_meta'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bu_meta') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="clearfix"></div>
                             <br>



     <div class="form-group{{ $errors->has('bu_small_dis') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-3 ">Real Estate description</label>

                            <div class="col-md-8">

                {!! Form::textarea ("bu_small_dis" , null ,['class' =>'form-control','rows'=>4]) !!}
                                @if ($errors->has('bu_small_dis'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bu_small_dis') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="clearfix"></div>
                             <br>

       <div class="form-group{{ $errors->has('bu_langtiude') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-3 ">longitude</label>

                            <div class="col-md-8">

                {!! Form::text ("bu_langtiude" , null ,['class' =>'form-control']) !!}
                                @if ($errors->has('bu_langtiude'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bu_langtiude') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="clearfix"></div>
                             <br>

                             <div class="form-group{{ $errors->has('bu_latitude') ? ' has-error' : '' }}">
                                                         <label for="name" class="col-md-3 "> latitude  </label>

                                                         <div class="col-md-8">

                                             {!! Form::text ("bu_latitude" , null ,['class' =>'form-control']) !!}
                                                             @if ($errors->has('bu_latitude'))
                                                                 <span class="help-block">
                                                                     <strong>{{ $errors->first('bu_latitude') }}</strong>
                                                                 </span>
                                                             @endif
                                                         </div>
                                                     </div>

                                                      <div class="clearfix"></div>
                                                          <br>


     <div class="form-group{{ $errors->has('bu_large_dis') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-3 ">large descrption</label>

                            <div class="col-md-8">

                {!! Form::textarea ("bu_large_dis" , null ,['class' =>'form-control']) !!}
                                @if ($errors->has('bu_large_dis'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bu_large_dis') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="clearfix"></div>
                             <br>


   <div class="form-group{{ $errors->has('bu_status') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-3 ">buy/not</label>

                            <div class="col-md-8">

            {!! Form::select ("bu_status" ,['0'=>'buy' , '1'=>'not buy' ], null ,['class' =>'form-control']) !!}
                                @if ($errors->has('bu_status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bu_status') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="clearfix"></div>
                             <br>










                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> confirm
                                </button>
                            </div>
                        </div>
