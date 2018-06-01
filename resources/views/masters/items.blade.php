@extends('layout')

@section('content')
    <div class="row">
        <h4>ITEMS
            <a href="/items/create" title="New" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></a>
            {{--{!! link_to('mitems/create', '+', ['class' => 'btn btn-primary btn-sm"']) !!}--}}
        </h4>

        <hr>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-4">
            {{--{!! Form::model($items,['method' => 'PATCH','url' => ['items',$item->id ] ]) !!}--}}
            {{--@include('masters.mitemform',['submitButton' =>'Edit Interface'])--}}

            {{--{!! Form::close() !!}--}}

            <mitem-select :mitems="{{$mitems->pluck('typecode','id')}}" :mitemsall="{{$mitems}}" :mitemid="{{$mitemid}}"></mitem-select>

            {{--@foreach($mitems as $mitem)--}}
                {{--<article>--}}
                    {{--<h6><a href="{{url('mitems',$mitem->id)}}">{{$mitem->typecode}}</a></h6>--}}
                {{--</article>--}}
            {{--@endforeach--}}

        </div>
        <div class="col-sm-12 col-md-8">
            <div class="row">
                <div class="col-12">
                    <item-select :items="{{$items->pluck('name','id')}}" :itemsall="{{$items}}"></item-select>
                </div>
            </div>
        </div>
    </div>
@endsection
