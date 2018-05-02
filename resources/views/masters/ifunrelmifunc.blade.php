@extends('layout')

@section('content')

    <h1>ifunc Mifncdtl 関連付けるよ</h1>
    <hr>

    @foreach($datas as $data)
        <article>
            <h2><a href="{{url('ifunrelmifunc',$data->id)}}" >{{$data->name}}</a></h2>
            {{--<div class="name">--}}
            {{--詳細:{{$data->name}}--}}
            {{--</div>--}}

            @unless ($data->m_i_function_dtls->isEmpty())
                <h5>マスタファンクション詳細</h5>
                <ul>
                    @foreach($data->m_i_function_dtls as $m_i_function_dtl)
                        <li>Name:{{ $m_i_function_dtl->name }} 詳細:{{ $m_i_function_dtl->infor}} </li>
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