@extends('layout')

@section('content')
    <h1>{{ $data->name}}</h1>

    <hr>

    <article>
        <div class="info">
            infor:
            {{ $data->infor }}
        </div>
    </article>

    <br>

    {!! link_to(action('masters\MicategorydtlController@edit',[$data->id]),'編集',['class'=>'btn btn-primary']) !!}
    {!! delete_form(['micategorydtls',$data->id]) !!}

@stop
