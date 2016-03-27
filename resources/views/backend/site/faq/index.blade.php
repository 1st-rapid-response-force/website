@extends ('backend.layouts.master')

@section ('title', 'Site Management - FAQs')

@section('page-header')
    <h1>
        FAQs
    </h1>
@endsection

@section('content')
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">FAQs</h3>

            <div class="box-tools pull-right">
                @include('backend.site.faq.includes.partials.header-buttons')
            </div>
        </div><!-- /.box-header -->

        <div class="box-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Question</th>
                        <th>Order</th>
                        <th>Published</th>
                        <th class="visible-lg">Created</th>
                        <th class="visible-lg">Last Updated</th>
                        <th>{{ trans('labels.general.actions') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($faqs as $faq)
                            <tr>
                                <td>{!! $faq->id !!}</td>
                                <td>{!! $faq->question !!}</td>
                                <td>{!! $faq->order !!}</td>
                                <td>
                                    @if($faq->published)
                                        <label class="label label-success">Yes</label>
                                    @else
                                        <label class="label label-danger">No</label>
                                    @endif
                                </td>
                                <td class="visible-lg">{!! $faq->created_at->diffForHumans() !!}</td>
                                <td class="visible-lg">{!! $faq->updated_at->diffForHumans() !!}</td>
                                <td>
                                    <a href="{{route('admin.site.faq.edit', $faq->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
                                    <a href="{{route('admin.site.faq.destroy', $faq->id)}}" data-method="delete" name="delete_item" class="btn btn-danger btn-xs"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="Delete"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="pull-left">
                {!! $faqs->count() !!} FAQs
            </div>

            <div class="clearfix"></div>
        </div><!-- /.box-body -->
    </div><!--box-->
@stop
