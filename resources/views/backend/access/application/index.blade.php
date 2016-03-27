@extends ('backend.layouts.master')

@section ('title', 'Site Management - FAQs')

@section('page-header')
    <h1>
        Applications
    </h1>
@endsection

@section('content')
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">Applications - Active</h3>

            <div class="box-tools pull-right">
                @include('backend.access.application.includes.partials.header-buttons')
            </div>
        </div><!-- /.box-header -->

        <div class="box-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Requested MOS</th>
                        <th>Status</th>
                        <th class="visible-lg">Created</th>
                        <th class="visible-lg">Last Updated</th>
                        <th>{{ trans('labels.general.actions') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($applications as $application)
                            <tr>
                                <td>{!! $application->id !!}</td>
                                <td>{!! $application->name() !!}</td>
                                <td>{!! $application->mos_id !!}</td>
                                <td>
                                    @if($application->status)
                                        <label class="label label-primary">Submitted</label>
                                    @elseif($application->status == 2)
                                        <label class="label label-danger">Declined</label>
                                    @elseif($application->status == 3)
                                        <label class="label label-success">Accepted</label>
                                    @endif
                                </td>
                                <td class="visible-lg">{!! $application->created_at->diffForHumans() !!}</td>
                                <td class="visible-lg">{!! $application->updated_at->diffForHumans() !!}</td>
                                <td>
                                    <a href="{{route('admin.access.application.edit', $application->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
                                    <a href="{{route('admin.access.application.destroy', $application->id)}}" data-method="delete" name="delete_item" class="btn btn-danger btn-xs"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="Delete"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="pull-left">
                {!! $applications->count() !!} Active Applications
            </div>

            <div class="clearfix"></div>
        </div><!-- /.box-body -->
    </div><!--box-->
@stop
