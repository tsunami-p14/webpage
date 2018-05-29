<div class="form-group">
    <div class="form-group">
        {!! Form::label('location_shelf', 'location_shelf:') !!}
        {!! Form::select('location_shelf[]', $mfncdtl, null, ['class' => 'form-control', 'multiple']) !!}
    </div>
</div>
<div class="form-group">
    <input class="btn btn-primary form-control" type="submit" value="Edit Shelf-Location">
</div>
