@extends('layout')

@section('content')
    位置

    @include ('errors.form_errors')

    {!! Form::model(null,['method' => 'post','url' => ['locations'] ]) !!}

    @include('masters.locationform',['submitButton' =>'add Location'])

    {!! Form::close() !!}


@endsection