@extends('layout')

@section('content')
    Shop Master Create

    @include ('errors.form_errors')

    {!! Form::model(null,['method' => 'post','url' => ['mshops'] ]) !!}

    @include('masters.mshopform',['submitButton' =>'add shop'])

    {!! Form::close() !!}


@endsection