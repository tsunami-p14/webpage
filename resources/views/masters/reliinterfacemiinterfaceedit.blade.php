@extends('layout')

@section('content')
    <h1>{{ $data->name}}</h1>

    <hr>

    @include ('errors.form_errors')
    {!! Form::model($data,['method' => 'PATCH','url' => ['reliinterfacemiinterface',$data->id ] ]) !!}
    @include('masters.reliinterfacemiinterfaceform',['submitButton' =>'Edit Interface'])

    {!! Form::close() !!}
@stop