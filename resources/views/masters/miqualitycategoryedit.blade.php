@extends('layout')

@section('content')
    {{--<h1>aaa{{ $mitem->typecode}}</h1>--}}

    <hr>

    @include ('errors.form_errors')
    {!! Form::model($item,['method' => 'PATCH','url' => ['miqualitycategories',$item->id ] ]) !!}
    @include('masters.miqualitycategoryform',['submitButton' =>'Edit Quality Category Master'])

    {!! Form::close() !!}
@stop