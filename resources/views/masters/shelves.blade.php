@extends('layout')

@section('content')
    <h1>棚</h1>
    <hr>
    {!! link_to('shelves/create', '新規作成', ['class' => 'btn btn-primary']) !!}
    @foreach($items as $item)
        <article>
            <h2><a href="{{url('shelves',$item->id)}}" >{{$item->name}}</a></h2>
            詳細:
            {{$item->infor}}
            <hr>
        </article>
    @endforeach
@endsection