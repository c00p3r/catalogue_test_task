@extends('app')


@section('content')
    <!-- Begin page content -->
    <div class="container homepage">
        <h1 class="page-header">Car Sell Adverts</h1>

        <div class="row row-offcanvas">
            <div id="sidebar" class="col-md-3">
                @include('partials._sidebar')
            </div>

            <div id="mainbar" class="col-sm-12">
                <div class="text-center">
                    <img id="ajax-loader" class="hidden" src="{{ asset('img/ajax-loader.gif') }}" alt="loading">
                </div>
                <div id="content">
                    @include('adverts._advert_list')
                </div>
            </div>
        </div>
    </div>
@endsection