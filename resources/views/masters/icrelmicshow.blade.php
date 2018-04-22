@extends('layout')

@section('content')
    <h1>{{ $data->name}}</h1>

    <hr>

    <article>
        <h1>{{ $data->name}}</h1>
        @unless ($data->m_i_categories->isEmpty())
            <h5>マスタカテゴリ</h5>
            <ul>
                @foreach($data->m_i_categories as $m_i_category)
                    <li>{{ $m_i_category->name }} {{ $m_i_category->infor}} </li>
                    @unless($m_i_category->m_i_category_dtls->isEmpty())
                        <h6>{{ $m_i_category->name }}詳細</h6>
                        <ul>
                            @foreach($m_i_category->m_i_category_dtls as $m_i_category_dtl)
                                <li>{{$m_i_category_dtl->name }} {{$m_i_category_dtl->infor}}</li>
                            @endforeach
                        </ul>
                    @endunless
                @endforeach
            </ul>
        @endunless
    </article>

    <br>

    {!! link_to(action('masters\IcrelmicController@edit',[$data->id]),'編集',['class'=>'btn btn-primary']) !!}
    {{--{!! delete_form(['icategories',$data->id]) !!}--}}

@stop
