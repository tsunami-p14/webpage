@extends('layout')

@section('content')
    付属品 グループ

    @include ('errors.form_errors')

    {!! Form::model(null,['method' => 'post','url' => ['isupplies'] ]) !!}

    @include('masters.isupplyform',['submitButton' =>'add ispply'])

    {!! Form::close() !!}


@endsection