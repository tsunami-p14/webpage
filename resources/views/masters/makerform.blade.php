<div class="form-group">
    {!! Form::label('name', '名前:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('name_a', 'よみがな:') !!}
    {!! Form::text('name_a', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('infor', 'infor:') !!}
    {!! Form::text('infor', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    <input class="btn btn-primary form-control" type="submit" value="Edit makers">
</div>