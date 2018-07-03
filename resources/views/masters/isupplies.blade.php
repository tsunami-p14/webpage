@extends('layout')

@section('content')
    <h1>付属品 グループ </h1>
    <hr>
    {!! link_to('isupplies/create', '新規作成', ['class' => 'btn btn-primary']) !!}
    @foreach($items as $item)
        <article>
            <h2><a href="{{url('isupplies',$item->id)}}" >{{$item->name}}</a></h2>
            <hr>
        </article>
    @endforeach
@endsection