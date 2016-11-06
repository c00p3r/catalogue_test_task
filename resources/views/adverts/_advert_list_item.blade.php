<div class="row advert">
    <div class="col-sm-5">
        <a class="thumbnail">
            <img class="img-responsive" src="{{ asset($advert->picture) }}" alt="{{ $advert->title }}">
        </a>
    </div>
    <div class="col-sm-7">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="lead">{{ $advert->title }}</div>
                <div class="advert-meta text-muted">{{ $advert->user->email }} posted at {{ date('d-m-Y H:i', strtotime($advert->created_at)) }}</div>
            </div>
            <table class="table">
                <tbody>
                @foreach ($advert['display_list'] as $key)
                    <tr>
                        <td>{{ ucwords($key) }}:</td>
                        <td>{{ $advert[$key] }}</td>
                    </tr>
                @endforeach
                {{--<tr>--}}
                {{--<td>Manufacturer:</td>--}}
                {{--<td>{{ $advert->manufacturer }}</td>--}}
                {{--</tr>--}}
                {{--<tr>--}}
                {{--<td>Model:</td>--}}
                {{--<td>{{ $advert->model }}</td>--}}
                {{--</tr>--}}
                {{--<tr>--}}
                {{--<td>Engine:</td>--}}
                {{--<td>{{ $advert->engine }}</td>--}}
                {{--</tr>--}}
                {{--<tr>--}}
                {{--<td>Mileage:</td>--}}
                {{--<td>{{ $advert->mileage }}</td>--}}
                {{--</tr>--}}
                {{--<tr>--}}
                {{--<td>Owners:</td>--}}
                {{--<td>{{ $advert->owners }}</td>--}}
                {{--</tr>--}}
                </tbody>
            </table>
            <div class="panel-footer">
                <a href="javascript:void(0)" class="btn btn-primary">Contact Seller</a>
            </div>
        </div>
    </div>
</div>