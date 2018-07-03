@extends('layout')

@section('content')

    <h1>インターフェイスリレーション</h1>
    <hr>

    @foreach($datas as $data)
        <article>
            <h2><a href="{{url('reliinterfacemiinterface',$data->id)}}" >{{$data->name}}</a></h2>
            {{--<div class="name">--}}
            {{--詳細:{{$data->name}}--}}
            {{--</div>--}}

            @unless ($data->m_i_interfaces->isEmpty())
                <h5>インターフェイスマスタ 詳細</h5>
                <ul>
                    @foreach($data->m_i_interfaces as $m_i_interface)
                        <li>Name:{{ $m_i_interface->name }} 詳細:{{ $m_i_interface->infor}} </li>
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