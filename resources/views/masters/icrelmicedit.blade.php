@extends('layout')

@section('content')
    <h1>{{ $data->name}}</h1>

    <hr>

    @include ('errors.form_errors')
    {!! Form::model($data,['method' => 'PATCH','url' => ['icrelmic',$data->id ] ]) !!}
    @include('masters.icrelmicform',['submitButton' =>'Edit icategory'])

    {!! Form::close() !!}
@stop