<div class="form-group">
    {!! Form::label('name', '位置名:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('infor', '詳細:') !!}
    {!! Form::text('infor', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    <input class="btn btn-primary form-control" type="submit" value="Edit Location">
</div>
