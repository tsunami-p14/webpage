@extends('layout')

@section('content')
    <h1>{{ $data->name}}</h1>

    <hr>

    <article>
        <h1>{{ $data->name}}</h1>
    </article>

    <br>

    {!! link_to(action('masters\icategoryController@edit',[$data->id]),'編集',['class'=>'btn btn-primary']) !!}
    {!! delete_form(['icategories',$data->id]) !!}

@stop
