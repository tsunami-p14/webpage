@extends('layout')

@section('content')
    @include ('errors.form_errors')

    {{--{{$itemid}}--}}

    {{--{!! Form::model(null,['method' => 'post','url' => ['stocks'] ]) !!}--}}
    <div class="row">
        @include('masters.stockItemInfor')
        @include('masters.stockItemInfor2')
    </div>



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

{{--<script>--}}
{{--import SupplySelect from "../../assets/js/components/supplySelect";--}}
{{--export default {--}}
{{--components: {SupplySelect}--}}
{{--}--}}
{{--</script>--}}