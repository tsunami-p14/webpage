@extends('layout')

@section('content')
    <h1>{{ $item->name}}</h1>

    <hr>

    <article>
        <h1>{{ $item->name}}</h1>
        @unless ($item->m_supplies->isEmpty())
            <h5>付属品詳細:</h5>
            <ul>
                @foreach($item->m_supplies as $m_supply)
                    <li>{{ $m_supply->name }} {{ $m_supply->infor}} </li>
            @endforeach
        @endunless

    </article>

    <br>

    {!! link_to(action('masters\RelisupplymsupplyController@edit',[$item->id]),'編集',['class'=>'btn btn-primary']) !!}
    {{--{!! delete_form(['reliinterfacemiinterface',$data->id]) !!}--}}

@stop
