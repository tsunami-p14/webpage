@extends('layout')

@section('content')
    <h1>{{ $data->name}}</h1>

    <hr>

    <article>
        <div class="name">
            name:
            {{ $data->name}}
        </div>
    </article>

    <br>

    {!! link_to(action('masters\IinterfaceController@edit',[$data->id]),'編集',['class'=>'btn btn-primary']) !!}
    {!! delete_form(['iinterface',$data->id]) !!}


@stop
