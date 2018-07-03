@extends('layout')

@section('content')
    アイテムカテゴリマスタ

    @include ('errors.form_errors')

    {!! Form::model(null,['method' => 'post','url' => ['micategories'] ]) !!}
        @include('masters.micategoryform',['submitButton' =>'add micategory'])
    {!! Form::close() !!}


    {{--{!! Form::open(['url'=>'micategories']) !!}--}}

    {{--<div class="form-group">--}}
        {{--{!! Form::label('name', 'name:') !!}--}}
        {{--{!! Form::text('name', null, ['class' => 'form-control']) !!}--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
        {{--{!! Form::label('infor', 'infor:') !!}--}}
        {{--{!! Form::text('infor', null, ['class' => 'form-control']) !!}--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
        {{--{!! Form::label('sort_order', 'sort_order:') !!}--}}
        {{--{!! Form::text('sort_order', null, ['class' => 'form-control']) !!}--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
        {{--<input class="btn btn-primary form-control" type="submit" value="Add Micategory">--}}
    {{--</div>--}}
    {{--{!! Form::close() !!}--}}

@endsection