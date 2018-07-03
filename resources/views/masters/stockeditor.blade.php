@extends('layout')

@section('content')
    @include ('errors.form_errors')



    <div class="row">
        @include('masters.stockItemInfor')
        @include('masters.stockItemInfor2')
    </div>

    {!! Form::model($stock,['method' => 'PATCH','url' => ['stocks',$stock->id ] ]) !!}
    <div class="row">
        <div class="col-sm-12 col-md-8">
            <div class="card">
                <div class="card-header">
                    <span class="h4">在庫 追加/編集</span>

                </div>
                <div class="card-body">
                    <div class="form-group">
                        {!! Form::label('serial', 'シリアル番号:') !!}
                        {!! Form::text('serial', $stock->serial, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group form-check">
                        {{ Form::hidden('selflg', '0') }}
                        {!! Form::checkbox('selflg', true,$stock->selflg, ['class' => 'form-check-input']) !!}
                        {!! Form::label('selflg', '売却済み:', ['class' => 'form-check-label'] ) !!}
                    </div>

                    <shelf-select :shelfid="{{$stockshelf_id}}" :locationid="{{$stocklocation_id}}"></shelf-select>

                    <div class="form-group">
                        <input class="btn btn-primary form-control" type="submit" value="Edit Stock">
                    </div>
                </div>
            </div>
            {{--Stock form End--}}
        </div>
    </div>
    {{Form::hidden('m_item_id', $mitem->id)}}
    {{Form::hidden('item_id', $item->id)}}
    {{Form::hidden('id', $stock->id)}}
    {!! Form::close() !!}


@endsection

{{--<script>--}}
{{--import SupplySelect from "../../assets/js/components/supplySelect";--}}
{{--export default {--}}
{{--components: {SupplySelect}--}}
{{--}--}}
{{--</script>--}}