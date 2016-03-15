@extends('frontend.layouts.master')

@section('content')

    <div class="row">

        <div class="col-md-6 col-md-offset-3">

            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('labels.frontend.auth.login_box_title') }}</div>

                <div class="panel-body">
                    <p>1st Rapid Response Force systems use Steam Open ID authentication for login. For more information <a href="http://steamcommunity.com/dev">click here.</a></p>
                    <p>If you do not have an account with us, you will be redirected to a registration page, once your steam id is validated.</p>
                    <div class="text-center">
                        <a href="{{ SteamLogin::url(route('auth.login')) }}"><img src="/images/steam.png"></a>
                    </div>
                </div><!-- panel body -->

            </div><!-- panel -->

        </div><!-- col-md-8 -->

    </div><!-- row -->

@endsection