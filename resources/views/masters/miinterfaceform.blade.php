<div class="form-group">
    {!! Form::label('name', 'インタフェイス名:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
    {!! Form::label('infor', 'インタフェイス詳細:') !!}
    {!! Form::text('infor', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    <input class="btn btn-primary form-control" type="submit" value="add Minterface">
</div>