<div class="form-group">
    {!! Form::label('name', 'アイテムカテゴリ名:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
    <div class="form-group">
        {{--{!! Form::label('mi_category', 'm_i_categories:') !!}--}}
        {{--{!! Form::select('mi_category[]', $mic, null, ['class' => 'form-control', 'multiple']) !!}--}}
        {{--{!! Form::label('mi_categorydtl', 'm_i_categories_dtl:') !!}--}}
        {{--{!! Form::select('mi_categorydtl[]', $micdtl, null, ['class' => 'form-control', 'multiple']) !!}--}}
    </div>
</div>
<div class="form-group">
    <input class="btn btn-primary form-control" type="submit" value="Edit icategory">
</div>
