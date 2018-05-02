@extends('layout')

@section('content')
    <h1>{{ $data->name}}</h1>

    <hr>

    @include ('errors.form_errors')
    {!! Form::model($data,['method' => 'PATCH','url' => ['miinterface',$data->id ] ]) !!}
    @include('masters.miinterfaceform',['submitButton' =>'Edit miinterface'])

    {!! Form::close() !!}
@stop