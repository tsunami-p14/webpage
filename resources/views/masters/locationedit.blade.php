@extends('layout')

@section('content')
    {{--<h1>aaa{{ $mitem->typecode}}</h1>--}}
    <hr>

    @include ('errors.form_errors')
    {!! Form::model($item,['method' => 'PATCH','url' => ['locations',$item->id ] ]) !!}
    @include('masters.locationform',['submitButton' =>'Edit Location'])

    {!! Form::close() !!}
@stop