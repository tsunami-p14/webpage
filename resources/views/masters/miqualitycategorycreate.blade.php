@extends('layout')

@section('content')
    商品クオリティマスタ

    @include ('errors.form_errors')

    {!! Form::model(null,['method' => 'post','url' => ['miqualitycategories'] ]) !!}

    @include('masters.miqualitycategoryform',['submitButton' =>'add Quality Master'])

    {!! Form::close() !!}


@endsection