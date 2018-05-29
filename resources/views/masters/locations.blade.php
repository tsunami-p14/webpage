@extends('layout')

@section('content')
    <h1>Locations</h1>
    <hr>
    {!! link_to('locations/create', '新規作成', ['class' => 'btn btn-primary']) !!}
    @foreach($items as $item)
        <article>
            <h2><a href="{{url('locations',$item->id)}}" >{{$item->name}}</a></h2>
            infor:
            {{$item->infor}}
            <hr>
        </article>
    @endforeach
@endsection