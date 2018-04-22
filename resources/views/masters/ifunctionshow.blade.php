@extends('layout')

@section('content')
    <h1>{{ $data->name}}</h1>

    <hr>

    <article>
        <div class="name">
            infor:
            {{ $data->name}}
        </div>
    </article>

    <br>

    {!! link_to(action('masters\IfunctionController@edit',[$data->id]),'編集',['class'=>'btn btn-primary']) !!}
    {!! delete_form(['ifunctions',$data->id]) !!}


@stop
