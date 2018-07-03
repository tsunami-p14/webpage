<div class="form-group">
    {!! Form::label('name', 'カテゴリ名:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('infor', '詳細:') !!}
    {!! Form::text('infor', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('sort_order', 'ソート順番:') !!}
    {!! Form::text('sort_order', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    <input class="btn btn-primary form-control" type="submit" value="Edit micategory">
</div>
