@extends('layout')

@section('content')
    {{--<h1>aaa{{ $mitem->typecode}}</h1>--}}

    <hr>

    @include ('errors.form_errors')
    {!! Form::model($mitem,['method' => 'PATCH','url' => ['mitems',$mitem->id ] ]) !!}
    @include('masters.mitemform',['submitButton' =>'Edit Interface'])

    {!! Form::close() !!}
@stop