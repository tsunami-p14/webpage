@extends('layout')

@section('content')
    <h1>{{ $data->name}}</h1>
    <hr>
    <article>
        <div class="info">
            機能詳細:
            {{ $data->infor }}
        </div>
    </article>

    <br>

    {!! link_to(action('masters\MifunctiondtlController@edit',[$data->id]),'編集',['class'=>'btn btn-primary']) !!}
    {!! delete_form(['mifunctiondtls',$data->id]) !!}

@stop
