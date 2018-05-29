<div class="form-group">
    <div class="form-group">
        {!! Form::label('ispply_mspply', 'ispply_mspply:') !!}
        {!! Form::select('ispply_mspply[]', $mfncdtl, null, ['class' => 'form-control', 'multiple']) !!}
    </div>
</div>
<div class="form-group">
    <input class="btn btn-primary form-control" type="submit" value="Edit Supply">
</div>
