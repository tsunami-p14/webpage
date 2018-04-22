@extends('layout')

@section('content')
    <h1>{{ $data->name}}</h1>

    <hr>

    @include ('errors.form_errors')
    {!! Form::model($data,['method' => 'PATCH','url' => ['micategorydtls',$data->id ] ]) !!}
    @include('masters.micategorydtlform',['submitButton' =>'Edit micategorydtl'])

    {!! Form::close() !!}
@stop