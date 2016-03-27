@extends('frontend.layouts.master-nsb')

@section('breadcrumbs')
    <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="{{route('frontend.apply')}}">Apply</a></li>
        <li class="active">Application</li>
    </ol>
@endsection

@section('after-styles-end')
    <link rel="stylesheet" type="text/css" href="/plugins/gridforms/gridforms.css">
    <link rel="stylesheet" type="text/css" href="/plugins/datepicker/datepicker3.css">
    <script type="text/javascript" src="/plugins/datepicker/bootstrap-datepicker.js"></script>
@endsection

@section('content')
    <p>Your application has been received by our command clerk. You can use this page to track the status of your application. You will also receive email updates.</p>
    <h1>Registration</h1>
    <h2>1st Rapid Respond Force Enlistment Application</h2>
    <p>This paperwork is for a fictional organization, we are not affiliated or associated with any real life entity. We are simply a MILSIM oriented group for ARMA 3. The information you are providing is for your
        character.</p>
    <p>However your application must meet the following requirements</p>
    <ul>
        <li>Your name must be realistic but does not need to be your real name - an example of this would be "James Edward"</li>
        <li>The age field must be accurate, the 1st RRF has a 18+ age requirement. Failure to disclose your actual age will result in discharge from the unit.</li>
    </ul>
    <HR>
    <div class="panel panel-default">
        <div class="panel-body">
            {{Form::model($application,['class' => 'grid-form'])}}
                <div class="text-center"><legend><strong>ENLISTMENT/REENLISTMENT DOCUMENT</strong><br> 1ST RAPID RESPONSE FORCE<br><br></legend></div>
                <div class="text-center"><h3>PRIVACY ACT STATEMENT</h3></div>
                <p><strong>AUTHORITY: </strong> 1ST-RRF-POLICIES-PROCEDURES</p>
                <p><strong>PRINCIPAL PURPOSE(S): </strong> To record enlistment or reenlistment into the 1st Rapid Response Force. This information becomes a part of the subject'smilitary personnel records which are used to document promotion, reassignment, training, medical support, and other personnel management actions.</p>
                <p><strong>ROUTINE USE(S): </strong> This form becomes a part of the Service's Enlisted Master File and Field Personnel File.</p>
                <p><strong>DISCLOSURE: </strong> Voluntary; however, failure to furnish personal identification information may negate the enlistment/reenlistment application</p>
                @include('frontend.applications.forms._form_index')
            {{Form::close()}}
        </div>
    </div>
@endsection

@section('after-scripts-end')
    <script type="text/javascript" src="/plugins/gridforms/gridforms.js"></script>
    <script type="text/javascript">
        $(function () {
            $('#dob').datepicker({});
        });
    </script>
@stop