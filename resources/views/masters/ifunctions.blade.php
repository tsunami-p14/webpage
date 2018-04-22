@extends('layout')

@section('content')
    <h1>I Functions</h1>
    <hr>
    {!! link_to('ifunctions/create', '新規作成', ['class' => 'btn btn-primary']) !!}
    @foreach($datas as $data)
        <article>
            <h2><a href="{{url('ifunctions',$data->id)}}" >{{$data->name}}</a></h2>
            <div class="name">
                詳細:{{$data->name}}
            </div>

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