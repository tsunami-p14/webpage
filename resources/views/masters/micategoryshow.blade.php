@extends('layout')

@section('content')
    <h1>{{ $data->name}}</h1>

    <hr>

    <article>
        <div class="info">
            詳細:
            {{ $data->infor }}
        </div>
        <div class="sort_order">
            ソート順番:
            {{ $data->sort_order }}
        </div>
    </article>

    <br>

    {!! link_to(action('masters\MicategoryController@edit',[$data->id]),'編集',['class'=>'btn btn-primary']) !!}
    {!! delete_form(['micategorydtls',$data->id]) !!}

@stop
