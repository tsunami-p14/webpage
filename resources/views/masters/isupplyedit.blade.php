@extends('layout')

@section('content')
    {{--<h1>aaa{{ $mitem->typecode}}</h1>--}}

    <hr>

    @include ('errors.form_errors')
    {!! Form::model($item,['method' => 'PATCH','url' => ['isupplies',$item->id ] ]) !!}
    @include('masters.isupplyform',['submitButton' =>'Edit Supply'])

    {!! Form::close() !!}
@stop