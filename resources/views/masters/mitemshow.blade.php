@extends('layout')

@section('content')
    <h1>{{$data->typecode}}</h1>
    <hr>
    <article>
    <div>
        <h5>Makers:</h5>
        @unless ($data->m_makers=== null)
                <ul>
                    <li>{{$data->m_makers->name}}  {{$data->m_makers->infor}}</li>
                </ul>
        @endunless
    </div>

    <div>
        <h5>カテゴリ:</h5>
        @unless ($data->i_categories=== null)
            <ul>
               <li>{{$data->i_categories->name}}</li>
                @unless($data->i_categories->m_i_categories===null)
                    <ul>
                    @foreach($data->i_categories->m_i_categories as $micategories)
                        <li>
                            {{$micategories->name}} {{$micategories->infor}}
                            @unless($micategories->m_i_category_dtls===null)
                                <ul>
                                    @foreach($micategories->m_i_category_dtls as $micategorydtl)
                                        <li>
                                            {{$micategorydtl->name}}  {{$micategorydtl->infor}}
                                        </li>
                                    @endforeach
                                </ul>
                            @endunless
                        </li>
                    @endforeach
                    </ul>
                @endunless
            </ul>
        @endunless
    </div>

    <div>
        <h5>機能:</h5>
        @unless ($data->i_functions=== null)
            <ul>
                <li>
                    {{$data->i_functions->name}}
                    @unless($data->i_functions->m_i_function_dtls===null)
                        <ul>
                            @foreach($data->i_functions->m_i_function_dtls as $mifunctiondtls)
                             <li>
                                {{$mifunctiondtls->name}}  {{$mifunctiondtls->infor}}
                             </li>
                            @endforeach
                        </ul>
                    @endunless
                </li>
            </ul>
        @endunless
    </div>

    <div>
        <h5>インターフェイス:</h5>
        @unless($data->i_interfaces=== null)
            <ul>
                <li>
                    {{$data->i_functions->name}}
                    @unless($data->i_functions->m_i_functions===null)
                        <ul>
                            @foreach($data->i_functions->m_i_functions as $ifunctiondtls)
                                <li>
                                    {{$ifunctiondtls->name}}  {{$ifunctiondtls->infor}}
                                </li>
                            @endforeach
                        </ul>
                    @endunless
                </li>
            </ul>

        @endunless

    </div>


        <div class="scalew">
            サイズ W:
            {{ $data->scale_w}}
        </div>
        <div class="scaled">
            サイズ d:
            {{ $data->scale_d}}
        </div>
        <div class="scaleh">
            サイズ h:
            {{ $data->scale_h}}
        </div>
        <div class="weight">
            重さ:
            {{ $data->weight}}
        </div>

    </article>

    <br>

    {!! link_to(action('masters\MitemController@edit',[$data->id]),'編集',['class'=>'btn btn-primary']) !!}
    {!! delete_form(['mitems',$data->id]) !!}

@stop
