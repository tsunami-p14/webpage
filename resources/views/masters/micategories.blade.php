@extends('layout')

@section('content')
    <h1>Micategories</h1>
    <hr>
    {!! link_to('micategories/create', '新規作成', ['class' => 'btn btn-primary']) !!}
    @foreach($datas as $data)
        <article>
            <h2><a href="{{url('micategories',$data->id)}}" >{{$data->name}}</a></h2>
            <div class="infor">
                詳細:{{$data->infor}}
            </div>
            <div class="sort_order">
                sort_order:{{$data->sort_order}}
            </div>
        </article>
    @endforeach
@endsection