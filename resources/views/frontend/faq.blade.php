@extends('frontend.layouts.master')

@section('breadcrumbs')
    <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li class="active">FAQs</li>
    </ol>
@endsection

@section('content')
    <h1>FAQs</h1>

    <div class="row">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                @foreach($faqs as $faq)
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading{{$faq->id}}">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#FAQ{{$faq->id}}" aria-expanded="false" aria-controls="collapse{{$faq->id}}">
                                {!! $faq->question !!}
                            </a>
                        </h4>
                    </div>
                    <div id="FAQ{{$faq->id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{$faq->id}}">
                        <div class="panel-body">
                            {!! $faq->answer !!}
                        </div>
                    </div>
                </div>
                @endforeach

        </div>
    </div>
@endsection

@section('after-scripts-end')
@stop