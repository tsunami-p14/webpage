@extends('layout')

@section('content')
    Quality Group Create

    @include ('errors.form_errors')

    {!! Form::model(null,['method' => 'post','url' => ['iqualitylvls'] ]) !!}

    @include('masters.iqualitylvlform',['submitButton' =>'add Quality Group'])

    {!! Form::close() !!}


@endsection