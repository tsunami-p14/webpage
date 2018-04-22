@extends('layout')

@section('content')
    <h1>{{ $data->name}}</h1>

    <hr>

    @include ('errors.form_errors')
    {!! Form::model($data,['method' => 'PATCH','url' => ['micrelmicdtl',$data->id ] ]) !!}
        @include('masters.micrelmicdtlform',['submitButton' =>'Edit icategory'])

    {!! Form::close() !!}
@stop