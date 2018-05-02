@extends('layout')

@section('content')
    <h1>{{ $data->name}}</h1>

    <hr>

    @include ('errors.form_errors')
    {!! Form::model($data,['method' => 'PATCH','url' => ['ifunrelmifunc',$data->id ] ]) !!}
    @include('masters.ifunrelmifuncform',['submitButton' =>'Edit icategory'])

    {!! Form::close() !!}
@stop