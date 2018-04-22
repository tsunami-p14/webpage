@extends('layout')

@section('content')
    <h1>{{ $data->name}}</h1>

    <hr>

    <article>
        <div class="name_a">
            Name_a:
            {{ $data->name_a }}
        </div>
        <div class="info">
            infor:
            {{ $data->infor }}
        </div>
    </article>

    <br>

    {!! link_to(action('masters\MakerController@edit',[$data->id]),'編集',['class'=>'btn btn-primary']) !!}
    {!! delete_form(['makers',$data->id]) !!}


@stop
