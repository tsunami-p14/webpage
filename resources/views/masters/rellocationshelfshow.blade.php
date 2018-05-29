@extends('layout')

@section('content')
    <h1>{{ $item->name}}</h1>

    <hr>

    <article>
        <h1>{{ $item->name}}</h1>
        @unless ($item->locations->isEmpty())
            <h5>Item Interfaces:</h5>
            <ul>
                @foreach($item->locations as $location)
                    <li>{{ $location->name }}  {{ $location->infor}}</li>
                @endforeach
            </ul>
        @endunless

    </article>

    <br>

    {!! link_to(action('masters\RellocationshelfController@edit',[$item->id]),'編集',['class'=>'btn btn-primary']) !!}
    {{--{!! delete_form(['reliinterfacemiinterface',$data->id]) !!}--}}

@stop
