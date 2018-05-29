@extends('layout')

@section('content')
    @include ('errors.form_errors')

    {{--{{$itemid}}--}}


    <div class="row">

        @include('masters.stockItemInfor')
        @include('masters.stockItemInfor2')

        {{--Stock form START--}}
    </div>

    {!! Form::model(null,['method' => 'post','url' => ['stocks'] ]) !!}
    <div class="row">
    <div class="col-sm-12 col-md-8">
        <div class="card">
            <div class="card-header">
                <span class="h4">Stocks Input/Edit</span>

            </div>
            <div class="card-body">
                <div class="form-group">
                    {!! Form::label('serial', 'serial:') !!}
                    {!! Form::text('serial', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group form-check">
                    {!! Form::checkbox('selflg', true,false, ['class' => 'form-check-input']) !!}
                    {!! Form::label('selflg', 'selflg:', ['class' => 'form-check-label'] ) !!}
                </div>

                <shelf-select :shelfid="1" :locationid="1"></shelf-select>

                <div class="form-group">
                    <input class="btn btn-primary form-control" type="submit" value="Add Stock">
                </div>
            </div>
        </div>
        {{--Stock form End--}}
    </div>
</div>
    {{Form::hidden('m_item_id', $mitem->id)}}
    {{Form::hidden('item_id', $item->id)}}
    {!! Form::close() !!}

@endsection
