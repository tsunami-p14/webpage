@extends('layout')

@section('content')
    <h1>{{ $data->name}}</h1>

    <hr>

@include ('errors.form_errors')
    {!! Form::model($data,['method' => 'PATCH','url' => ['makers',$data->id ] ]) !!}
        @include('masters.makerform',['submitButton' =>'Edit maker'])

    {!! Form::close() !!}
@stop