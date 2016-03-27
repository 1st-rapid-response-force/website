@extends ('backend.layouts.master')

@section ('title', 'Site Management - FAQs - Edit')

@section('page-header')
    <h1>
        Applications
    </h1>
@endsection


@section('content')
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">Edit FAQ</h3>

            <div class="box-tools pull-right">
                @include('backend.site.faq.includes.partials.header-buttons')
            </div>
        </div><!-- /.box-header -->

        <div class="box-body">
            {!! Form::model($application, ['route' => ['admin.access.application.update', $faq->id],'data-toggle'=>'validator','method'=>'PUT']) !!}
                @include('backend.access.application.includes.forms._form_edit_application')
            <div class="pull-right">
                {!! Form::button('Submit',['type'=>'submit','class'=>'btn btn-primary']) !!}
                <a href="{{route('admin.access.application.index')}}" class="btn btn-danger">Cancel</a>
            </div>
            <div class="clearfix"></div>

            {!! Form::close() !!}
        </div><!-- /.box-body -->
    </div><!--box-->
@stop

@section('after-scripts-end')
    <!-- InputMask -->
    <script src="/plugins/input-mask/jquery.inputmask.js"></script>
    <script src="/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="/plugins/input-mask/jquery.inputmask.extensions.js"></script>

    <!-- Page script -->
    <script>
        $(function () {
            //Datemask2 mm/dd/yyyy
            $("#dob").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});

        });
    </script>
@endsection