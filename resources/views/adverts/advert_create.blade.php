@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create New Advert</div>

                    <div class="panel-body">
                        @if( ! $is_create_allowed)
                            <p class="lead text-center text-info">Sorry, you can't create more than 3 adverts :(</p>
                        @else
                            {!! Form::open(['action' => 'AdvertController@add', 'method' => 'post', 'class' => 'form-horizontal', 'files' => true]) !!}
                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                {!! Form::label('title', 'Title', ['class' => 'col-md-4 control-label']) !!}

                                <div class="col-md-6">
                                    {!! Form::text('title', old('title'), ['class' => 'form-control', 'required' => 'required']) !!}

                                    @if ($errors->has('title'))
                                        <span class="help-block form-error-block">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('region') ? ' has-error' : '' }}">
                                {!! Form::label('region', 'Region', ['class' => 'col-md-4 control-label']) !!}

                                <div class="col-md-6">

                                    {!! Form::text('region', old('region'), ['class' => 'form-control', 'required' => 'required']) !!}

                                    @if ($errors->has('region'))
                                        <span class="help-block form-error-block">
                                        <strong>{{ $errors->first('region') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                                {!! Form::label('city', 'City', ['class' => 'col-md-4 control-label']) !!}

                                <div class="col-md-6">
                                    {!! Form::text('city', old('city'), ['class' => 'form-control', 'required' => 'required']) !!}

                                    @if ($errors->has('city'))
                                        <span class="help-block form-error-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('manufacturer') ? ' has-error' : '' }}">
                                {!! Form::label('manufacturer', 'Manufacturer', ['class' => 'col-md-4 control-label']) !!}

                                <div class="col-md-6">
                                    {!! Form::text('manufacturer', old('manufacturer'), ['class' => 'form-control', 'required' => 'required']) !!}

                                    @if ($errors->has('manufacturer'))
                                        <span class="help-block form-error-block">
                                            <strong>{{ $errors->first('manufacturer') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('model') ? ' has-error' : '' }}">
                                {!! Form::label('model', 'Model', ['class' => 'col-md-4 control-label']) !!}

                                <div class="col-md-6">
                                    {!! Form::text('model', old('model'), ['class' => 'form-control', 'required' => 'required']) !!}

                                    @if ($errors->has('model'))
                                        <span class="help-block form-error-block">
                                            <strong>{{ $errors->first('model') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('engine') ? ' has-error' : '' }}">
                                {!! Form::label('engine', 'Engine', ['class' => 'col-md-4 control-label']) !!}

                                <div class="col-md-6">
                                    {!! Form::text('engine', old('engine'), ['class' => 'form-control', 'required' => 'required']) !!}

                                    @if ($errors->has('engine'))
                                        <span class="help-block form-error-block">
                                            <strong>{{ $errors->first('engine') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('mileage') ? ' has-error' : '' }}">
                                {!! Form::label('mileage', 'Mileage', ['class' => 'col-md-4 control-label']) !!}

                                <div class="col-md-6">
                                    {!! Form::text('mileage', old('mileage'), ['class' => 'form-control', 'required' => 'required']) !!}

                                    @if ($errors->has('mileage'))
                                        <span class="help-block form-error-block">
                                            <strong>{{ $errors->first('mileage') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('owners') ? ' has-error' : '' }}">
                                {!! Form::label('owners', 'Owners', ['class' => 'col-md-4 control-label']) !!}

                                <div class="col-md-6">
                                    {!! Form::text('owners', old('owners'), ['class' => 'form-control', 'required' => 'required']) !!}

                                    @if ($errors->has('owners'))
                                        <span class="help-block form-error-block">
                                            <strong>{{ $errors->first('owners') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('picture') ? ' has-error' : '' }}">
                                {!! Form::label('picture', 'Picture', ['class' => 'col-md-4 control-label']) !!}

                                <div class="col-md-6">
                                    {!! Form::file('picture', ['class' => 'form-control', 'required' => 'required']) !!}

                                    @if ($errors->has('picture'))
                                        <span class="help-block form-error-block">
                                        <strong>{{ $errors->first('picture') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group last">
                                <div class="text-center">
                                    {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
                                </div>
                            </div>
                            {!! Form::close() !!}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
