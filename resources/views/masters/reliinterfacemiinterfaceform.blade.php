<div class="form-group">
    <div class="form-group">
        {!! Form::label('mi_interface', 'm_i_interface:') !!}
        {!! Form::select('mi_interface[]', $mfncdtl, null, ['class' => 'form-control', 'multiple']) !!}
        <example-select></example-select>
    </div>
</div>
<div class="form-group">
    <input class="btn btn-primary form-control" type="submit" value="Edit Interface">
</div>
