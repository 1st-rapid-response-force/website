@extends('frontend.layouts.master-nsb')

@section('content')
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">
                <div class="panel-heading">Account Registration</div>

                <div class="panel-body">
                    <p>This registration form is used to create an account on 1st RRF systems.</p>
                    <p>1st Rapid Response Force systems uses Steam Open ID authentication for login. For more information <a href="http://steamcommunity.com/dev">click here.</a></p>
                    <hr>

                    {!! Form::open(['route' => 'steam.register', 'class' => 'form-horizontal']) !!}

                        <input type="hidden" name="name" value="User">
                        <div class="form-group">
                            {!! Form::label('email', trans('validation.attributes.frontend.email'), ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::input('email', 'email', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.frontend.email')]) !!}
                            </div><!--col-md-6-->
                        </div><!--form-group-->
                        <div class="form-group">
                            {!! Form::label('steam_id', 'Steam ID', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::input('steam_id', 'steam_id', $steam_id, ['class' => 'form-control', 'placeholder' => 'Steam ID', 'readonly']) !!}
                            </div><!--col-md-6-->
                        </div><!--form-group-->


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {!! Form::submit(trans('labels.frontend.auth.register_button'), ['class' => 'btn btn-primary']) !!}
                            </div><!--col-md-6-->
                        </div><!--form-group-->

                    {!! Form::close() !!}

                </div><!-- panel body -->

            </div><!-- panel -->

        </div><!-- col-md-8 -->

    </div><!-- row -->
@endsection