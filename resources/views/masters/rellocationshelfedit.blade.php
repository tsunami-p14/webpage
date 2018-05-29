@extends('layout')

@section('content')
    <h1>{{$item->name}}</h1>

    <hr>

    @include ('errors.form_errors')
    {!! Form::model($item,['method' => 'PATCH','url' => ['rellocationshelves',$item->id ] ]) !!}
    @include('masters.rellocationshelfform',['submitButton' =>'Edit Supply'])

    {!! Form::close() !!}
@stop