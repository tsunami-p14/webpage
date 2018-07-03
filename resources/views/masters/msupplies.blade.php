@extends('layout')

@section('content')
    <h1>付属品 マスタ</h1>
    <hr>
    {!! link_to('msupplies/create', '新規作成', ['class' => 'btn btn-primary']) !!}
    @foreach($items as $item)
        <article>
            <h2><a href="{{url('msupplies',$item->id)}}" >{{$item->name}}</a></h2>
            詳細:
            {{$item->infor}}
            <hr>
        </article>
    @endforeach
@endsection