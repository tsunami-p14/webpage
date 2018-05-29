@extends('layout')

@section('content')
    {{--<h1>aaa{{ $mitem->typecode}}</h1>--}}

    <hr>

    @include ('errors.form_errors')
    {!! Form::model($item,['method' => 'PATCH','url' => ['msupplies',$item->id ] ]) !!}
    @include('masters.msupplyform',['submitButton' =>'Edit Supply Master'])

    {!! Form::close() !!}
@stop