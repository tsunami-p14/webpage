@extends('layout')

@section('content')
    <h1>{{ $data->name}}</h1>

    <hr>

    @include ('errors.form_errors')
    {!! Form::model($data,['method' => 'PATCH','url' => ['ifunctions',$data->id ] ]) !!}
    @include('masters.ifunctionform',['submitButton' =>'Edit i functions'])

    {!! Form::close() !!}
@stop