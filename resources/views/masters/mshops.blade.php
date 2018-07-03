@extends('layout')

@section('content')
    <h1>ショップマスタ</h1>
    <hr>
    {!! link_to('mshops/create', '新規作成', ['class' => 'btn btn-primary']) !!}
    @foreach($items as $item)
        <article>
            <h2><a href="{{url('mshops',$item->id)}}" >{{$item->name}}</a></h2>
            {{--infor:--}}
            {{--{{$item->infor}}--}}
            <hr>
        </article>
    @endforeach
@endsection