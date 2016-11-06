<div id="filters-list">
    {!! Form::open(['action' => 'AdvertController@filter', 'id' => 'filter-form']) !!}

    <div class="form-group">
        {!! Form::text('title', old('title'), ['class' => 'form-control', 'placeholder' => 'Title']) !!}
    </div>

    <div class="form-group">
        {{--myTODO: pass array of data--}}
        <?php $array = ['Ukraine' => 'Ukraine', 'Germany' => 'Germany', 'France' => 'France', 'Italy' => 'Italy', 'USA' => 'USA', "Great Britain" => "Great Britain"] ?>
        {!! Form::select('region', array('' => 'Select region') + $array , '', ['class' => 'form-control'], old('region')) !!}
    </div>

    <div class="form-group">
        {{--myTODO: pass array of data--}}
        <?php $array = ['Kiev' => 'Kiev', 'Berlin' => 'Berlin', 'Paris' => 'Paris', 'Milan' => 'Milan', 'New York' => 'New York', "London" => "London"] ?>
        {!! Form::select('city', array('' => 'Select city') + $array , '', ['class' => 'form-control', 'placeholder' => 'placeholder'], old('city')) !!}
    </div>

    <div class="form-group">
        {!! Form::text('manufacturer', old('manufacturer'), ['class' => 'form-control', 'placeholder' => 'Manufacturer']) !!}
    </div>

    <div class="form-group">
        {!! Form::text('model', old('model'), ['class' => 'form-control', 'placeholder' => 'Model']) !!}
    </div>

    <div class="form-group">
        {!! Form::text('engine', old('engine'), ['class' => 'form-control', 'placeholder' => 'Engine']) !!}
    </div>

    <div class="form-group">
        {!! Form::text('mileage', old('mileage'), ['class' => 'form-control', 'placeholder' => 'Mileage']) !!}
    </div>

    <div class="form-group">
        {!! Form::text('owners', old('owners'), ['class' => 'form-control', 'placeholder' => 'Owners']) !!}
    </div>

    {!! Form::submit('Apply', ['class' => 'btn btn-primary']) !!}

    <input type="reset" value="Reset" id="reset-filter" class="btn btn-default">

    {!! Form::close() !!}
</div>