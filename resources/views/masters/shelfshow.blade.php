@extends('layout')

@section('content')
    <h1>{{$item->name}}</h1>
    <hr>
    <article>
        <div class="info">
            棚詳細:
            {{ $item->infor }}
        </div>
    </article>

    <br>

    {!! link_to(action('masters\ShelfController@edit',[$item->id]),'編集',['class'=>'btn btn-primary']) !!}
    {{--{{action('masters\MitemController@show',1)}}--}}

    {!! delete_form(['shelves',$item->id]) !!}

@stop
