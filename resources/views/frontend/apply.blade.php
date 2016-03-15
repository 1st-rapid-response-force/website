@extends('frontend.layouts.master')

@section('breadcrumbs')
    <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li class="active">Apply</li>
    </ol>
@endsection

@section('content')
    <h1>Apply</h1>
    <ol>
        <li>Check that you are <a href="{{route('frontend.faq')}}">eligible to apply</a> for the 1st Rapid Response Force <br> <small>We are a military realism simulations unit. For security reasons, we have a strict application guidelines with no exceptions.</small></li>

    </ol>
@endsection

@section('after-scripts-end')
@stop