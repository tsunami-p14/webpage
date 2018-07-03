@extends('layout')

@section('content')
    <h1>アイテムマスタ </h1>
    <hr>
    {!! link_to('mitems/create', '新規作成', ['class' => 'btn btn-primary']) !!}
    @foreach($datas as $data)
        <article>
            <h2><a href="{{url('mitems',$data->id)}}" >{{$data->typecode}}</a></h2>
        </article>
    @endforeach
@endsection