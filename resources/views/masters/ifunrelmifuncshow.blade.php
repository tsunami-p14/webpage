@extends('layout')

@section('content')
    <h1>{{ $data->name}}</h1>

    <hr>

    <article>
        <h1>{{ $data->name}}</h1>
        @unless ($data->m_i_function_dtls->isEmpty())
            <h5>機能詳細:</h5>
            <ul>
                @foreach($data->m_i_function_dtls as $m_i_function_dtl)
                    <li>{{ $m_i_function_dtl->name }} {{ $m_i_function_dtl->infor}} </li>
            @endforeach
        @endunless

    </article>

    <br>

    {!! link_to(action('masters\RelifunmifuncController@edit',[$data->id]),'編集',['class'=>'btn btn-primary']) !!}
    {!! delete_form(['ifunrelmifunc',$data->id]) !!}

@stop
