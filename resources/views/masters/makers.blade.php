@extends('layout')

@section('content')
    <h1>Makers</h1>
    <hr>
    {!! link_to('makers/create', '新規作成', ['class' => 'btn btn-primary']) !!}
    @foreach($datas as $data)
        <article>
            <h2><a href="{{url('makers',$data->id)}}" >{{$data->name}}</a></h2>
            <div class="name_a">
                よみがな:{{$data->name_a}}
            </div>
            <div class="infor">
                詳細:{{$data->infor}}
            </div>
        </article>
    @endforeach
@endsection