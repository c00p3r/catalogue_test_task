@extends('app')


@section('content')
    <!-- Begin page content -->
    <div class="container">
        <div class="page-header">
            <h1>Car Sell Adverts</h1>
        </div>

        <div class="adverts-list">
            @if(empty($adverts))
                <div class="alert alert-info lead">
                    <p>Sorry :( No adverts to show.</p>
                    @if(Auth::user())
                        <p>But you can <a href="/advert/create" class="alert-link">create one</a>!</p>
                    @endif
                </div>
            @else
                @foreach ($adverts as $advert)
                    <div class="row advert">
                        <div class="col-md-5">
                            <a href="javascript:void(0);" class="thumbnail">
                                <img class="img-responsive" src="{{ asset($advert->picture) }}" alt="{{ $advert->title }}">
                            </a>
                        </div>
                        <div class="col-md-7">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="lead">{{ $advert->title }}</div>
                                    <div class="advert-meta text-muted">{{ $advert->user->email }} posted at {{ date('d-m-Y H:i', strtotime($advert->created_at)) }}</div>
                                </div>
                                {{--<div class="panel body">--}}
                                {{--</div>--}}
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <td>Manufacturer:</td>
                                        <td>{{ $advert->manufacturer }}</td>
                                    </tr>
                                    <tr>
                                        <td>Model:</td>
                                        <td>{{ $advert->model }}</td>
                                    </tr>
                                    <tr>
                                        <td>Engine:</td>
                                        <td>{{ $advert->engine }}</td>
                                    </tr>
                                    <tr>
                                        <td>Mileage:</td>
                                        <td>{{ $advert->mileage }}</td>
                                    </tr>
                                    <tr>
                                        <td>Owners:</td>
                                        <td>{{ $advert->owners }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="panel-footer">
                                    <a href="javascript:void(0)" class="btn btn-primary">Contact Seller</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection