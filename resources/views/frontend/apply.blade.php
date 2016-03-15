@extends('frontend.layouts.master')

@section('breadcrumbs')
    <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li class="active">Apply</li>
    </ol>
@endsection

@section('content')
    <div class="panel panel-default">
        <div class="panel-body">
            <h1>Apply to the 1st RRF</h1>
            <ol>
                <li>Check your eligibility:</li>
                <ul>
                    <li>Members must own a legal copy of ARMA 3 and expansions.</li>
                    <li>Members must have a clean Steam VAC and BattlEye Record</li>
                    <li>Members must be over the age of 18.</li>
                    <li>Members will be required to be citizens of a NATO member country to partake.</li>
                    <li>Members will need to be able to commit to a weekly operations and training schedule.</li>
                    <li>Members will need speak english in order to properly communicate with the unit.</li>
                </ul>
                <li>Review the <a href="{{route('frontend.structure_assignments')}}">Structure and Assignments</a> and the <a href="#">MOS/Assignment Breakdown</a> before completing your application.</li>
                <li>Login/Create an account with us, if you are new, we will direct you to a registration page, if you are an exisiting member, we will log you in. - <small>For more information on Steam Open ID <a href="http://steamcommunity.com/dev">click here.</a></small></li>
                <li>Fill out the Application and wait for a reply</li>
                <li><a href="{{route('frontend.modpack')}}">Download Infil</a>, our ARMA 3 modpack updater and launcher, constructed in house by 1st RRF members</li>
                <li>Be active and participate in the community.</li>
            </ol>
        </div>
    </div>

@endsection

@section('after-scripts-end')
@stop