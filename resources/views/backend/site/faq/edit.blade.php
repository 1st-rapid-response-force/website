@extends ('backend.layouts.master')

@section ('title', 'Site Management - FAQs - Edit')

@section('page-header')
    <h1>
        FAQs
    </h1>
@endsection

@section('after-styles-end')
    <script src="/plugins/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
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
            {!! Form::model($faq, ['route' => ['admin.site.faq.update', $faq->id],'data-toggle'=>'validator','method'=>'PUT']) !!}
                @include('backend.site.faq.includes.forms._form_edit_faq')
            <div class="pull-right">
                {!! Form::button('Submit',['type'=>'submit','class'=>'btn btn-primary']) !!}
                <a href="{{route('admin.site.faq.index')}}" class="btn btn-danger">Cancel</a>
            </div>
            <div class="clearfix"></div>

            {!! Form::close() !!}
        </div><!-- /.box-body -->
    </div><!--box-->
@stop

@section('after-scripts-end')
@endsection