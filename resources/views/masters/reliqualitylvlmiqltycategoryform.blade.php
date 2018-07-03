<div class="form-group">
    <div class="form-group">
        {!! Form::label('iqua_mqua', 'クオリティマスタ:') !!}
        {!! Form::select('iqua_mqua[]', $mfncdtl, null, ['class' => 'form-control', 'multiple']) !!}
    </div>
</div>
<div class="form-group">
    <input class="btn btn-primary form-control" type="submit" value="Edit Quality GROUP">
</div>
