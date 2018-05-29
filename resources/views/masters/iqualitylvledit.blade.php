@extends('layout')

@section('content')
    <hr>
    @include ('errors.form_errors')
    {!! Form::model($item,['method' => 'PATCH','url' => ['iqualitylvls',$item->id ] ]) !!}
    @include('masters.isupplyform',['submitButton' =>'Edit Supply'])

    {!! Form::close() !!}
@stop