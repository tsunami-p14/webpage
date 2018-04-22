@extends('layout')

@section('content')
    i function

    @include ('errors.form_errors')

    {!! Form::model(null,['method' => 'post','url' => ['ifunctions'] ]) !!}
    @include('masters.ifunctionform',['submitButton' =>'Edit icategory'])
    {!! Form::close() !!}


    {{--{!! Form::open(['url'=>'icategories']) !!}--}}

    {{--<div class="form-group">--}}
    {{--{!! Form::label('name', 'name:') !!}--}}
    {{--{!! Form::text('name', null, ['class' => 'form-control']) !!}--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
    {{--<input class="btn btn-primary form-control" type="submit" value="Add icategory">--}}
    {{--</div>--}}
    {{--{!! Form::close() !!}--}}

@endsection