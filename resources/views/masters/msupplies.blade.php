@extends('layout')

@section('content')
    <h1>M Supplies </h1>
    <hr>
    {!! link_to('msupplies/create', '新規作成', ['class' => 'btn btn-primary']) !!}
    @foreach($items as $item)
        <article>
            <h2><a href="{{url('msupplies',$item->id)}}" >{{$item->name}}</a></h2>
            infor:
            {{$item->infor}}
            <hr>
        </article>
    @endforeach
@endsection