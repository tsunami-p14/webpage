@extends('layout')

@section('content')
    <h1>{{ $item->name}}</h1>

    <hr>

    <article>
        <h1>{{ $item->name}}</h1>
        @unless ($item->m_i_qlty_categories->isEmpty())
            <h5>Item Interfaces:</h5>
            <ul>
                @foreach($item->m_i_qlty_categories as $m_i_qlty_category)
                    <li>{{ $m_i_qlty_category->name }} {{ $m_i_qlty_category->score}} </li>
            @endforeach
        @endunless

    </article>

    <br>

    {!! link_to(action('masters\ReliqualitylvlmiqltycategoryController@edit',[$item->id]),'編集',['class'=>'btn btn-primary']) !!}
    {{--{!! delete_form(['reliinterfacemiinterface',$data->id]) !!}--}}

@stop
