@extends('layout')

@section('content')
    <h1>{{$item->name}}</h1>
    <hr>
    <article>
    </article>

    <br>

    {{--{!! link_to(action('masters\MsupplyController@edit',[$item->id]),'編集',['class'=>'btn btn-primary']) !!}--}}
    {{--{!! link_to(action('masters\MsupplyController@index'),'編集',['class'=>'btn btn-primary']) !!}--}}
    {!! link_to(action('masters\MshopController@edit',[$item->id]),'編集',['class'=>'btn btn-primary']) !!}
    {{--{{action('masters\MitemController@show',1)}}--}}

    {!! delete_form(['mshops',$item->id]) !!}

@stop
