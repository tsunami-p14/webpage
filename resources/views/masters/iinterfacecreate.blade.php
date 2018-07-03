@extends('layout')

@section('content')
    インターフェイス

    @include ('errors.form_errors')

    {!! Form::model(null,['method' => 'post','url' => ['iinterface'] ]) !!}
    @include('masters.iinterfaceform',['submitButton' =>'add interface'])
    {!! Form::close() !!}


    {{--{!! Form::open(['url'=>'makers']) !!}--}}

    {{--<div class="form-group">--}}
    {{--{!! Form::label('name', 'name:') !!}--}}
    {{--{!! Form::text('name', null, ['class' => 'form-control']) !!}--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
    {{--{!! Form::label('name_a', 'name_a:') !!}--}}
    {{--{!! Form::text('name_a', null, ['class' => 'form-control']) !!}--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
    {{--{!! Form::label('infor', 'infor:') !!}--}}
    {{--{!! Form::text('infor', null, ['class' => 'form-control']) !!}--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
    {{--<input class="btn btn-primary form-control" type="submit" value="Add makers">--}}
    {{--</div>--}}
    {{--{!! Form::close() !!}--}}

@stop