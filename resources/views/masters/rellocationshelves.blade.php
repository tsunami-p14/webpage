@extends('layout')

@section('content')

    <h1>Shelves relation</h1>
    <hr>

    @foreach($items as $item)
        <article>
            <h2><a href="{{url('rellocationshelves',$item->id)}}" >{{$item->name}}</a></h2>
            {{--<div class="name">--}}
            {{--詳細:{{$data->name}}--}}
            {{--</div>--}}

            @unless ($item->locations->isEmpty())
                <h5>Supply 詳細</h5>
                <ul>
                    @foreach($item->locations as $location)
                        <li>{{ $location->name }} 詳細:{{ $location->infor}} </li>
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
            {{--@foreach($data->m_i_category_dtls as $m_i_category_ dtl)--}}
            {{--<li>{{ $m_i_category_dtl->name }} {{ $m_i_category_dtl->infor}}</li>--}}
            {{--@endforeach--}}
            {{--</ul>--}}
            {{--@endunless--}}


        </article>
    @endforeach
@endsection