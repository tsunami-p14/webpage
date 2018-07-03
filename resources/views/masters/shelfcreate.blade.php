@extends('layout')

@section('content')
    棚

    @include ('errors.form_errors')

    {!! Form::model(null,['method' => 'post','url' => ['shelves'] ]) !!}

    @include('masters.Shelfform',['submitButton' =>'add Shelf'])

    {!! Form::close() !!}


@endsection