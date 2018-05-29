@extends('layout')

@section('content')
    {{--<h1>aaa{{ $mitem->typecode}}</h1>--}}
    <hr>

    @include ('errors.form_errors')
    {!! Form::model($item,['method' => 'PATCH','url' => ['shelves',$item->id ] ]) !!}
    @include('masters.shelfform',['submitButton' =>'Edit Shelf'])

    {!! Form::close() !!}
@stop