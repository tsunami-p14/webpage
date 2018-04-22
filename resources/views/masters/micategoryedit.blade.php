@extends('layout')

@section('content')
    <h1>{{ $data->name}}</h1>

    <hr>

    @include ('errors.form_errors');
    {!! Form::model($data,['method' => 'PATCH','url' => ['micategories',$data->id ] ]) !!}
    @include('masters.micategoryform',['submitButton' =>'Edit micategory'])

    {!! Form::close() !!}
@stop