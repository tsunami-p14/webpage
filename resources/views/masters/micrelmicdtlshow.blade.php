@extends('layout')

@section('content')
    <h1>{{ $data->name}}</h1>

    <hr>

    <article>
        <h1>{{ $data->name}}</h1>
        @unless ($data->m_i_category_dtls->isEmpty())
            <h5>アイテムカテゴリマスタ 詳細:</h5>
            <ul>
                @foreach($data->m_i_category_dtls as $m_i_category_dtl)
                    <li>{{ $m_i_category_dtl->name }} {{ $m_i_category_dtl->infor}} </li>
            @endforeach
        @endunless

    </article>

    <br>

    {!! link_to(action('masters\MicrelmicdtlController@edit',[$data->id]),'編集',['class'=>'btn btn-primary']) !!}
    {{--{!! delete_form(['micrelmicdtl',$data->id]) !!}--}}

@stop
