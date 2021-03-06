@extends('frontend.layouts.master')

@section('breadcrumbs')
    <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li class="active">Modpack</li>
    </ol>
@endsection

@section('content')
        <h1>Modpack</h1>
        <p>The 1st RRF Modpack consist of several mods complied to ensure the best simulation experience. You will need <a href="http://content.1st-rrf.com/infil/setup.exe">Infil - 1st RRF Official Launcher</a> in order to set up the repository. It is important to note that our modpack is publicly available and required for play on our public servers.</p>
        <h2>Instructions on Downloading your mods with Infil</h2>
        <ol>
            <li>Run the <a href="http://content.1st-rrf.com/infil/setup.exe">setup.exe</a> file</li>
            <li>Setup your mod directory and ARMA 3 directory</li>
            <li>Press the Update Button or if you see none, validate your mods.</li>
            <li>Your Mods will autodownload, and once they are done, a play button will appear</li>
        </ol>
        <p>All mods have been signed with 1st RRF Server signatures to ensure correct mod packages and to remove mismatch errors.</p>
@endsection

@section('after-scripts-end')
@stop