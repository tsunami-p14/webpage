@extends('layout')

@section('content')
    @include ('errors.form_errors')

    <div class="row">
        <form class="form-inline" action="/stocklists/" method="get">
            <label for="keywords" class="control-label"><span class="h4">StockLists</span></label>
            {{ csrf_field() }}
            <input type="text" name="keywords" class="form-control">
            <input type="submit" value="検索" class="btn btn-info form-control">
        </form>
    </div>

    <div class="row">

        <div class="col-sm-12 col-md-12">
            {{--Stock Table--}}
            <div class="card">
                {{$stocks->links()}}
                <table class="table table-striped table-responsive">
                    <thead>
                    <tr>
                        <th>Serial</th>
                        <th>Selflg</th>
                        <th>TypeCode</th>
                        <th>item Name</th>
                        <th>Quality</th>
                        <th>Shelf</th>
                        <th>Location</th>
                        <th>Create</th>
                        <th>update</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($stocks as $stock)
                        <tr>
                            <td>{{$stock->serial}}</td>
                            <td>{{$stock->selflg}}</td>
                            @foreach($stock->items as $items)
                                @foreach($items->m_items as $mitems)
                                    <td>{{$mitems->typecode}}</td>
                                @endforeach

                                <td>{{$items->name}}<a href="/stocks/{{$items->id}}/new" title="New" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></a></td>

                                @foreach($items->m_i_qlty_categories as $m_i_qlty_categories)
                                    <td>{{$m_i_qlty_categories->name}}:{{$m_i_qlty_categories->score}}</td>
                                @endforeach
                            @endforeach

                            @foreach($stock->shelves as $shelf)
                                <td>{{$shelf->name}}</td>
                            @endforeach

                            @foreach($stock->locations as $location)
                                <td>{{$location->name}}</td>
                            @endforeach
                            <td>{{$stock->created_at}}</td>
                            <td>{{$stock->updated_at}}</td>
                            <td>
                                {!! link_to(action('masters\StockController@editor',[$stock->id,$items->id]),'編集',['class'=>'btn btn-primary']) !!}
                                {!! delete_form(['stocks',$stock->id]) !!}
                            </td>
                        </tr>
                    @endforeach

                    {{--{{$stocks}}--}}

                    </tbody>
                </table>
                {{--{{$stocks->appends(Request::only('keywords'))->links()}}--}}
                {{$stocks->appends(Request::only('keywords'))->links()}}
            </div>
        </div>


        {{--@include('masters.stockItemInfor')--}}
        {{--@include('masters.stockItemInfor2')--}}
    </div>



@endsection
