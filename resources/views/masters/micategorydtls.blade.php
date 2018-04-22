@extends('layout')

@section('content')
    <h1>Micategories DTL</h1>
    <hr>
    {!! link_to('micategorydtls/create', '新規作成', ['class' => 'btn btn-primary']) !!}
    @foreach($datas as $data)
        <article>
            <h2><a href="{{url('micategorydtls',$data->id)}}" >{{$data->name}}</a></h2>
            <div class="infor">
                詳細:{{$data->infor}}
            </div>
        </article>
    @endforeach
@endsection