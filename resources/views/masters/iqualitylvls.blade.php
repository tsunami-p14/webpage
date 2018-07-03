@extends('layout')

@section('content')
    {{--<h1>Quality Level Group</h1>--}}
    <h1>クオリティグループ名</h1>
    <hr>
    {!! link_to('iqualitylvls/create', '新規作成', ['class' => 'btn btn-primary']) !!}
    @foreach($items as $item)
        <article>
            <h2><a href="{{url('iqualitylvls',$item->id)}}" >{{$item->name}}</a></h2>
            <hr>
        </article>
    @endforeach
@endsection