@extends('layout')

@section('content')
    Item Edit

    @include ('errors.form_errors')

    {{--{!! Form::model(null,['method' => 'post','url' => ['items'] ]) !!}--}}
    {!! Form::model($item,['method' => 'PATCH','url' => ['items',$itemid ] ]) !!}

    <div class="row">
        <div class="col-sm-12 col-md-5">
            {{--<mitem-select :mitemid="{{$mitemid}}" :mitems="{{$mitems->pluck('typecode','id')}}" :mitemsall="{{$mitems}}"></mitem-select>--}}
            <mitem-select :mitemid="{{$mitemid}}" :mitems="{{$mitems->pluck('typecode','id')}}" :mitemsall="{{$mitems}}"></mitem-select>
        </div>

        <div class="col-sm-12 col-md-7">
            <div class="row">
                <div class="col-12 col-md-7">
                    <div class="card">
                        <div class="card-header">
                            {!! Form::label('name', 'name:') !!}
                        </div>
                        <div class="card-body">
                            {{--{!! Form::text('name', null, ['class' => 'form-control']) !!}--}}
                            {!! Form::text('name', "$item->name", ['class' => 'form-control']) !!}
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            {!! Form::label('infor', 'infor:') !!}
                        </div>
                        <div class="card-body">
                            {!! Form::textarea('infor', "$item->infor", ['class' => 'form-control','row'=>'30','col'=>'3']) !!}
                        </div>
                    </div>
                </div>

                {{--supply--}}
                <div class="col-12 col-md-12">
                    <supply-select itemid="{{$itemid}}" :isupplies="{{$isupplyall->pluck('name','id')}}"></supply-select>
                </div>

                {{--mshop--}}
                <div class="col-12 col-md-12">
                    <shop-select itemid="{{$itemid}}" ></shop-select>
                </div>
                {{--quality--}}
                <div class="col-12 col-md-12">
                    <quality-select itemid="{{$itemid}}"></quality-select>
                </div>

                <div class="col-12 col-md-12">
                    <div class="form-group">
                        <input class="btn btn-primary form-control" type="submit" value="Edit mitem">
                    </div>
                </div>

                {{--<div class="col-12 col-md-7">--}}
                {{--<item-select :items="{{$items->pluck('name','id')}}" :itemsall="{{$items}}"></item-select>--}}
                {{--</div>--}}
                {{--<div class="col-12 col-md-7">--}}
                {{--<item-select :items="{{$items->pluck('name','id')}}" :itemsall="{{$items}}"></item-select>--}}
                {{--</div>--}}

            </div>

        </div>

    </div>

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

{{--<script>--}}
{{--import SupplySelect from "../../assets/js/components/supplySelect";--}}
{{--export default {--}}
{{--components: {SupplySelect}--}}
{{--}--}}
{{--</script>--}}