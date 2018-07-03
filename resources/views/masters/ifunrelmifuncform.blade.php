<div class="form-group">
    {{--{!! Form::label('name', 'name:') !!}--}}
    {{--{!! Form::text('name', null, ['class' => 'form-control']) !!}--}}
    <div class="form-group">
        {{--{!! Form::label('mi_category', 'm_i_categories:') !!}--}}
        {{--{!! Form::select('mi_category[]', $mic, null, ['class' => 'form-control', 'multiple']) !!}--}}
        {!! Form::label('mi_functiondtl', '機能詳細:') !!}
        {!! Form::select('mi_functiondtl[]', $mfncdtl, null, ['class' => 'form-control', 'multiple']) !!}
    </div>
</div>
<div class="form-group">
    <input class="btn btn-primary form-control" type="submit" value="Edit mi_functiondtl">
</div>
