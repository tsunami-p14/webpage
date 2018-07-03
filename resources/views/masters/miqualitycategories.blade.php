@extends('layout')

@section('content')
    <h1>商品クオリティマスタ</h1>
    <hr>
    {!! link_to('miqualitycategories/create', '新規作成', ['class' => 'btn btn-primary']) !!}
    @foreach($items as $item)
        <article>
            <h2><a href="{{url('miqualitycategories',$item->id)}}" >{{$item->name}}</a></h2>
            Score:
            {{$item->score}}
            <hr>
        </article>
    @endforeach
@endsection