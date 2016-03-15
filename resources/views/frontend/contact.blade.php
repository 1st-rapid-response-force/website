@extends('frontend.layouts.master')

@section('breadcrumbs')
    <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li class="active">Contact</li>
    </ol>
@endsection

@section('content')
    <h1>Contact Us</h1>
    <p>Have any questions, request, or general inquiries. Contact one of the following members:</p>
    <div class="media">
        <div class="media-left">
            <a href="/roster/1">
                <img class="media-object img-circle" style="max-height: 100px; max-width: 100px;" src="#" alt="Avatar">
            </a>
        </div>
        <div class="media-body">
            <h4 class="media-heading">CPT. Rodriguez.G</h4>
            <address>
                <strong>Guillermo Rodriguez</strong><br>
                <a href="mailto:rodriguez.g@1st-rrf.com">rodriguez.g@1st-rrf.com</a>
            </address>
        </div>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="/roster/1">
                <img class="media-object img-circle" style="max-height: 100px; max-width: 100px;" src="#" alt="Avatar">
            </a>
        </div>
        <div class="media-body">
            <h4 class="media-heading">2LT. Striker.A</h4>
            <address>
                <strong>Alexander Striker</strong><br>
                <a href="mailto:striker.a@1st-rrf.com">striker.a@1st-rrf.com</a>
            </address>
        </div>
    </div>
@endsection

@section('after-scripts-end')
@stop