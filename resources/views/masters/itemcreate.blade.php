@extends('layout')

@section('content')
    Item Create

    @include ('errors.form_errors')

    {!! Form::model(null,['method' => 'post','url' => ['items'] ]) !!}

    <div class="row">
        <div class="col-sm-12 col-md-5">
            <mitem-select :mitems="{{$mitems->pluck('typecode','id')}}" :mitemsall="{{$mitems}}"></mitem-select>
        </div>

        <div class="col-sm-12 col-md-7">
            <div class="row">
                <div class="col-12 col-md-7">
                    <div class="card">
                        <div class="card-header">
                            {!! Form::label('name', '商品名:') !!}
                        </div>
                        <div class="card-body">
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            {!! Form::label('infor', '詳細:') !!}
                        </div>
                        <div class="card-body">
                            {!! Form::textarea('infor', null, ['class' => 'form-control','row'=>'30','col'=>'3']) !!}
                        </div>
                    </div>
                </div>

                {{--supply--}}
                <div class="col-12 col-md-12">
                    <supply-select :isupplies="{{$isupplyall->pluck('name','id')}}"></supply-select>
                    {{--@foreach($items as $item)--}}
                        {{--@foreach($item->i_supplies as $i_suppply)--}}
                            {{--<supply-select :isupplies="{{$isupplyall->pluck('name','id')}}"></supply-select>--}}
                        {{--@endforeach--}}
                    {{--@endforeach--}}
                </div>
                <div class="col-12 col-md-12">
                    <shop-select></shop-select>
                </div>
                <div class="col-12 col-md-12">
                    <quality-select></quality-select>
                </div>
                <div class="col-12 col-md-12">
                    <div class="form-group">
                        <input class="btn btn-primary form-control" type="submit" value="Edit mitem">
                    </div>
                </div>
                {{--quality--}}
                {{--mshop--}}

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