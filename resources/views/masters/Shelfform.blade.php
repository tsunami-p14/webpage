<div class="form-group">
    {!! Form::label('name', '棚名:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('infor', '棚詳細:') !!}
    {!! Form::text('infor', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    <input class="btn btn-primary form-control" type="submit" value="Edit Shelf ">
</div>
