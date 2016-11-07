<div id="filters-list">
    {!! Form::open(['action' => 'AdvertController@index', 'id' => 'filter-form']) !!}

    <div class="form-group">
        {!! Form::label('title', 'Title', ['class' => 'control-label']) !!}
        {!! Form::text('title', '', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('region', 'Region', ['class' => 'control-label']) !!}
        {!! Form::select('region', [], '', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('city', 'City', ['class' => 'control-label']) !!}
        {!! Form::select('city', [], '', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('manufacturer', 'Manufacturer', ['class' => 'control-label']) !!}
        {!! Form::text('manufacturer', '', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('model', 'Model', ['class' => 'control-label']) !!}
        {!! Form::text('model', '', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('engine', 'Engine', ['class' => 'control-label']) !!}
        <div class="row">
            <div class="col-xs-5">
                {!! Form::text('engine_min', '', ['class' => 'form-control']) !!}
            </div>
            <div class="col-xs-2">
                <span>&mdash;</span>
            </div>
            <div class="col-xs-5">
                {!! Form::text('engine_max', '', ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('mileage', 'Mileage', ['class' => 'control-label']) !!}
        <div class="row">
            <div class="col-xs-5">
                {!! Form::text('mileage_min', '', ['class' => 'form-control']) !!}
            </div>
            <div class="col-xs-2">
                <span>&mdash;</span>
            </div>
            <div class="col-xs-5">
                {!! Form::text('mileage_max', '', ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('owners', 'Owners', ['class' => 'control-label']) !!}
        <div class="row">
            <div class="col-xs-5">
                {!! Form::text('owners_min', '', ['class' => 'form-control']) !!}
            </div>
            <div class="col-xs-2">
                <span>&mdash;</span>
            </div>
            <div class="col-xs-5">
                {!! Form::text('owners_max', '', ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>

    {!! Form::submit('Apply', ['class' => 'btn btn-primary']) !!}

    <input type="reset" value="Reset" id="reset-filter" class="btn btn-default">

    {!! Form::close() !!}
</div>