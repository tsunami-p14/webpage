@extends('layout')

@section('content')
    <h1>Item Interfaces</h1>
    <hr>
    {!! link_to('iinterface/create', '新規作成', ['class' => 'btn btn-primary']) !!}
    @foreach($datas as $data)
        <article>
            <h2><a href="{{url('iinterface',$data->id)}}" >{{$data->name}}</a></h2>
        </article>
    @endforeach
@endsection