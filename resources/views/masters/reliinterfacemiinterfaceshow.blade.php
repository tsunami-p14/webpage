@extends('layout')

@section('content')
    <h1>{{ $data->name}}</h1>

    <hr>

    <article>
        <h1>{{ $data->name}}</h1>
        @unless ($data->m_i_interfaces->isEmpty())
            <h5>Item Interfaces:</h5>
            <ul>
                @foreach($data->m_i_interfaces as $m_i_interface)
                    <li>{{ $m_i_interface->name }} {{ $m_i_interface->infor}} </li>
            @endforeach
        @endunless

    </article>

    <br>

    {!! link_to(action('masters\ReliinterfacemiinterfaceController@edit',[$data->id]),'編集',['class'=>'btn btn-primary']) !!}
    {{--{!! delete_form(['reliinterfacemiinterface',$data->id]) !!}--}}

@stop
