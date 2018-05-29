@extends('layout')

@section('content')
    {{--<h1>aaa{{ $mitem->typecode}}</h1>--}}

    <hr>

    @include ('errors.form_errors')
    {!! Form::model($item,['method' => 'PATCH','url' => ['mshops',$item->id ] ]) !!}
    @include('masters.mshopform',['submitButton' =>'Edit Shop Master'])

    {!! Form::close() !!}
@stop