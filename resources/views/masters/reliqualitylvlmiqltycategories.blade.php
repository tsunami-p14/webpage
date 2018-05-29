@extends('layout')

@section('content')

    <h1>Quality GROUP relation</h1>
    <hr>

    @foreach($items as $item)
        <article>
            <h2><a href="{{url('reliqualitylvlmiqltycategories',$item->id)}}" >{{$item->name}}</a></h2>
            {{--<div class="name">--}}
            {{--詳細:{{$data->name}}--}}
            {{--</div>--}}

            @unless ($item->m_i_qlty_categories->isEmpty())
                <h5>マスタ  詳細</h5>
                <ul>
                    @foreach($item->m_i_qlty_categories as $m_i_qlty_category)
                        <li>{{ $m_i_qlty_category->name }} {{ $m_i_qlty_category->score}} </li>
                    @endforeach
                </ul>
            @endunless


            {{--追加--}}
            {{--@unless ($data->m_i_categories->isEmpty())--}}
            {{--<h5>m_i_category:</h5>--}}
            {{--<ul>--}}
            {{--@foreach($data->m_i_categories as $m_i_category)--}}
            {{--<li>{{ $m_i_category->name }} {{ $m_i_category->infor}} </li>--}}
            {{--@endforeach--}}
            {{--</ul>--}}
            {{--<h5>m_i_category_dtl:</h5>--}}
            {{--<ul>--}}
            {{--@foreach($data->m_i_category_dtls as $m_i_category_dtl)--}}
            {{--<li>{{ $m_i_category_dtl->name }} {{ $m_i_category_dtl->infor}}</li>--}}
            {{--@endforeach--}}
            {{--</ul>--}}
            {{--@endunless--}}


        </article>
    @endforeach
@endsection