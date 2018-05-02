@extends('layout')

@section('content')
    <h1>{{ $data->name}}</h1>

    <hr>

    @include ('errors.form_errors')
    {!! Form::model($data,['method' => 'PATCH','url' => ['iinterface',$data->id ] ]) !!}
    @include('masters.iinterfaceform',['submitButton' =>'Edit interface'])

    {!! Form::close() !!}
@stop