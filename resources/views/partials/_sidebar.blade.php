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
        {!! Form::text('engine', '', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('mileage', 'Mileage', ['class' => 'control-label']) !!}
        {!! Form::text('mileage', '', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('owners', 'Owners', ['class' => 'control-label']) !!}
        {!! Form::text('owners', '', ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Apply', ['class' => 'btn btn-primary']) !!}

    <input type="reset" value="Reset" id="reset-filter" class="btn btn-default">

    {!! Form::close() !!}
</div>