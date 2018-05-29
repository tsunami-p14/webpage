@extends('layout')

@section('content')
    <h1>{{$item->name}}</h1>
    <hr>
    <article>
        <div class="info">
            infor:
            {{ $item->infor }}
        </div>
    </article>

    <br>

    {{--{!! link_to(action('masters\MsupplyController@edit',[$item->id]),'編集',['class'=>'btn btn-primary']) !!}--}}
    {{--{!! link_to(action('masters\MsupplyController@index'),'編集',['class'=>'btn btn-primary']) !!}--}}
    {!! link_to(action('masters\MsupplyController@edit',[$item->id]),'編集',['class'=>'btn btn-primary']) !!}
    {{--{{action('masters\MitemController@show',1)}}--}}

    {!! delete_form(['msupplies',$item->id]) !!}

@stop
