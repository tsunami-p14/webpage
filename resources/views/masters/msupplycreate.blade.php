@extends('layout')

@section('content')
    付属品マスタ

    @include ('errors.form_errors')

    {!! Form::model(null,['method' => 'post','url' => ['msupplies'] ]) !!}

        @include('masters.msupplyform',['submitButton' =>'add mspply'])

    {!! Form::close() !!}


@endsection