@extends('layout')

@section('content')

    <h1>付属品リレーション</h1>
    <hr>

    @foreach($items as $item)
        <article>
            <h2><a href="{{url('relisupplymsupply',$item->id)}}" >{{$item->name}}</a></h2>
            {{--<div class="name">--}}
            {{--詳細:{{$data->name}}--}}
            {{--</div>--}}

            @unless ($item->m_supplies->isEmpty())
                <h5>付属品招待</h5>
                <ul>
                    @foreach($item->m_supplies as $m_supply)
                        <li>{{ $m_supply->name }} 詳細:{{ $m_supply->infor}} </li>
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