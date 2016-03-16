@extends('frontend.layouts.master-nsb')

@section('breadcrumbs')
    <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li class="active">Structure & Assignments</li>
    </ol>
@endsection

@section('content')
    <h1>Structure and Assignments</h1>
    <h2>Ranks</h2>
    <p>We use a rank structure based on the US Army to create a rich experience and atmosphere.</p>
    <p>Our promotions are based on a point system that rewards activity and positive actions, meaning effort is directly rewarded and ranks hold value.</p>
    <p>However we make sure that ranks are limited by our unique MOS system. In the RRF, we don't hand out ranks that are not meaningful for a given position.</p>

    <h3>Officer Ranks</h3>
    <div class="text-center">
        <table class="table table-hover" id="ranks">
            <thead>
            @foreach($officerRanks as $rank)
                <th ><img style="max-width: 100px; max-height: 100px;" class="center-block" src="{{$rank->image}}"></th>
            @endforeach
            </thead>
            <tbody>
            <tr>
                @foreach($officerRanks as $rank)
                    <td><strong>{{$rank->name}}</strong><br>{{$rank->abbreviation}}</td>
                @endforeach
            </tr>
            </tbody>
        </table>
    </div>

    <h3>Warrant Ranks</h3>
    <div class="text-center">
        <table class="table table-hover" id="ranks">
            <thead>
            @foreach($warrantRanks as $rank)
                <th><img style="max-width: 100px; max-height: 100px;" class="center-block" src="{{$rank->image}}"></th>
            @endforeach
            </thead>
            <tbody>
            <tr>
                @foreach($warrantRanks as $rank)
                    <td><strong>{{$rank->name}}</strong><br>{{$rank->abbreviation}}</td>
                @endforeach
            </tr>
            </tbody>
        </table>
    </div>

    <h3>Enlistment Ranks</h3>
    <div class="text-center">
        <table class="table table-hover" id="ranks">
            <thead>
            @foreach($enlistedRanks as $rank)
                <th><img style="max-width: 100px; max-height: 100px;" class="center-block" src="{{$rank->image}}"></th>
            @endforeach
            </thead>
            <tbody>
            <tr>
                @foreach($enlistedRanks as $rank)
                    <td><strong>{{$rank->name}}</strong><br>{{$rank->abbreviation}}</td>
                @endforeach
            </tr>
            </tbody>
        </table>
    </div>
@endsection

@section('after-scripts-end')
@stop