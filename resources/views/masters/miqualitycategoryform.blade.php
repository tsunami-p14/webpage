<div class="form-group">
    {!! Form::label('name', 'クオリティ名:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('score', 'クオリティのスコア値:') !!}
    {!! Form::text('score', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    <input class="btn btn-primary form-control" type="submit" value="Edit Quality Category Master ">
</div>
