@extends('layout')

@section('content')
    <h1>{{$item->name}}</h1>
    <hr>
    <article>
    </article>

    <br>

    {!! link_to(action('masters\IqualitylvlController@edit',[$item->id]),'編集',['class'=>'btn btn-primary']) !!}

    {!! delete_form(['iqualitylvls',$item->id]) !!}

@stop
