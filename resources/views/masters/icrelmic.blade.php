@extends('layout')

@section('content')

    <h1>Item Category Masters 関連付けるよ</h1>
    <hr>

    {{--Vueのサンプル。--}}
    {{--<article>--}}
        {{--<div>--}}
            {{--<ul id="stable">--}}
                {{--@foreach($datas as $data)--}}
                   {{--<li>{{$data->name}}</li>--}}
                    {{--<example-test></example-test>--}}
                    {{--<example-test :data="{{$data}}"></example-test>--}}
                    {{--<button-counter></button-counter>--}}
                {{--@endforeach--}}
            {{--</ul>--}}
        {{--</div>--}}

    {{--</article>--}}

    {{--{!! link_to('icrelmic/create', '新規作成', ['class' => 'btn btn-primary']) !!}--}}
    @foreach($datas as $data)
        <article>
            <h2><a href="{{url('icrelmic',$data->id)}}" >{{$data->name}}</a></h2>
            {{--<div class="name">--}}
                {{--詳細:{{$data->name}}--}}
            {{--</div>--}}

            @unless ($data->m_i_categories->isEmpty())
                <h5>マスタカテゴリ</h5>
                <ul>
                    @foreach($data->m_i_categories as $m_i_category)
                        <li>Name:{{ $m_i_category->name }} 詳細:{{ $m_i_category->infor}} </li>
                        @unless($m_i_category->m_i_category_dtls->isEmpty())
                            <h6>{{ $m_i_category->name }}のDTL</h6>
                            <ul>
                                @foreach($m_i_category->m_i_category_dtls as $m_i_category_dtl)
                                    <li>{{$m_i_category_dtl->name }} {{$m_i_category_dtl->infor}}</li>
                                @endforeach
                            </ul>
                        @endunless
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