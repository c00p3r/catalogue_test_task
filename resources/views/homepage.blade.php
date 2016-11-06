@extends('app')


@section('styles')
    {{ Html::style('plugins\select2-4.0.3\css\select2.min.css') }}
    {{ Html::style('plugins\select2-4.0.3\css\select2-bootstrap.css') }}
@stop

@section('scripts')
    {{ Html::script('plugins\select2-4.0.3\js\select2.min.js') }}

    <script>
        $(function () {
            initSelect2($('select[name=region]'), {!! $regions !!});
            initSelect2($('select[name=city]'), {!! $cities !!});
        });
    </script>
@stop

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