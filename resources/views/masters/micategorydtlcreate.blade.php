@extends('layout')

@section('content')
    Micategories DTL

    @include ('errors.form_errors')

    {!! Form::model(null,['method' => 'post','url' => ['micategorydtls'] ]) !!}
        @include('masters.micategorydtlform',['submitButton' =>'add micategoryDtl'])
    {!! Form::close() !!}

    {{--{!! Form::open(['url'=>'micategorydtls']) !!}--}}

    {{--<div class="form-group">--}}
        {{--{!! Form::label('name', 'name:') !!}--}}
        {{--{!! Form::text('name', null, ['class' => 'form-control']) !!}--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
        {{--{!! Form::label('infor', 'infor:') !!}--}}
        {{--{!! Form::text('infor', null, ['class' => 'form-control']) !!}--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
        {{--<input class="btn btn-primary form-control" type="submit" value="Add Micategory DTL">--}}
    {{--</div>--}}
    {{--{!! Form::close() !!}--}}

@endsection