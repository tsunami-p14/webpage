<div class="col-sm-12 col-md-8">
    <div class="card">
        <div class="card-header">
            <span class="h4">Item</span>
        </div>
        <div class="card-body">
            <div>
                <table class="table">
                    <tr>
                        <td>name</td>
                        <td><span class="h5">{{$item->name}}</span></td>
                    </tr>
                    <tr>
                        <td>infor</td>
                        <td><span class="h5">{{$item->infor}}</span></td>
                    </tr>
                    <tr>
                        <td>Supply</td>
                        <td>
                            @foreach($item->i_supplies as $ispl)
                                <ul>
                                    <li><span class="h5">{{$ispl->name}}</span> <small class="text-muted">{{$ispl->infor}}</small></li>
                                    <ul>
                                        @foreach($ispl->m_supplies as $mspl)
                                            <li>
                                                <span class="h5">{{$mspl->name}}</span> <small class="text-muted">{{$mspl->infor}}</small>
                                            </li>
                                        @endforeach
                                    </ul>
                                </ul>
                            @endforeach
                        </td>
                    </tr>

                    <tr>
                        <td>Shops</td>
                        <td>
                            @foreach($item->m_shops as $mshops)
                                <ul>
                                    <li><span class="h5">{{$mshops->name}}</span></li>
                                </ul>
                            @endforeach

                        </td>
                    </tr>

                    <tr>
                        <td>Quality</td>
                        <td>
                            @foreach($item->i_quality_lvls as $miqc)
                                <span class="h5">{{$miqc->name}}</span> <small class="text-muted">{{$miqc->infor}}</small>
                            @endforeach
                            @foreach($item->m_i_qlty_categories as $miqc)
                                <ul>
                                    <li><span class="h5">{{$miqc->name}}</span> <small class="text-muted">{{$miqc->score}}</small></li>
                                </ul>
                            @endforeach
                        </td>

                    </tr>


                </table>
            </div>

        </div>
    </div>
    {{--Stocked START--}}
    <div class="card">
        <div class="card-header">
            {{--<span class="h4">Stocks</span> <a href="/stocks/{{$item->id}}/new" title="New" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></a>--}}
            <form class="form-inline" action="/stocks/{{$item->id}}/search" method="post">
                <label for="keywords" class="control-label"><span class="h4">Stocks</span><a href="/stocks/{{$item->id}}/new" title="New" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></a></label>
                {{ csrf_field() }}
                <input type="text" name="keywords" class="form-control">
                <input type="submit" value="検索" class="btn btn-info form-control">
            </form>
        </div>
        {{--{!! Form::model($stock,['method' => 'DELETE','url' => ['stocks',$stock->id ] ]) !!}--}}

        {!! Form::model(null,['method' => 'post','url' => ['stocks'] ]) !!}

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="text-center">
                    <tr>
                        <th>Serial</th>
                        <th>Selflg</th>
                        <th>Shelf</th>
                        <th>Location</th>
                        <th>create</th>
                        <th>update</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($stockers as $sto)
                        <tr class="text-center">
                            <td class="text-left">{{$sto->serial}}</td>
                            <td>{{$sto->selflg}}</td>
                            <td>
                                @foreach($sto->shelves as $shelf)
                                    {{$shelf->name}}
                                @endforeach
                            </td>
                            <td>
                                @foreach($sto->locations as $locate)
                                    {{$locate->name}}
                                @endforeach
                            </td>

                            <td>{{$sto->created_at}}</td>
                            <td>{{$sto->updated_at}}</td>
                            <td>
                                <div class="btn-toolbar">
                                    <div class="btn-group">
                                        {!! link_to(action('masters\StockController@editor',[$sto->id,$item->id]),'編集',['class'=>'btn btn-primary']) !!}
                                        {!! delete_form(['stocks',$sto->id]) !!}
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach



                    {{--@foreach($item->stocks as $stock)--}}
                        {{--<tr class="text-center">--}}
                            {{--<td class="text-left">{{$stock->serial}}</td>--}}
                            {{--<td>{{$stock->selflg}}</td>--}}
                            {{--<td>--}}
                                {{--@foreach($stock->shelves as $shelf)--}}
                                    {{--{{$shelf->name}}--}}
                                {{--@endforeach--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--@foreach($stock->locations as $locate)--}}
                                    {{--{{$locate->name}}--}}
                                {{--@endforeach--}}
                            {{--</td>--}}

                            {{--<td>{{$stock->created_at}}</td>--}}
                            {{--<td>{{$stock->updated_at}}</td>--}}
                            {{--<td>--}}
                                {{--{!! link_to(action('masters\StockController@editor',[$stock->id,$item->id]),'編集',['class'=>'btn btn-primary']) !!}--}}
                                {{--{!! link_to_action('masters\StockController@editor','test',[$stock->id,$item->id]) !!}--}}
                                {{--{!! delete_form(['stocks',$stock->id]) !!}--}}
                            {{--</td>--}}
                        {{--</tr>--}}
                    {{--@endforeach--}}
                    </tbody>
                </table>
                {{$stockers->appends(Request::only('keywords'))->links()}}
            </div>
        </div>
        {{Form::hidden('m_item_id', $mitem->id)}}

        {!! Form::close() !!}

    </div>

    {{--Stocked end--}}

</div>