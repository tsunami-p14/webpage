    <div class="col-sm-12 col-md-4">
        {{--Item Master START--}}
            <div class="card">
            <div class="card-header">
                <span class="h4">アイテムマスタ</span>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead></thead>
                        <tbody>
                            <tr>
                                <td style="text-align: left">型番</td>
                                <td><span class="h5">{{$mitem->typecode}}</span></td>
                            </tr>
                            <tr>
                                <td style="text-align: left">サイズ W</td>
                                <td><span class="h5">{{$mitem->scale_w}}</span></td>
                            </tr>
                            <tr>
                                <td style="text-align: left">サイズ D</td>
                                <td><span class="h5">{{$mitem->scale_d}}</span></td>
                            </tr>
                            <tr>
                                <td style="text-align: left">サイズ H</td>
                                <td><span class="h5">{{$mitem->scale_h}}</span></td>
                            </tr>
                            <tr>
                                <td style="text-align: left">重量</td>
                                <td><span class="h5">{{$mitem->weight}}</span></td>
                            </tr>
                            <tr>
                                <td style="text-align: left">Maker</td>
                                <td><span class="h5">{{$mitem->m_makers->name}}</span> <small class="text-muted">{{$mitem->m_makers->infor}}</small></td>
                            </tr>
                            <tr>
                                <td style="text-align: left">カテゴリ</td>
                                <td>
                                    {{$mitem->i_categories->name}}<br>
                                    <ul>
                                        @foreach($mitem->i_categories->m_i_categories as $mic )
                                            <li><span class="h5">{{$mic->name}}</span> <small class="text-muted">{{$mic->infor}}</small>
                                                @foreach($mic->m_i_category_dtls as $micd)
                                                    <ul>
                                                        <li><span class="h5">{{$micd->name}}</span> <small class="text-muted">{{$micd->infor}}</small></li>
                                                    </ul>
                                                @endforeach
                                            </li>
                                        @endforeach
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: left">機能</td>
                                <td>
                                    <span class="h5">{{$mitem->i_functions->name}}</span>
                                    <ul>
                                        @foreach($mitem->i_functions->m_i_function_dtls as $mifd)
                                            <li>
                                                <span class="h5">{{$mifd->name}}</span> <small class="text-muted">{{$mifd->infor}}</small>
                                            </li>
                                        @endforeach
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: left">インターフェイス</td>
                                <td>
                                    <span class="h5">{{$mitem->i_interfaces->name}}</span>
                                    <ul>
                                        @foreach($mitem->i_interfaces->m_i_interfaces as $miif)
                                            <li>
                                                <span class="h5">{{$miif->name}}</span> <small class="text-muted">{{$miif->infor}}</small>
                                            </li>
                                        @endforeach
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{--Item Master end--}}

    </div>

    {{--<div class="col-sm-12 col-md-8">--}}
        {{--<div class="card">--}}
            {{--<div class="card-header">--}}
                {{--<span class="h4">Item</span>--}}
            {{--</div>--}}
            {{--<div class="card-body">--}}
                {{--<div>--}}
                    {{--<table class="table">--}}
                        {{--<tr>--}}
                            {{--<td>name</td>--}}
                            {{--<td><span class="h5">{{$item->name}}</span></td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                            {{--<td>infor</td>--}}
                            {{--<td><span class="h5">{{$item->infor}}</span></td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                            {{--<td>Supply</td>--}}
                            {{--<td>--}}
                                {{--@foreach($item->i_supplies as $ispl)--}}
                                    {{--<ul>--}}
                                        {{--<li><span class="h5">{{$ispl->name}}</span> <small class="text-muted">{{$ispl->infor}}</small></li>--}}
                                        {{--<ul>--}}
                                            {{--@foreach($ispl->m_supplies as $mspl)--}}
                                                {{--<li>--}}
                                                    {{--<span class="h5">{{$mspl->name}}</span> <small class="text-muted">{{$mspl->infor}}</small>--}}
                                                {{--</li>--}}
                                            {{--@endforeach--}}
                                        {{--</ul>--}}
                                    {{--</ul>--}}
                                {{--@endforeach--}}
                            {{--</td>--}}
                        {{--</tr>--}}

                        {{--<tr>--}}
                            {{--<td>Shops</td>--}}
                            {{--<td>--}}
                                {{--@foreach($item->m_shops as $mshops)--}}
                                    {{--<ul>--}}
                                        {{--<li><span class="h5">{{$mshops->name}}</span></li>--}}
                                    {{--</ul>--}}
                                {{--@endforeach--}}

                            {{--</td>--}}
                        {{--</tr>--}}

                        {{--<tr>--}}
                            {{--<td>Quality</td>--}}
                            {{--<td>--}}
                                {{--@foreach($item->i_quality_lvls as $miqc)--}}
                                    {{--<span class="h5">{{$miqc->name}}</span> <small class="text-muted">{{$miqc->infor}}</small>--}}
                                {{--@endforeach--}}
                                {{--@foreach($item->m_i_qlty_categories as $miqc)--}}
                                    {{--<ul>--}}
                                        {{--<li><span class="h5">{{$miqc->name}}</span> <small class="text-muted">{{$miqc->score}}</small></li>--}}
                                    {{--</ul>--}}
                                {{--@endforeach--}}
                            {{--</td>--}}

                        {{--</tr>--}}


                    {{--</table>--}}
                {{--</div>--}}

            {{--</div>--}}
        {{--</div>--}}
        {{--Stocked START--}}
        {{--<div class="card">--}}
            {{--<div class="card-header">--}}
                {{--<span class="h4">Stocks</span> <a href="/stocks/{{$item->id}}/new" title="New" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></a>--}}

            {{--</div>--}}
            {{--<div class="card-body">--}}
                {{--<div>--}}
                    {{--<table class="table">--}}
                        {{--<thead class="text-center">--}}
                        {{--<tr>--}}
                            {{--<th>Serial</th>--}}
                            {{--<th>Selflg</th>--}}
                            {{--<th>create</th>--}}
                            {{--<th>update</th>--}}
                            {{--<th>Action</th>--}}
                        {{--</tr>--}}
                        {{--</thead>--}}
                        {{--<tbody>--}}

                        {{--@foreach($item->stocks as $stock)--}}
                            {{--<tr class="text-center">--}}
                                {{--<td class="text-left">{{$stock->serial}}</td>--}}
                                {{--<td>{{$stock->selflg}}</td>--}}
                                {{--<td>{{$stock->created_at}}</td>--}}
                                {{--<td>{{$stock->updated_at}}</td>--}}
                                {{--<td>--}}
                                    {{--{!! link_to(action('masters\StockController@editor',[$stock->id,$item->id]),'編集',['class'=>'btn btn-primary']) !!}--}}
                                    {{--{!! link_to_action('masters\StockController@editor','test',[$stock->id,$item->id]) !!}--}}
                                    {{--{!! delete_form(['stocks',$stock->id]) !!}--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                        {{--@endforeach--}}
                        {{--</tbody>--}}
                    {{--</table>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--Stocked end--}}

    {{--</div>--}}



